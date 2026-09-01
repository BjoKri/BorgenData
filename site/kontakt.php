<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Kontakt | Borgen Data Sarpsborg';
$pageDescription = 'Ring 41 22 12 00 eller send e-post til bk@borgendata.no. Innlevering Parkveien 10 etter avtale.';
$canonical = 'https://borgendata.no/kontakt.php';
$pageId = 'kontakt';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Kontakt</p>
        <h1>Kontakt</h1>
        <p class="lede"><?= TIMER_TEKST ?></p>
      </div>
    </header>

    <div class="wrap page-body contact-page">
      <div class="contact-cards">
        <div class="info-card">
          <span class="mono-label">Telefon</span>
          <a class="contact-big" href="tel:+4741221200">41 22 12 00</a>
          <p>Bjørn Kristiansen</p>
        </div>
        <div class="info-card">
          <span class="mono-label">E-post</span>
          <a class="u" href="mailto:bk@borgendata.no">bk@borgendata.no</a>
        </div>
        <div class="info-card">
          <span class="mono-label">Adresse</span>
          <p>Parkveien 10<br>1738 Borgenhaugen<br>Sarpsborg</p>
          <p class="muted-small">Innlevering etter avtale — ikke drop-in.</p>
        </div>
      </div>

      <div class="price-callout">
        <p><?= FASTPRIS_TEKST ?></p>
      </div>

      <a class="map-card" href="https://www.google.com/maps/search/?api=1&query=Parkveien+10%2C+1738+Borgenhaugen">
        <img src="/img/BD_Map.png" width="800" height="400" loading="lazy" alt="Kart over Parkveien 10, 1738 Borgenhaugen">
        <span>Åpne i Google Maps</span>
      </a>
    </div>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
