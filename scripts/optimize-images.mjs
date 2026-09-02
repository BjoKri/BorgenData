import { readdirSync, unlinkSync } from "node:fs";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";
import sharp from "sharp";

const repoRoot = join(dirname(fileURLToPath(import.meta.url)), "..");

const imgDir = join(repoRoot, "site", "img");

const unused = [
  "at.png",
  "High_Performance_RAM.jpg",
  "contact_icon.png",
  "Hjem.png",
  "kisspng-samsung-850-pro-iii-ssd-samsung-850-evo-ssd-solid-solidstate-battery-5b1b5c88f2ed58.003734781528519816995.png",
  "computers2.jpeg",
  "web-html-code-background.jpg",
  "virus-and-spyware-removal.jpg",
  "facebook.png",
  "Map_pin1.png",
  "Kampanje.png",
  "ContactUs.png",
  "mail-64.png",
  "phone-contact-us.png",
  "TELEFONE.png",
  "img174.jpg",
  "images.jpg",
  "ssd.jpg",
  "hands-1314632-640x480.jpg",
  "topBG.png",
];

async function jpeg(src, dest, width) {
  await sharp(join(imgDir, src))
    .rotate()
    .resize({ width, withoutEnlargement: true })
    .jpeg({ quality: 72, mozjpeg: true })
    .toFile(join(imgDir, dest));
}

async function pngIcon(src, dest, size) {
  await sharp(join(imgDir, src))
    .resize(size, size, { fit: "inside", withoutEnlargement: true })
    .png({ compressionLevel: 9, palette: true })
    .toFile(join(imgDir, dest));
}

for (const name of unused) {
  const p = join(imgDir, name);
  try {
    unlinkSync(p);
    console.log("slettet", name);
  } catch {
    /* already gone */
  }
}

await pngIcon("blue_phone.png", "blue_phone.tmp.png", 80);
await pngIcon("green_phone.png", "green_phone.tmp.png", 80);
await pngIcon("Email-Internet-PNG.png", "email.tmp.png", 80);
unlinkSync(join(imgDir, "blue_phone.png"));
unlinkSync(join(imgDir, "green_phone.png"));
unlinkSync(join(imgDir, "Email-Internet-PNG.png"));
await sharp(join(imgDir, "blue_phone.tmp.png")).toFile(join(imgDir, "blue_phone.png"));
await sharp(join(imgDir, "green_phone.tmp.png")).toFile(join(imgDir, "green_phone.png"));
await sharp(join(imgDir, "email.tmp.png")).toFile(join(imgDir, "email.png"));
unlinkSync(join(imgDir, "blue_phone.tmp.png"));
unlinkSync(join(imgDir, "green_phone.tmp.png"));
unlinkSync(join(imgDir, "email.tmp.png"));

const ramSrc =
  "kisspng-ram-flash-memory-rom-computer-hardware-network-car-new-product-5b415991452fd1.1779332515310094252834.png";
await jpeg(ramSrc, "ram.jpg", 600);
await jpeg("pngguru.com.png", "ssd.jpg", 600);
unlinkSync(join(imgDir, ramSrc));
unlinkSync(join(imgDir, "pngguru.com.png"));

await jpeg("call-me-1525959.jpg", "call-me-1525959.tmp.jpg", 1400);
await jpeg("construction-work-carpenter-tools-large.jpg", "construction.tmp.jpg", 1400);
await jpeg("technology-computer-chips-gigabyte-large.jpg", "chips.tmp.jpg", 1400);
await jpeg("pexels-photo-large.jpg", "pexels.tmp.jpg", 1400);
await jpeg("freetexturebackground.jpg", "texture.tmp.jpg", 1400);
await jpeg("stov_pc.jpg", "stov.tmp.jpg", 900);

const replaceJpeg = [
  ["call-me-1525959.tmp.jpg", "call-me-1525959.jpg"],
  ["construction.tmp.jpg", "construction-work-carpenter-tools-large.jpg"],
  ["chips.tmp.jpg", "technology-computer-chips-gigabyte-large.jpg"],
  ["pexels.tmp.jpg", "pexels-photo-large.jpg"],
  ["texture.tmp.jpg", "freetexturebackground.jpg"],
  ["stov.tmp.jpg", "stov_pc.jpg"],
];
for (const [tmp, dest] of replaceJpeg) {
  unlinkSync(join(imgDir, dest));
  await sharp(join(imgDir, tmp)).toFile(join(imgDir, dest));
  unlinkSync(join(imgDir, tmp));
}

const logo = await sharp(join(imgDir, "BorgenDataLogo.gif"))
  .resize({ width: 420, withoutEnlargement: false })
  .png()
  .toBuffer();
await sharp({
  create: {
    width: 1200,
    height: 630,
    channels: 3,
    background: { r: 38, g: 75, b: 155 },
  },
})
  .composite([{ input: logo, gravity: "centre" }])
  .jpeg({ quality: 82 })
  .toFile(join(repoRoot, "site", "og-image.jpg"));

console.log("Ferdig. Gjenstående filer:");
for (const f of readdirSync(imgDir).sort()) {
  console.log(" ", f);
}
