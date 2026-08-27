/**
 * Henter live-siden fra One.com ned i site/.
 */
import { mkdirSync } from "node:fs";
import SftpClient from "ssh2-sftp-client";
import {
  connectOptions,
  host,
  remoteDirs,
  siteDir,
} from "./sftp-config.mjs";

const client = new SftpClient();
try {
  await client.connect(connectOptions());
  const remoteDir = remoteDirs[0];
  const resolved = await client.realPath(remoteDir);
  mkdirSync(siteDir, { recursive: true });
  await client.downloadDir(resolved, siteDir, {
    filter: (p) => !p.includes("tmp-onehopmigration"),
  });
  console.log(`Hentet: ${resolved} på ${host} -> ${siteDir}`);
} catch (err) {
  console.error(err.message || err);
  process.exit(1);
} finally {
  client.end();
}
