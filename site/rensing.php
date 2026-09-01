<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Virusfjerning og PC-rens i Sarpsborg | Borgen Data';
$pageDescription = 'Treg PC, popup-reklame eller virus? Vi renser PC for skadevare og støv. Lokalt verksted i Sarpsborg og Borgenhaugen.';
$canonical = 'https://borgendata.no/rensing.php';
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
        <h1>Rensing</h1>
        <p class="lede">Maskinvaren blir ikke tregere over tid — det som gjør PC-en treg, er nesten alltid programvare. Av og til er det støv.</p>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <h2>Tegn på at du trenger programvare-rens</h2>
        <ol class="symptom-list">
          <li>PC-en har vært rask, men har gradvis blitt tregere</li>
          <li>Startsiden eller søkemotoren er endret til noe du ikke kjenner igjen</li>
          <li>Ukjente utvidelser eller verktøylinjer i nettleseren</li>
          <li>Pop-up-vinduer og sider du ikke har bedt om</li>
          <li>Du har installert et program som skulle «fikse Windows» (som regel lureri)</li>
        </ol>

        <h2>Støv i PC</h2>
        <p>Støv tetter vifter, øker temperaturen og kan gi mer støy. PC-en kan slå seg av når den blir for varm.</p>
        <figure class="figure">
          <img src="/img/stov_pc.jpg" alt="Støv inne i en PC som bør renses" width="500" height="333" loading="lazy">
          <figcaption>Vi åpner, renser og setter sammen igjen.</figcaption>
        </figure>

        <p>Spillkonsoller har samme problem — se <a class="u" href="/konsoller.php">Konsoller</a>.</p>

        <div class="price-callout">
          <p><?= FASTPRIS_TEKST ?></p>
        </div>
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
