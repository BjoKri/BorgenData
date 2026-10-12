<!doctype html>
<html lang="no">
<head>
<?php
require_once __DIR__ . '/shared/config.php';
$pageTitle = 'PC-reparasjon i Sarpsborg | Borgen Data';
$pageDescription = 'Borgen Data renser, reparerer og oppgraderer PC-er og spillkonsoller. Verksted i Parkveien 10. Ring før du kommer. Fastpris 1 500 kr.';
$canonical = 'https://borgendata.no/';
$pageId = 'hjem';
require_once __DIR__ . '/shared/head.php';
?>
</head>
<body>
  <?php require_once __DIR__ . '/shared/header.php'; ?>

  <main id="main">
    <section>
      <div class="wrap hero">
        <div class="hero-copy">
          <p class="mono-label">Sarpsborg · Borgenhaugen · siden 2008</p>
          <h1>PC-reparasjon i Sarpsborg</h1>
          <p class="lede">Borgen Data renser, reparerer og oppgraderer PC-er og spillkonsoller. Verksted i Parkveien 10. Ring før du kommer.</p>
          <div class="actions">
            <a class="btn-blue" href="tel:+4741221200">Ring 41 22 12 00</a>
            <a class="btn-ghost" href="tel:+4741221200">Ring før du kommer</a>
          </div>
          <p class="meta">Fastpris 1 500 kr · innlevering etter avtale · ferdig på 2–4 dager</p>
        </div>
        <div class="hero-img">
          <picture>
            <source srcset="/img/hero.webp?v=20261012h" type="image/webp">
            <img src="/img/hero.jpg?v=20261012h" width="1200" height="675" alt="Bjørn Kristiansen i Borgen Data reparerer en bærbar PC" fetchpriority="high">
          </picture>
        </div>
      </div>
    </section>

    <section class="wrap">
      <div class="price-callout">
        <p><?= FASTPRIS_TEKST ?></p>
      </div>
      <p class="hours-note"><?= TIMER_TEKST ?></p>
    </section>

    <section class="wrap">
      <div class="stats">
        <div>
          <p>1 500</p>
          <p>fastpris, vanlig rens og reparasjon</p>
        </div>
        <div>
          <p>2–4</p>
          <p>dager, vanligvis ferdig</p>
        </div>
        <div>
          <p>08–22</p>
          <p>telefontid</p>
        </div>
        <div>
          <p>Parkveien 10</p>
          <p>1738 Borgenhaugen</p>
        </div>
      </div>
    </section>

    <section class="wrap section" style="padding-bottom:0">
      <div class="section-head">
        <h2>Slik foregår det</h2>
      </div>
      <ol class="process-list">
        <li>
          <h3>Ring</h3>
          <p>Fortell hva som skjer. Vi sier ifra om det lønner seg å levere inn, eller om det kan vente.</p>
        </li>
        <li>
          <h3>Avtale innlevering</h3>
          <p>Parkveien 10 etter avtale, som regel kveld eller helg. Ta med lader og en lapp om feilen. Ikke møt opp uten avtale.</p>
        </li>
        <li>
          <h3>Vi fikser</h3>
          <p>Vanligvis 2–4 dager. Rens og enkel oppgradering kan gå fortere.</p>
        </li>
        <li>
          <h3>Hent</h3>
          <p>Du får beskjed når maskinen er klar. Vi sier ifra før vi starter hvis det ikke lønner seg.</p>
        </li>
      </ol>
    </section>

    <section class="wrap section">
      <div class="section-head">
        <h2>Tjenester</h2>
      </div>
      <div class="service-grid">
        <a class="service-card" href="/reparasjon">
          <h3>Reparasjon</h3>
          <p>PC som ikke starter, Windows som krangler, rare lyder og nett som dropper.</p>
          <em>Se mer</em>
        </a>
        <a class="service-card" href="/rensing">
          <h3>Rensing</h3>
          <p>Virus, uønskede programmer og støv i viftene.</p>
          <em>Se mer</em>
        </a>
        <a class="service-card" href="/oppgradering">
          <h3>Oppgradering</h3>
          <p>SSD og mer minne. Gammel maskin, uten å kjøpe ny.</p>
          <em>Se mer</em>
        </a>
        <a class="service-card" href="/konsoller">
          <h3>Konsoller</h3>
          <p>HDMI-port, lodding og rens når bildet er borte eller konsollen koker.</p>
          <em>Se mer</em>
        </a>
        <a class="service-card" href="/nettsider">
          <h3>Nettsider</h3>
          <p>Enkle sider for lokale firmaer. Se hovdum.no.</p>
          <em>Se mer</em>
        </a>
      </div>
    </section>

    <section class="wrap section local-grid" style="padding-top:0">
      <div>
        <h2>Nærmeste verksted</h2>
        <p class="lede">Arbeidet gjøres i Parkveien 10, som oftest kveld og helg. Uten dyrt lokale holder vi prisen nede.</p>
        <ul class="area-list">
          <li>Borgenhaugen</li>
          <li>Hafslund</li>
          <li>Sandbakken</li>
          <li>Klavestadhaugen</li>
          <li>Bede</li>
          <li>Hafslundsøy</li>
        </ul>
      </div>
      <a class="map-card" href="https://www.google.com/maps/search/?api=1&query=Parkveien+10%2C+1738+Borgenhaugen">
        <img src="/img/BD_Map.png" width="800" height="400" loading="lazy" alt="Kart over Parkveien 10, 1738 Borgenhaugen">
        <span>Parkveien 10, 1738 Borgenhaugen · Åpne i Google Maps</span>
      </a>
    </section>

    <section class="wrap section faq" style="padding-top:0">
      <h2>Vanlige spørsmål</h2>
      <div class="faq-list">
        <details>
          <summary><span>Hvor ligger verkstedet?</span><span class="plus">+</span></summary>
          <p>Parkveien 10, 1738 Borgenhaugen i Sarpsborg. Ring først. Innlevering etter avtale.</p>
        </details>
        <details>
          <summary><span>Hva koster det?</span><span class="plus">+</span></summary>
          <p><?= FASTPRIS_TEKST ?> Ring <a class="u" href="tel:+4741221200">41 22 12 00</a>.</p>
        </details>
        <details>
          <summary><span>Hvor lang tid tar det?</span><span class="plus">+</span></summary>
          <p>Vanligvis 2–4 dager. Rens eller oppgradering kan gå fortere.</p>
        </details>
        <details>
          <summary><span>Når kan jeg ringe?</span><span class="plus">+</span></summary>
          <p>Mellom kl. 08 og 22. Innlevering er etter avtale, som regel kveld og helg.</p>
        </details>
        <details>
          <summary><span>Fikser dere spillkonsoller?</span><span class="plus">+</span></summary>
          <p>Ja. HDMI-port, lodding og rens. Se <a class="u" href="/konsoller">Konsoller</a>.</p>
        </details>
        <details>
          <summary><span>Lager dere nettsider?</span><span class="plus">+</span></summary>
          <p>Ja. Enkle bedriftsnettsider. Se <a class="u" href="/nettsider">Nettsider</a>.</p>
        </details>
        <details>
          <summary><span>Har dere noe for små firmaer?</span><span class="plus">+</span></summary>
          <p>Ja. Fast hjelp og timehjelp for 2–8 PC-er. Se <a class="u" href="/bedrift">Bedrift</a>.</p>
        </details>
      </div>
    </section>

    <section class="contact">
      <div class="wrap section contact-grid">
        <div>
          <span class="eyebrow">Kontakt</span>
          <h2>Ring, så avklarer vi</h2>
          <p class="prose">Ring mellom kl. 08 og 22. Innlevering i Parkveien 10 etter avtale, som regel kveld og helg. Ikke møt opp uten å ha ringt.</p>
          <div class="phones">
            <a href="tel:+4741221200">
              <span class="big-num">41 22 12 00</span>
            </a>
            <div>
              <span class="tiny">E-post</span>
              <a class="u" href="mailto:bk@borgendata.no" style="display:block;margin-top:0.25rem;color:inherit">bk@borgendata.no</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div>
            <h3>Fastpris 1 500 kr</h3>
            <p><?= FASTPRIS_TEKST ?></p>
          </div>
          <a class="btn-blue" href="/kontakt">Kontaktside</a>
        </div>
      </div>
    </section>
  </main>

  <?php require_once __DIR__ . '/shared/footer.php'; ?>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "ComputerRepair",
        "@id": "https://borgendata.no/#business",
        "name": "Borgen Data",
        "url": "https://borgendata.no",
        "image": "https://borgendata.no/img/stov_pc.jpg",
        "telephone": "+4741221200",
        "email": "bk@borgendata.no",
        "priceRange": "1500 NOK",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Parkveien 10",
          "postalCode": "1738",
          "addressLocality": "Borgenhaugen",
          "addressRegion": "Østfold",
          "addressCountry": "NO"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 59.278,
          "longitude": 11.109
        },
        "areaServed": [
          {"@type": "City", "name": "Sarpsborg"},
          {"@type": "Place", "name": "Borgenhaugen"},
          {"@type": "Place", "name": "Hafslund"},
          {"@type": "Place", "name": "Sandbakken"},
          {"@type": "Place", "name": "Klavestadhaugen"},
          {"@type": "Place", "name": "Bede"},
          {"@type": "Place", "name": "Hafslundsøy"}
        ],
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+4741221200",
          "contactType": "customer service",
          "availableLanguage": "Norwegian",
          "hoursAvailable": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "08:00",
            "closes": "22:00"
          }
        },
        "offers": {
          "@type": "Offer",
          "price": "1500",
          "priceCurrency": "NOK",
          "description": "Fastpris vanlig rens og reparasjon"
        }
      },
      {
        "@type": "WebSite",
        "@id": "https://borgendata.no/#website",
        "url": "https://borgendata.no",
        "name": "Borgen Data",
        "inLanguage": "nb-NO",
        "publisher": {"@id": "https://borgendata.no/#business"}
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "Hvor ligger verkstedet?",
            "acceptedAnswer": {"@type": "Answer", "text": "Parkveien 10, 1738 Borgenhaugen i Sarpsborg. Ring først. Innlevering etter avtale."}
          },
          {
            "@type": "Question",
            "name": "Hva koster det?",
            "acceptedAnswer": {"@type": "Answer", "text": <?= json_encode(FASTPRIS_TEKST, JSON_UNESCAPED_UNICODE) ?>}
          },
          {
            "@type": "Question",
            "name": "Hvor lang tid tar det?",
            "acceptedAnswer": {"@type": "Answer", "text": "Vanligvis 2–4 dager. Rens eller oppgradering kan gå fortere."}
          }
        ]
      }
    ]
  }
  </script>
</body>
</html>
