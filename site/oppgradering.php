<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'PC-oppgradering i Sarpsborg | Borgen Data';
$pageDescription = 'SSD og mer minne gir gammel PC nytt liv. Lokalt verksted i Borgenhaugen. Deler til kostpris i tillegg til arbeid.';
$canonical = 'https://borgendata.no/oppgradering.php';
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
        <h1>Oppgradering</h1>
        <p class="lede">Nytt liv i maskinen, uten ny maskin. SSD og mer minne er de vanligste oppgraderingene.</p>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>Er PC-en blitt for treg, er det ikke alltid bare å kjøpe ny. To vanlige flaskehalser: for lite minne og for treg harddisk.</p>

        <ul class="check-list">
          <li><strong>Mer minne (RAM)</strong> — maskinen takler flere programmer samtidig.</li>
          <li><strong>SSD i stedet for harddisk</strong> — størst hopp i ytelse for pengene.</li>
          <li><strong>Mer plass</strong> — full disk gjør alt tregt.</li>
        </ul>

        <div class="upgrade-photos">
          <img src="/img/ram.jpg" alt="RAM-minnebrikke til PC-oppgradering" width="300" height="200" loading="lazy">
          <img src="/img/ssd.jpg" alt="SSD-disk for raskere PC" width="300" height="200" loading="lazy">
        </div>

        <p>Kapasitet og pris på SSD og minne avhenger av maskinen. Deler kommer i tillegg til kostpris. Ring <a class="u" href="tel:+4741221200">41 22 12 00</a> så ser vi hva som passer.</p>
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
