<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'IT for små bedrifter i Sarpsborg | Borgen Data';
$pageDescription = 'Timebank og faste avtaler for bedrifter med 1–8 PC-er. Fjernhjelp først, ingen 24/7. Ring 41 22 12 00.';
$canonical = 'https://borgendata.no/bedrift';
$pageId = 'bedrift';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Bedrift</p>
        <h1>Bedrift</h1>
        <p class="lede">IT-hjelp for små firmaer med 1–8 PC-er. Én person — fjernhjelp først, ingen 24/7 og ingen SLA-jungel.</p>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>Dataingeniør, vant til å feilsøke vanskelige systemer, passer på dataene dine.</p>
        <p>Alle priser eks. mva. Ring <a class="u" href="tel:+4741221200">41 22 12 00</a> — ingen skjema, bare en samtale.</p>
      </article>

      <div class="pricing-grid">
        <div class="price-card">
          <h2>Timebank</h2>
          <p class="price-amount">1 490 kr/t</p>
          <p class="price-note">Min. 1 t remote · +500 kr kjøring</p>
          <ul class="check-list">
            <li>Break/fix</li>
            <li>M365-brukerrot, e-post, printer</li>
            <li>Ny PC-oppsett</li>
          </ul>
          <p class="muted-small">Ikke SLA.</p>
        </div>

        <div class="price-card">
          <h2>Kontakt Mini</h2>
          <p class="price-amount">2 490 kr/mnd</p>
          <p class="price-note">2–4 PC-er</p>
          <ul class="check-list">
            <li>1 t remote inkludert</li>
            <li>Svar samme uke kveld/lørdag</li>
            <li>Årlig backup-sjekk</li>
            <li>Skriftlig M365/passord-notat</li>
          </ul>
        </div>

        <div class="price-card">
          <h2>Kontakt Standard</h2>
          <p class="price-amount">4 490 kr/mnd</p>
          <p class="price-note">5–8 PC-er</p>
          <ul class="check-list">
            <li>2 t inkludert</li>
            <li>Onboarding/offboarding</li>
            <li>MFA, delt postboks</li>
            <li>Kvartalsvis 1 t on-site</li>
          </ul>
        </div>
      </div>

      <div class="price-card price-card-wide">
        <h2>Oppstart</h2>
        <p class="price-amount">4 900–9 900 kr engang</p>
        <ul class="check-list">
          <li>Inventar</li>
          <li>MFA på</li>
          <li>Backup restorert én gang</li>
          <li>DNS/domene</li>
          <li>«Hvem ringer du»-ark</li>
        </ul>
      </div>

      <div class="not-included">
        <h2>Dette tilbyr vi ikke</h2>
        <ul class="check-list">
          <li>15 min SLA</li>
          <li>SOC / sikkerhetssenter</li>
          <li>MDM som produkt</li>
          <li>24/7 vakttelefon</li>
        </ul>
      </div>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Ring og fortell hva firmaet trenger</h2>
        <p>Vi finner ut om timebank eller fast avtale passer.</p>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
