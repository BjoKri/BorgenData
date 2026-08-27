# Laster opp site/ til One.com via SFTP (borgendata.no).
# Passord: scripts/sftp-config.mjs, .env.deploy eller BORGENDATA_SFTP_PASSWORD.
$ErrorActionPreference = "Stop"
$root = Split-Path -Parent $PSScriptRoot

Set-Location $root
npm run deploy
