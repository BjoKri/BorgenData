<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Om Borgen Data | PC-verksted i Sarpsborg';
$pageDescription = 'Borgen Data er et lokalt PC-verksted i Parkveien 10, Borgenhaugen. Drevet av dataingeniør Bjørn Kristiansen siden 2008.';
$canonical = 'https://borgendata.no/om.php';
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
        <p class="lede">Lokalt PC-verksted i Borgenhaugen. Én person som åpner maskinen, feilsøker og holder prisen nede.</p>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>Borgen Data er et privat foretak i Sarpsborg, drevet av dataingeniør Bjørn Kristiansen siden 2008. Vi reparerer og renser PC-er, oppgraderer maskiner, fikser konsoller og lager enkle nettsider.</p>
        <p>Arbeidet utføres på Parkveien 10, som oftest på kveldstid og i helger. Uten dyre lokaler kan prisen holdes lav.</p>
        <p>Hjemmebesøk kan avtales ved mindre problemer i Hafslund, Borgenhaugen, Sandbakken, Klavestadhaugen, Bede og Hafslundsøy.</p>

        <div class="price-callout">
          <p><?= FASTPRIS_TEKST ?></p>
        </div>
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
