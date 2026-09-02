<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Bedriftsnettsider i Sarpsborg | Borgen Data';
$pageDescription = 'Enkle nettsider for lokale firmaer i Sarpsborg og Østfold. Se hovdum.no som eksempel.';
$canonical = 'https://borgendata.no/nettsider';
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
        <h1>Enkle nettsider for lokale firmaer</h1>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>PC-verksted er kjernen. I tillegg lager vi enkle nettsider for bedrifter i Sarpsborg og Østfold: tjenester, adresse og kontakt, som funker på mobil, hos vanlig norsk webhotell.</p>
        <p><a class="u" href="https://hovdum.no" target="_blank" rel="noopener noreferrer">hovdum.no</a> (Martin Hovdum Bygg og Rehabilitering AS) er et eksempel. Ikke store systemer det er umulig å vedlikeholde.</p>
        <p>Vi lager også små, enkle programmer når det er det firmaet trenger. Ring <a class="u" href="tel:+4741221200">41 22 12 00</a> for pris og omfang.</p>
      </article>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Trenger firmaet en enkel nettside?</h2>
        <p>Ring og fortell hva dere trenger.</p>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
