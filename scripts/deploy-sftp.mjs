/**
 * Laster opp site/ til One.com via SFTP (borgendata.no).
 * Passord: BORGENDATA_SFTP_PASSWORD, .env.deploy, eller standard i sftp-config.mjs.
 */
import { existsSync } from "node:fs";
import SftpClient from "ssh2-sftp-client";
import {
  connectOptions,
  host,
  remoteDirs,
  siteDir,
} from "./sftp-config.mjs";

if (!existsSync(siteDir)) {
  console.error("Mappen site/ finnes ikke.");
  process.exit(1);
}

const client = new SftpClient();
try {
  await client.connect(connectOptions());
  const seen = new Set();
  for (const remoteDir of remoteDirs) {
    const resolved = await client.realPath(remoteDir);
    if (seen.has(resolved)) continue;
    seen.add(resolved);
    await client.uploadDir(siteDir, resolved, { overwrite: true });
    console.log(`Publisert: ${siteDir} -> ${resolved} på ${host}`);
  }
} catch (err) {
  console.error(err.message || err);
  process.exit(1);
} finally {
  client.end();
}
