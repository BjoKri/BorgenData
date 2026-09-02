import http from "node:http";
import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), "../site");
const port = 8787;

function escapeHtml(value) {
  return String(value)
    .replaceAll("&", "&amp;")
    .replaceAll("<", "&lt;")
    .replaceAll(">", "&gt;")
    .replaceAll('"', "&quot;");
}

function renderPhp(filePath, inherited = {}) {
  let src = fs.readFileSync(filePath, "utf8");
  const vars = { ...inherited };

  for (const match of src.matchAll(/\$(\w+)\s*=\s*'((?:\\'|[^'])*)'\s*;/g)) {
    vars[match[1]] = match[2];
  }
  for (const match of src.matchAll(/const\s+(\w+)\s*=\s*'((?:\\'|[^'])*)'\s*;/g)) {
    vars[match[1]] = match[2];
  }

  src = src.replace(/<\?php[\s\S]*?\?>/g, (block) => {
    const req = block.match(/require_once\s+(?:__DIR__\s*\.\s*)?'([^']+)'/);
    if (req) {
      const inc = path.join(path.dirname(filePath), req[1]);
      return renderPhp(inc, vars);
    }
    if (block.includes("date('Y')") && !block.includes("require")) {
      return String(new Date().getFullYear());
    }
    return "";
  });

  src = src.replace(
    /<\?=\s*htmlspecialchars\(\$(\w+),\s*ENT_QUOTES,\s*'UTF-8'\)\s*\?>/g,
    (_, key) => escapeHtml(vars[key] ?? "")
  );
  src = src.replace(
    /<\?=\s*\$(\w+)\s*===\s*'([^']+)'\s*\?\s*'([^']*)'\s*:\s*'([^']*)'\s*\?>/g,
    (_, key, id, a, b) => (vars[key] === id ? a : b)
  );
  src = src.replace(/<\?=\s*date\('Y'\)\s*\?>/g, String(new Date().getFullYear()));
  src = src.replace(/<\?=\s*\$(\w+)\s*\?>/g, (_, key) => vars[key] ?? "");
  src = src.replace(/<\?=\s*([A-Z][A-Z0-9_]*)\s*\?>/g, (_, key) => vars[key] ?? key);

  return src;
}

const types = {
  ".css": "text/css; charset=utf-8",
  ".js": "text/javascript; charset=utf-8",
  ".png": "image/png",
  ".jpg": "image/jpeg",
  ".jpeg": "image/jpeg",
  ".gif": "image/gif",
  ".svg": "image/svg+xml",
  ".ico": "image/x-icon",
  ".webp": "image/webp",
  ".html": "text/html; charset=utf-8",
};

const prettyRoutes = {
  "/bedrift": "/bedrift.php",
  "/personvern": "/personvern.php",
  "/reparasjon": "/reparasjon.php",
  "/rensing": "/rensing.php",
  "/oppgradering": "/oppgradering.php",
  "/konsoller": "/konsoller.php",
  "/nettsider": "/nettsider.php",
  "/om": "/om.php",
  "/kontakt": "/kontakt.php",
};

const server = http.createServer((req, res) => {
  const urlPath = decodeURIComponent(new URL(req.url, "http://localhost").pathname);
  let rel = prettyRoutes[urlPath.replace(/\/$/, "")] ?? (urlPath === "/" ? "/index.php" : urlPath);
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

  if (filePath.endsWith(".php") || filePath.endsWith(".html")) {
    try {
      const html = renderPhp(filePath);
      res.writeHead(200, { "Content-Type": "text/html; charset=utf-8" });
      res.end(html);
    } catch (error) {
      res.writeHead(500, { "Content-Type": "text/plain; charset=utf-8" });
      res.end(String(error));
    }
    return;
  }

  const type = types[path.extname(filePath)] || "application/octet-stream";
  res.writeHead(200, { "Content-Type": type });
  fs.createReadStream(filePath).pipe(res);
});

server.listen(port, () => {
  console.log(`Preview on http://127.0.0.1:${port}/`);
});
