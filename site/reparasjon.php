<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'PC-reparasjon i Sarpsborg | Borgen Data';
$pageDescription = 'Vi feilsøker og reparerer PC i Sarpsborg. Vanlig tid 2–4 dager. Reparasjon 1 500 kr fast. Enkel hjelp 500 kr. Ring 41 22 12 00.';
$canonical = 'https://borgendata.no/reparasjon';
$pageId = 'reparasjon';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Reparasjon</p>
        <h1>Når PC-en ikke gjør som den skal</h1>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>Vi feilsøker og reparerer. Vanlige jobber: maskinen starter ikke, Windows stopper, rare lyder, ikke internett, skriver eller skjerm som ikke virker, trådløst nett som faller ut.</p>
        <p>Har PC-en blitt treg etter å ha vært rask? Se <a class="u" href="/rensing">Rensing</a>. Har den alltid vært treg? Se <a class="u" href="/oppgradering">Oppgradering</a>.</p>
        <p>Vanlig tid 2–4 dager.</p>
      </article>
<?php require_once __DIR__ . '/shared/priser.php'; ?>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Ring 41 22 12 00 og beskriv feilen</h2>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
