/**
 * Lister SFTP cwd og mapper — kjør fra repo-rot: npm run diagnose-sftp
 */
import SftpClient from "ssh2-sftp-client";
import { connectOptions } from "./sftp-config.mjs";

async function tryList(client, label, path) {
  try {
    const items = await client.list(path);
    console.log(`\n--- ${label}: ${path} (${items.length} oppføringer) ---`);
    for (const e of items.slice(0, 80)) {
      console.log(`  [${e.type}] ${e.name}`);
    }
    if (items.length > 80) {
      console.log(`  ... +${items.length - 80} til`);
    }
  } catch (e) {
    console.log(`\n--- ${label}: ${path} --- FEIL: ${e.message}`);
  }
}

const client = new SftpClient();
try {
  await client.connect(connectOptions());
  const cwd = await client.cwd();
  console.log("SFTP cwd (faktisk rot etter innlogging):");
  console.log(cwd);

  await tryList(client, "rot", ".");
  await tryList(client, "httpd.www", "httpd.www");
  await tryList(client, "webroots", "webroots");
  await tryList(client, "webroots/by-route", "webroots/by-route");
  await tryList(
    client,
    "webroots/by-route/borgendata.no_",
    "webroots/by-route/borgendata.no_",
  );
  await tryList(
    client,
    "webroots/by-route/www.borgendata.no_",
    "webroots/by-route/www.borgendata.no_",
  );
} catch (err) {
  console.error(err.message || err);
  process.exit(1);
} finally {
  client.end();
}
