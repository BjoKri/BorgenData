<!doctype html>
<html lang="no">
<head>
<?php
$pageTitle = 'PC-verksted i Sarpsborg | Borgen Data';
$pageDescription = 'Lokalt PC-verksted i Sarpsborg og Borgenhaugen. Vi reparerer PC, renser, oppgraderer, lodder HDMI på konsoller og lager nettsider. Ring 41 22 12 00.';
$canonical = 'https://borgendata.no/';
require_once 'shared/head.html';
?>
</head>
<body>
  <? require_once('shared/header.html')?>

  <div id="content">
    <h1>Din lokale PC-reparatør i Sarpsborg</h1>
    <p>Trenger du datahjelp? Leter du etter et lokalt PC-verksted i Sarpsborg eller Borgenhaugen? Borgen Data er din lokale PC-reparatør og har god erfaring.</p>
    <p>Vi fjerner virus, reparerer datamaskin, renser og oppgraderer din PC. Vi lodder også, blant annet HDMI-porter på spillkonsoller, og renser konsoller.</p>
    <p>Ta med din PC til ditt lokale PC-verksted, der fikser vi dataproblemet ditt innen kort tid.</p>
    <p><a href="/kontakt.php">Ta kontakt</a> for en hyggelig prat, eller se <a href="/nettsider.php">nettsider vi lager for lokale bedrifter</a>.</p>
  </div>

    <div class="threeCellMain">
      <a href="/reparasjon.php" class="serviceCard serviceCard--reparasjon cleanLink">
        <div class="threeContent">
          <h3>Reparasjon</h3>
          <p>Har du problemer med din PC?<br>Vi reparerer din PC!</p>
        </div>
      </a>
      <a href="/rensing.php" class="serviceCard serviceCard--rensing cleanLink">
        <div class="threeContent">
          <h3>Rensing</h3>
          <p>Vi fjerner virus og uønskede<br>programmer på din PC!</p>
        </div>
      </a>
      <a href="/oppgradering.php" class="serviceCard serviceCard--oppgradering cleanLink">
        <div class="threeContent">
          <h3>Oppgradering</h3>
          <p>Trenger du raskere PC?<br>Vi oppgraderer din PC!</p>
        </div>
      </a>
      <a href="/konsoller.php" class="serviceCard serviceCard--konsoller cleanLink">
        <div class="threeContent">
          <h3>Konsoller</h3>
          <p>HDMI-port, lodding og rens<br>av spillkonsoller</p>
        </div>
      </a>
      <a href="/nettsider.php" class="serviceCard serviceCard--nettsider cleanLink">
        <div class="threeContent">
          <h3>Nettsider</h3>
          <p>Enkle nettsider til lokale bedrifter.<br>Se hovdum.no</p>
        </div>
      </a>
    </div>

    <div id="content">
      <h2>Vanlige spørsmål</h2>
      <div class="faq">
        <details>
          <summary>Hvor ligger verkstedet?</summary>
          <p>Parkveien 10, 1738 Borgenhaugen i Sarpsborg. Du kan levere PC her, eller ringe først.</p>
        </details>
        <details>
          <summary>Hva koster en reparasjon?</summary>
          <p>Prisen avhenger av feilen. Ring <a href="tel:+4741221200">41 22 12 00</a>, så avtaler vi hva som er lurt før vi går i gang. Vi dikter ikke opp fastpriser her.</p>
        </details>
        <details>
          <summary>Hvor lang tid tar det?</summary>
          <p>Normal behandlingstid på reparasjon er 2–4 dager. Enkel rens eller oppgradering kan gå fortere.</p>
        </details>
        <details>
          <summary>Kan dere komme hjem?</summary>
          <p>Som oftest gjøres jobben på verkstedet. Hjemmebesøk kan avtales ved mindre problemer i nærområdet (Hafslund, Borgenhaugen, Sandbakken, Klavestadhaugen, Bede, Hafslundsøy).</p>
        </details>
        <details>
          <summary>Fikser dere spillkonsoller?</summary>
          <p>Ja. Vi bytter HDMI-porter, lodder og renser konsoller. Se <a href="/konsoller.php">Konsoller</a>.</p>
        </details>
        <details>
          <summary>Lager dere også nettsider?</summary>
          <p>Ja. Vi lager enkle bedriftsnettsider. Se <a href="/nettsider.php">hovdum.no som eksempel</a>.</p>
        </details>
      </div>
    </div>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Hvor ligger verkstedet?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Parkveien 10, 1738 Borgenhaugen i Sarpsborg."
          }
        },
        {
          "@type": "Question",
          "name": "Hva koster en reparasjon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Prisen avhenger av feilen. Ring 41 22 12 00 for å avtale før jobben starter."
          }
        },
        {
          "@type": "Question",
          "name": "Hvor lang tid tar det?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Normal behandlingstid på reparasjon er 2–4 dager."
          }
        },
        {
          "@type": "Question",
          "name": "Kan dere komme hjem?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Jobben gjøres som oftest på verkstedet. Hjemmebesøk kan avtales ved mindre problemer i nærområdet rundt Borgenhaugen."
          }
        },
        {
          "@type": "Question",
          "name": "Fikser dere spillkonsoller?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ja. Vi bytter HDMI-porter, lodder og renser spillkonsoller. Se siden Konsoller."
          }
        },
        {
          "@type": "Question",
          "name": "Lager dere også nettsider?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ja. Borgen Data lager enkle bedriftsnettsider, blant annet hovdum.no."
          }
        }
      ]
    }
    </script>

    <? require_once('shared/footer.html')?>
</body>
</html>
