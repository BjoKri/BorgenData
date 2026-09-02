<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Om Borgen Data | PC-verksted i Sarpsborg';
$pageDescription = 'Borgen Data har reparert PC-er i Sarpsborg siden 2008. Verksted i Parkveien 10, Borgenhaugen.';
$canonical = 'https://borgendata.no/om';
$pageId = 'om';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Om</p>
        <h1>Om Borgen Data</h1>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>Borgen Data har reparert PC-er i Sarpsborg siden 2008. Innehaver er dataingeniør Bjørn Kristiansen. Arbeidet gjøres i Parkveien 10, som oftest kveld og helg.</p>
        <p>Uten dyrt lokale holder vi prisen nede. Fastpris 1 500 kr på vanlig rens og reparasjon.</p>
        <p>Hjemmebesøk kan avtales ved små problemer i Hafslund, Borgenhaugen, Sandbakken, Klavestadhaugen, Bede og Hafslundsøy.</p>
      </article>

      <a class="map-card" href="https://www.google.com/maps/search/?api=1&query=Parkveien+10%2C+1738+Borgenhaugen" style="margin-top:2rem">
        <img src="/img/BD_Map.png" width="800" height="400" loading="lazy" alt="Kart over Parkveien 10, 1738 Borgenhaugen">
        <span>Parkveien 10, 1738 Borgenhaugen · Åpne i Google Maps</span>
      </a>
    </div>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
