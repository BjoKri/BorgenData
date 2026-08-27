/**
 * Sletter angitte filer fra webroot på One.com.
 * Bruk: node scripts/sftp-cleanup.mjs fil1 fil2 ...
 */
import SftpClient from "ssh2-sftp-client";
import { connectOptions, remoteDirs } from "./sftp-config.mjs";

const files = process.argv.slice(2);
if (files.length === 0) {
  console.error("Ingen filer angitt.");
  process.exit(1);
}

const client = new SftpClient();
try {
  await client.connect(connectOptions());
  const seen = new Set();
  for (const remoteDir of remoteDirs) {
    const resolved = await client.realPath(remoteDir).catch(() => null);
    if (!resolved || seen.has(resolved)) continue;
    seen.add(resolved);
    for (const f of files) {
      const target = `${resolved}/${f.replace(/\\/g, "/")}`;
      const exists = await client.exists(target);
      if (exists === "d") {
        await client.rmdir(target, true);
        console.log(`Slettet mappe: ${target}`);
      } else if (exists) {
        await client.delete(target);
        console.log(`Slettet: ${target}`);
      } else {
        console.log(`Fantes ikke: ${target}`);
      }
    }
  }
} catch (err) {
  console.error(err.message || err);
  process.exit(1);
} finally {
  client.end();
}
