<?php $pageId = $pageId ?? ''; ?>
<a class="skip" href="#main">Hopp til innhold</a>

<header class="site" id="top">
  <div class="header-inner">
    <a class="logo logo-lockup" href="/" aria-label="Borgen Data – forsiden">
      <svg class="logo-mark" viewBox="0 0 40 40" width="36" height="36" aria-hidden="true">
        <rect width="40" height="40" rx="10" fill="var(--ink)"/>
        <ellipse cx="20" cy="20" rx="11" ry="7" fill="none" stroke="var(--iceblue)" stroke-width="1.6" transform="rotate(-28 20 20)"/>
        <ellipse cx="20" cy="20" rx="11" ry="7" fill="none" stroke="var(--iceblue)" stroke-width="1.6" opacity=".55" transform="rotate(38 20 20)"/>
        <circle cx="20" cy="20" r="3.2" fill="var(--iceblue)"/>
      </svg>
      <span>BORGEN<span> DATA</span></span>
    </a>

    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Åpne meny">
      <span></span><span></span><span></span>
    </button>

    <nav id="site-nav" class="site-nav" aria-label="Hovedmeny">
      <a class="u" href="/" <?= $pageId === 'hjem' ? 'aria-current="page"' : '' ?>>Forside</a>
      <div class="nav-group">
        <button type="button" class="nav-parent" aria-expanded="false" aria-controls="tjenester-meny">Tjenester</button>
        <div class="nav-panel" id="tjenester-meny">
          <a href="/reparasjon" <?= $pageId === 'reparasjon' ? 'aria-current="page"' : '' ?>>Reparasjon</a>
          <a href="/rensing" <?= $pageId === 'rensing' ? 'aria-current="page"' : '' ?>>Rensing</a>
          <a href="/oppgradering" <?= $pageId === 'oppgradering' ? 'aria-current="page"' : '' ?>>Oppgradering</a>
          <a href="/konsoller" <?= $pageId === 'konsoller' ? 'aria-current="page"' : '' ?>>Konsoller</a>
          <a href="/nettsider" <?= $pageId === 'nettsider' ? 'aria-current="page"' : '' ?>>Nettsider</a>
        </div>
      </div>
      <a class="u" href="/bedrift" <?= $pageId === 'bedrift' ? 'aria-current="page"' : '' ?>>Bedrift</a>
      <a class="u" href="/om" <?= $pageId === 'om' ? 'aria-current="page"' : '' ?>>Om</a>
      <a class="u" href="/kontakt" <?= $pageId === 'kontakt' ? 'aria-current="page"' : '' ?>>Kontakt</a>
    </nav>

    <a class="btn-ink header-call" href="tel:+4741221200">41 22 12 00</a>
  </div>
</header>
