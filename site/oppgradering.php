<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'PC-oppgradering i Sarpsborg | Borgen Data';
$pageDescription = 'SSD og mer minne gir raskere PC uten å kjøpe ny. Lokalt verksted i Borgenhaugen. Ring 41 22 12 00.';
$canonical = 'https://borgendata.no/oppgradering';
$pageId = 'oppgradering';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Oppgradering</p>
        <h1>Raskere PC, uten å kjøpe ny</h1>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>To ting gjør mest: mer minne, og SSD i stedet for gammel harddisk. Full disk gjør også at alt går tregt.</p>
        <div class="upgrade-photos">
          <img src="/img/ram.jpg" alt="Minnebrikke til PC-oppgradering" width="300" height="200" loading="lazy">
          <img src="/img/ssd.jpg" alt="SSD-disk for raskere PC" width="300" height="200" loading="lazy">
        </div>
        <p>Hva som passer, og hva delene koster, avhenger av maskinen. Ring <a class="u" href="tel:+4741221200">41 22 12 00</a>. Deler kommer i tillegg til arbeid.</p>
      </article>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Usikker på hva maskinen tåler?</h2>
        <p>Ring med modellnavn — vi sier hva som lønner seg.</p>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
