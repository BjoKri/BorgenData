<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Personvern | Borgen Data';
$pageDescription = 'Slik Borgen Data behandler data på PC-er som leveres inn til reparasjon.';
$canonical = 'https://borgendata.no/personvern';
$pageId = 'personvern';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Personvern</p>
        <h1>Personvern</h1>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <h2>PC-er du leverer inn</h2>
        <p>Vi ser på det som trengs for å feilsøke og reparere. Vi kopierer ikke filer uten avtale, og vi selger ikke data videre.</p>
        <p>Når du henter maskinen, slettes arbeidskopier vi ikke lenger trenger.</p>

        <h2>Kontakt</h2>
        <p>Spørsmål om personvern: <a class="u" href="mailto:bk@borgendata.no">bk@borgendata.no</a> eller <a class="u" href="tel:+4741221200">41 22 12 00</a>.</p>
      </article>
    </div>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
