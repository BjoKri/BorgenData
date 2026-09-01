<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'PC-reparasjon i Sarpsborg | Borgen Data';
$pageDescription = 'Vi feilsøker og reparerer PC i Sarpsborg og Borgenhaugen. Normal behandlingstid 2–4 dager. Ring 41 22 12 00.';
$canonical = 'https://borgendata.no/reparasjon.php';
$pageId = 'reparasjon';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Reparasjon</p>
        <h1>Reparasjon</h1>
        <p class="lede">Feilsøking og reparasjon av PC-feil. Normal behandlingstid 2–4 dager. Vi sier ifra før vi går i gang hvis det ikke lønner seg.</p>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>Du sparer tid og penger ved å bruke et lokalt verksted som faktisk åpner maskinen. Ring før du leverer inn, så avklarer vi om det er reparasjon, rens eller oppgradering som hjelper.</p>

        <h2>Typiske feil vi tar</h2>
        <ol class="symptom-list">
          <li>PC starter ikke opp</li>
          <li>Windows starter ikke opp</li>
          <li>Feilmeldinger</li>
          <li>Ulyder</li>
          <li>Har ikke internett</li>
          <li>Utstyr virker ikke</li>
          <li>Problemer med trådløst nett</li>
          <li>Min PC har blitt treg → se <a class="u" href="/rensing.php">Rensing</a></li>
          <li>PC har alltid vært treg → se <a class="u" href="/oppgradering.php">Oppgradering</a></li>
          <li>HDMI-port, lodding eller spillkonsoll → se <a class="u" href="/konsoller.php">Konsoller</a></li>
        </ol>

        <div class="price-callout">
          <p><?= FASTPRIS_TEKST ?></p>
        </div>
      </article>

      <div class="related-grid">
        <a class="service-card" href="/rensing.php"><h3>Rensing</h3><p>Treg PC, virus og støv.</p><em>Se mer</em></a>
        <a class="service-card" href="/oppgradering.php"><h3>Oppgradering</h3><p>SSD og mer minne.</p><em>Se mer</em></a>
      </div>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Ring før du leverer inn</h2>
        <p>Vi avklarer hva som trengs og hva det koster.</p>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
