<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'IT for små firmaer i Sarpsborg | Borgen Data';
$pageDescription = 'Borgen Data tar IT-en til firmaer med 2–8 PC-er i Sarpsborg. Hjelp over nettet først. Ring 41 22 12 00.';
$canonical = 'https://borgendata.no/bedrift';
$pageId = 'bedrift';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <header class="page-hero">
      <div class="wrap">
        <p class="crumb"><a href="/">Forside</a> / Bedrift</p>
        <h1>IT-hjelp til små firmaer</h1>
        <p class="lede">Borgen Data tar IT-en til firmaer med 2–8 PC-er i Sarpsborg. Én fast person å ringe. Hjelp over nettet først. Ikke vakttelefon om natten.</p>
      </div>
    </header>

    <div class="wrap page-body">
      <article class="prose-block">
        <p>PC og nett, e-post og skrivere, nye maskiner, lodding når det trengs, og enkle nettsider.</p>
        <p>Alle priser under er uten mva. Ring <a class="u" href="tel:+4741221200">41 22 12 00</a>.</p>
      </article>

      <div class="pricing-grid">
        <div class="price-card">
          <h2>Timehjelp</h2>
          <p class="price-amount">1 490 kr i timen</p>
          <p class="price-note">Minst én time over nettet. 500 kr ekstra hvis vi må kjøre.</p>
          <p>Passer når noe er ødelagt nå: PC, e-post, skriver, ny maskin som skal i gang.</p>
        </div>

        <div class="price-card">
          <h2>Fast hjelp, 2–4 PC-er</h2>
          <p class="price-amount">2 490 kr i måneden</p>
          <ul class="check-list">
            <li>Én time hjelp over nettet inkludert</li>
            <li>Svar samme uke, kveld eller lørdag</li>
            <li>Vi sjekker sikkerhetskopi én gang i året</li>
            <li>Du får et ark med hvem som eier hva, og hvordan dere logger inn</li>
          </ul>
        </div>

        <div class="price-card">
          <h2>Fast hjelp, 5–8 PC-er</h2>
          <p class="price-amount">4 490 kr i måneden</p>
          <ul class="check-list">
            <li>To timer inkludert</li>
            <li>Når noen begynner eller slutter, får de (eller mister) tilgang</li>
            <li>Innlogging med kode på telefonen</li>
            <li>Delt e-post der det trengs</li>
            <li>Én time hos dere i kvartalet</li>
          </ul>
        </div>
      </div>

      <div class="price-card price-card-wide">
        <h2>Første gjennomgang</h2>
        <p class="price-amount">4 900–9 900 kr, én gang</p>
        <ul class="check-list">
          <li>Liste over maskiner</li>
          <li>Innlogging med kode slått på</li>
          <li>Sikkerhetskopi som vi har prøvd å hente tilbake fra, én gang</li>
          <li>Domenenavn og e-post på plass</li>
          <li>Et ark med hvem dere ringer</li>
        </ul>
      </div>

      <div class="not-included">
        <h2>Dette gjør vi ikke</h2>
        <ul class="check-list">
          <li>Vi sitter ikke vakt midt på natten</li>
          <li>Vi er ikke et stort IT-firma som overvåker alle maskiner døgnet rundt</li>
          <li>Vi selger ikke store overvåkingspakker</li>
        </ul>
      </div>
    </div>

    <section class="cta-band wrap">
      <div>
        <h2>Ring 41 22 12 00 og fortell hvor mange maskiner dere er</h2>
      </div>
      <a class="btn-blue" href="tel:+4741221200">41 22 12 00</a>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>
</body>
</html>
