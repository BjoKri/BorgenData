<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Bedriftsnettsider i Sarpsborg | Borgen Data';
$pageDescription = 'Enkle, raske bedriftsnettsider for lokale firmaer i Sarpsborg. Se hovdum.no som eksempel.';
$canonical = 'https://borgendata.no/nettsider.php';
$pageId = 'nettsider';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Nettsider</p>
        <h1>Nettsider</h1>
        <p class="lede">Enkle bedriftsnettsider som laster raskt og er lette å vedlikeholde. Ingen unødvendig CMS-jungel.</p>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>PC-verksted er kjernen i Borgen Data. I tillegg lager vi enkle nettsider for bedrifter i Sarpsborg og Østfold.</p>
        <p><a class="u" href="https://hovdum.no" target="_blank" rel="noopener noreferrer">hovdum.no</a> er nettsiden til Martin Hovdum Bygg og Rehabilitering AS — et eksempel på hva vi leverer.</p>

        <ul class="check-list">
          <li>Bedriftsnettside med tjenester, adresse og kontakt</li>
          <li>Mobilvennlig layout</li>
          <li>Oppsett hos vanlige norske webhotell</li>
        </ul>
      </article>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Trenger firmaet ditt en enkel nettside?</h2>
        <p>Ring og fortell hva du trenger.</p>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
