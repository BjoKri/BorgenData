import http from "node:http";
import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), "../site");
const port = Number(process.env.PORT || 4173);
const types = {
  ".css": "text/css; charset=utf-8",
  ".js": "text/javascript; charset=utf-8",
  ".html": "text/html; charset=utf-8",
  ".php": "text/html; charset=utf-8",
  ".png": "image/png",
  ".jpg": "image/jpeg",
  ".jpeg": "image/jpeg",
  ".gif": "image/gif",
  ".svg": "image/svg+xml",
  ".ico": "image/x-icon",
  ".xml": "application/xml",
  ".txt": "text/plain; charset=utf-8",
  ".webp": "image/webp",
};

function renderPhp(filePath, inherited = {}) {
  let src = fs.readFileSync(filePath, "utf8");
  const vars = { pageTitle: "", pageDescription: "", canonical: "", pageId: "", base: "/alternative/v1", ...inherited };
  for (const key of Object.keys(vars)) {
    const match = src.match(new RegExp(`\\$${key}\\s*=\\s*'([^']*)'`));
    if (match) vars[key] = match[1];
  }
  src = src.replace(/<\?php[\s\S]*?\?>/g, (block) => {
    const req = block.match(/require_once\s+(?:__DIR__\s*\.\s*)?'([^']+)'/);
    if (!req) return "";
    const included = path.resolve(path.dirname(filePath), req[1].replace(/^[/\\]+/, ""));
    return renderPhp(included, vars);
  });
  src = src.replace(/<\?= htmlspecialchars\(\$(\w+)[^?]*\?>/g, (_, key) => vars[key] ?? "");
  src = src.replace(/<\?= \$pageId === '([^']+)' \? '([^']*)' : '' \?>/g, (_, id, attr) => (vars.pageId === id ? attr : ""));
  src = src.replace(/<\?= \$base \?>/g, vars.base);
  src = src.replace(/<\?= date\('Y'\) \?>/g, String(new Date().getFullYear()));
  src = src.replace(/<\?php[\s\S]*?\?>/g, "");
  src = src.replace(/<\?=[\s\S]*?\?>/g, "");
  return src;
}

const server = http.createServer((req, res) => {
  const url = new URL(req.url, `http://127.0.0.1:${port}`);
  let rel = decodeURIComponent(url.pathname);
  if (rel.endsWith("/")) rel += "index.php";
  const filePath = path.normalize(path.join(root, rel));
  if (!filePath.startsWith(root)) {
    res.writeHead(403);
    res.end("Forbidden");
    return;
  }
  if (!fs.existsSync(filePath) || fs.statSync(filePath).isDirectory()) {
    res.writeHead(404, { "Content-Type": "text/plain; charset=utf-8" });
    res.end("Not found");
    return;
  }
  const ext = path.extname(filePath).toLowerCase();
  if (ext === ".php") {
    try {
      res.writeHead(200, { "Content-Type": "text/html; charset=utf-8" });
      res.end(renderPhp(filePath));
    } catch (err) {
      res.writeHead(500, { "Content-Type": "text/plain; charset=utf-8" });
      res.end(String(err));
    }
    return;
  }
  res.writeHead(200, { "Content-Type": types[ext] || "application/octet-stream" });
  fs.createReadStream(filePath).pipe(res);
});

server.listen(port, "127.0.0.1", () => {
  console.log(`Preview http://127.0.0.1:${port}/alternative/v1/`);
});
