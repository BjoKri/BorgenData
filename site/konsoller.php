<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'Konsollreparasjon i Sarpsborg | Borgen Data';
$pageDescription = 'HDMI-port, lodding og rens av spillkonsoller. Lokalt verksted i Borgenhaugen. Ring før du leverer inn.';
$canonical = 'https://borgendata.no/konsoller.php';
$pageId = 'konsoller';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Konsoller</p>
        <h1>Konsoller</h1>
        <p class="lede">HDMI-port, lodding og rens av spillkonsoller. Pris avhenger av modell og skade — vi avtaler før vi starter.</p>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>En ødelagt HDMI-port er en vanlig grunn til at bildet forsvinner, selv om konsollen ellers virker.</p>

        <ul class="check-list">
          <li>Bytte av HDMI-port på spillkonsoll</li>
          <li>Annen lodding på kretskort der det er praktisk mulig</li>
          <li>Rens av konsoll: støv, vifter og overoppheting</li>
        </ul>

        <p>Ta med lader og eventuelle feilmeldinger. Konsollreparasjon avtales før vi starter — lønner det seg ikke, sier vi ifra.</p>
      </article>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Ring med konsolltype og symptomer</h2>
        <p>Vi sier om jobben passer og hva den omtrentlig koster.</p>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
