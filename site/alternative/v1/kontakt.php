<!doctype html>
<html lang="no">
<head>
<?php
$pageTitle = 'Kontakt Borgen Data | Parkveien 10, Borgenhaugen';
$pageDescription = 'Ring 41 22 12 00 eller kom til Parkveien 10, 1738 Borgenhaugen. Åpent for telefon 08–22. Lokalt PC-verksted i Sarpsborg.';
$canonical = 'https://borgendata.no/alternative/kontakt.php';
$pageId = 'kontakt';
require_once __DIR__ . '/shared/head.html';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.html'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/alternative/">Forside</a> / Kontakt</p>
        <h1>Kontakt Borgen Data</h1>
        <p class="lede">Har du spørsmål om dataservice, eller vil du bestille time? Ring. Ingen spørsmål er for dumme.</p>
      </div>
    </header>

    <div class="wrap">
      <div class="hours" style="margin: 1.2rem 0 1.6rem">
        <strong>08–22</strong>
        <span>Telefon alle dager</span>
      </div>

      <div class="contact-grid">
        <a class="contact-card" href="tel:+4741221200">
          <span class="who">Hovednummer · Bjørn Kristiansen</span>
          <strong>41 22 12 00</strong>
        </a>
        <a class="contact-card" href="tel:+4792082685">
          <span class="who">Alternativt nummer · Nathalie Kristiansen</span>
          <strong>92 08 26 85</strong>
        </a>
        <a class="contact-card" id="mailLink" href="#">
          <span class="who">E-post</span>
          <strong>Send e-post</strong>
        </a>
      </div>
    </div>

    <div class="wrap">
    <article class="prose">
      <h2>Adresse</h2>
      <p>Vi utfører mesteparten av reparasjonene i dataverkstedet på Borgenhaugen. Vi kan i noen tilfeller ta hjemmebesøk hvis problemene er av mindre art og du er i nærområdet Hafslund, Borgen, Borgenhaugen, Sandbakken, Klavestadhaugen, Bede eller Hafslundsøy.</p>
      <p>
        Parkveien 10<br>
        1738 Borgenhaugen<br>
        Sarpsborg
      </p>
    </article>
    </div>

    <section class="section" style="padding-top:0">
      <div class="wrap">
        <a class="local-card map-link" href="https://www.google.com/maps/search/?api=1&query=Parkveien+10%2C+1738+Borgenhaugen">
          <img src="/img/BD_Map.png" alt="Kart over Parkveien 10, 1738 Borgenhaugen" width="800" height="400" loading="lazy">
          <div class="local-card-body">
            <strong>Parkveien 10, 1738 Borgenhaugen</strong>
            <p>Åpne i Google Maps</p>
          </div>
        </a>
      </div>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.html'; ?>
</body>
</html>
