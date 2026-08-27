import { existsSync, readFileSync } from "node:fs";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";

const __dirname = dirname(fileURLToPath(import.meta.url));
export const repoRoot = join(__dirname, "..");
export const siteDir = join(repoRoot, "site");
const envFile = join(repoRoot, ".env.deploy");

if (existsSync(envFile)) {
  for (const line of readFileSync(envFile, "utf8").split(/\r?\n/)) {
    const t = line.trim();
    if (!t || t.startsWith("#")) continue;
    const i = t.indexOf("=");
    if (i === -1) continue;
    const key = t.slice(0, i).trim();
    let val = t.slice(i + 1).trim();
    if (
      (val.startsWith('"') && val.endsWith('"')) ||
      (val.startsWith("'") && val.endsWith("'"))
    ) {
      val = val.slice(1, -1);
    }
    if (!(key in process.env) || process.env[key] === "") {
      process.env[key] = val;
    }
  }
}

const DEFAULT_SFTP_PASSWORD = "";

export const host = process.env.BORGENDATA_SFTP_HOST ?? "ssh.cg9x2fsbt.service.one";
export const username = process.env.BORGENDATA_SFTP_USER ?? "cg9x2fsbt_ssh";
export const port = parseInt(process.env.BORGENDATA_SFTP_PORT ?? "22", 10);
export const password =
  process.env.BORGENDATA_SFTP_PASSWORD?.trim() || DEFAULT_SFTP_PASSWORD;

if (!password) {
  console.error(
    "Mangler SFTP-passord. Sett BORGENDATA_SFTP_PASSWORD eller fyll .env.deploy (se .env.deploy.example).",
  );
  process.exit(1);
}

export const DEFAULT_REMOTE_DIRS = [
  "webroots/by-route/borgendata.no_",
  "webroots/by-route/www.borgendata.no_",
];

export const remoteDirs = (
  process.env.BORGENDATA_SFTP_REMOTE?.trim()
    ? process.env.BORGENDATA_SFTP_REMOTE.split(",")
    : DEFAULT_REMOTE_DIRS
)
  .map((s) => s.trim())
  .filter(Boolean);

export function connectOptions() {
  return { host, port, username, password, readyTimeout: 30_000 };
}
