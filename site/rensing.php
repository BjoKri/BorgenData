<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Virusfjerning og PC-rens i Sarpsborg | Borgen Data';
$pageDescription = 'Treg PC, popup-reklame eller virus? Vi renser PC for skadevare og støv. Lokalt verksted i Sarpsborg og Borgenhaugen.';
$canonical = 'https://borgendata.no/rensing';
$pageId = 'rensing';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Rensing</p>
        <h1>Virus, søppelprogrammer og støv</h1>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>Treg PC skyldes sjelden at maskinvaren «blir gammel av seg selv». Det er programmer du ikke visste var der, og ofte støv.</p>
        <p>Tegn: startside eller søk er byttet, verktøylinjer du ikke har bedt om, popuper, «PC-hjelp»-programmer som skulle fikse Windows.</p>
        <p>Støv i kassen gir viftebråk, varme og maskiner som slår seg av. Vi åpner, renser og setter sammen igjen.</p>
        <figure class="figure">
          <img src="/img/stov_pc.jpg" alt="Støv inne i en PC som bør renses" width="500" height="333" loading="lazy">
          <figcaption>Vi åpner, renser og setter sammen igjen.</figcaption>
        </figure>
        <p>Vanlig rens koster 1 500 kr, samme pris som reparasjon. Små ting som tar under en halvtime koster 500 kr.</p>
      </article>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Usikker på om det er virus eller støv?</h2>
        <p>Ring — vi avklarer hva som trengs.</p>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
