import { createFileRoute } from "@tanstack/react-router";

import heroImg from "@/assets/verksted-pc.jpg";
import upgradeImg from "@/assets/ram-ssd.jpg";
import solderImg from "@/assets/lodding-konsoll.jpg";

const TITLE = "Borgen Data – PC-reparatør i Sarpsborg og Borgenhaugen";
const DESCRIPTION =
  "Lokalt PC-verksted i Parkveien 10, Borgenhaugen. Reparasjon, virus- og støvrens, oppgradering til SSD og mer minne, HDMI-lodding på spillkonsoller. Ring 41 22 12 00.";

export const Route = createFileRoute("/")({
  head: () => ({
    meta: [
      { title: TITLE },
      { name: "description", content: DESCRIPTION },
      { property: "og:title", content: TITLE },
      { property: "og:description", content: DESCRIPTION },
    ],
  }),
  component: Index,
});

const services = [
  {
    n: "01",
    title: "Reparasjon",
    desc: "PC eller Windows som ikke starter, feilmeldinger, ulyder, nett som ikke virker. Vi feilsøker og retter.",
    href: "#reparasjon",
  },
  {
    n: "02",
    title: "Rensing",
    desc: "Virus, uønskede programmer og nettleserkapring bort — og støv ut av vifter og kjøleribber.",
    href: "#rensing",
  },
  {
    n: "03",
    title: "Oppgradering",
    desc: "Mer minne og SSD i stedet for ny maskin. To grep som gir mest ytelse for pengene.",
    href: "#oppgradering",
  },
  {
    n: "04",
    title: "Konsoller og lodding",
    desc: "Bytte av HDMI-port, annen lodding på kretskort og rens av spillkonsoller.",
    href: "#konsoller",
  },
  {
    n: "05",
    title: "Nettsider",
    desc: "Enkle bedriftsnettsider for lokale firmaer i Sarpsborg og Østfold. Se hovdum.no.",
    href: "#nettsider",
  },
];

const faq = [
  {
    q: "Hvor ligger verkstedet?",
    a: "Parkveien 10, 1738 Borgenhaugen i Sarpsborg. Du kan levere PC her, eller ringe først.",
  },
  {
    q: "Hva koster en reparasjon?",
    a: "Prisen avhenger av feilen. Ring 41 22 12 00, så avtaler vi hva som er lurt før vi går i gang. Vi dikter ikke opp fastpriser her.",
  },
  {
    q: "Hvor lang tid tar det?",
    a: "Normal behandlingstid på reparasjon er 2–4 dager. Enkel rens eller oppgradering kan gå fortere.",
  },
  {
    q: "Kan dere komme hjem?",
    a: "Som oftest gjøres jobben på verkstedet. Hjemmebesøk kan avtales ved mindre problemer i nærområdet: Hafslund, Borgenhaugen, Sandbakken, Klavestadhaugen, Bede og Hafslundsøy.",
  },
  {
    q: "Fikser dere spillkonsoller?",
    a: "Ja. Vi bytter HDMI-porter, lodder og renser konsoller. Ring først, så avklarer vi om jobben passer.",
  },
  {
    q: "Lager dere også nettsider?",
    a: "Ja. Vi lager enkle bedriftsnettsider. hovdum.no er et eksempel på hva vi leverer.",
  },
];

function Index() {
  return (
    <div className="bg-ice text-ink">
      <header className="sticky top-0 z-40 border-b border-haze bg-ice/85 backdrop-blur">
        <div className="mx-auto flex max-w-6xl items-center justify-between px-5 py-3">
          <a href="#topp" className="font-display text-xl font-extrabold tracking-tight">
            BORGEN<span className="text-iceblue"> DATA</span>
          </a>
          <nav className="hidden items-center gap-7 text-sm text-ink-2 md:flex">
            <a href="#tjenester" className="u">
              Tjenester
            </a>
            <a href="#oppgradering" className="u">
              Oppgradering
            </a>
            <a href="#faq" className="u">
              FAQ
            </a>
            <a href="#kontakt" className="u">
              Kontakt
            </a>
          </nav>
          <a
            href="tel:+4741221200"
            className="rounded-md bg-ink px-3 py-2 font-mono text-sm font-medium whitespace-nowrap text-ice ring-1 ring-black/5"
          >
            41 22 12 00
          </a>
        </div>
      </header>

      <main id="topp">
        <section className="relative">
          <div className="mx-auto grid max-w-6xl items-center gap-10 px-5 py-14 md:grid-cols-12 md:py-24">
            <div className="md:col-span-7">
              <p className="animate-fade font-mono text-xs tracking-[0.2em] text-iceblue uppercase">
                Sarpsborg · Borgenhaugen · Parkveien 10
              </p>
              <h1 className="animate-fade mt-5 text-5xl leading-[1.02] font-extrabold tracking-tight text-balance [animation-delay:80ms] md:text-6xl">
                Din lokale PC-reparatør i Sarpsborg
              </h1>
              <p className="animate-fade mt-6 max-w-[46ch] text-lg text-ink-2 text-pretty [animation-delay:160ms]">
                Vi fjerner virus, reparerer datamaskiner, renser og oppgraderer PC-en din. Vi
                lodder også — blant annet HDMI-porter på spillkonsoller. Ta med maskinen til
                verkstedet, så fikser vi problemet.
              </p>
              <div className="animate-fade mt-8 flex flex-wrap gap-3 [animation-delay:240ms]">
                <a
                  href="tel:+4741221200"
                  className="rounded-md bg-iceblue px-5 py-3 font-semibold text-ice ring-1 ring-black/5 transition-colors duration-200 hover:bg-ink hover:text-ice"
                >
                  Ring verkstedet
                </a>
                <a
                  href="#kontakt"
                  className="rounded-md border border-haze-2 px-5 py-3 font-semibold transition-colors duration-200 hover:bg-frost"
                >
                  Se veien hit
                </a>
              </div>
              <p className="mt-6 font-mono text-xs text-ink-2">
                Åpen telefon 08–22 · 2–4 dagers behandlingstid
              </p>
            </div>
            <div className="animate-fade md:col-span-5 [animation-delay:160ms]">
              <img
                src={heroImg}
                width={1024}
                height={1280}
                alt="Åpen PC på arbeidsbenken hos Borgen Data i Borgenhaugen"
                className="aspect-[4/5] w-full rounded-xl object-cover outline-1 -outline-offset-1 outline-black/5"
              />
            </div>
          </div>
        </section>

        <section className="mx-auto max-w-6xl px-5">
          <div className="grid grid-cols-2 divide-x divide-haze border-y border-haze md:grid-cols-4">
            <div className="py-6 pr-4">
              <p className="font-mono text-2xl font-medium">2–4</p>
              <p className="mt-1 text-sm text-ink-2">dagers behandlingstid</p>
            </div>
            <div className="px-4 py-6">
              <p className="font-mono text-2xl font-medium">08–22</p>
              <p className="mt-1 text-sm text-ink-2">åpen telefon</p>
            </div>
            <div className="px-4 py-6">
              <p className="font-mono text-2xl font-medium">P·10</p>
              <p className="mt-1 text-sm text-ink-2">verksted i Parkveien</p>
            </div>
            <div className="py-6 pl-4">
              <p className="font-mono text-2xl font-medium">Lokalt</p>
              <p className="mt-1 text-sm text-ink-2">verksted i Sarpsborg</p>
            </div>
          </div>
        </section>

        <section id="tjenester" className="mx-auto max-w-6xl px-5 py-20">
          <div className="flex items-end justify-between">
            <h2 className="text-4xl font-extrabold tracking-tight">Tjenester</h2>
            <span className="font-mono text-xs text-ink-2">05 poster</span>
          </div>
          <div className="mt-8 border-t border-haze">
            {services.map((s) => (
              <a
                key={s.n}
                href={s.href}
                className="group grid grid-cols-[auto_1fr_auto] items-baseline gap-4 border-b border-haze py-5 transition-colors duration-200 hover:bg-frost/60 md:gap-8"
              >
                <span className="font-mono text-sm text-iceblue">{s.n}</span>
                <span>
                  <span className="font-display text-lg font-semibold">{s.title}</span>
                  <span className="mt-1 block text-sm text-ink-2">{s.desc}</span>
                </span>
                <span className="font-mono text-xs text-ink-2 transition-transform duration-200 group-hover:translate-x-1">
                  →
                </span>
              </a>
            ))}
          </div>
        </section>

        <section id="reparasjon" className="border-y border-haze bg-frost/50">
          <div className="mx-auto max-w-6xl px-5 py-20">
            <span className="font-mono text-xs tracking-[0.2em] text-iceblue uppercase">
              Reparasjon
            </span>
            <h2 className="mt-4 max-w-[24ch] text-4xl font-extrabold tracking-tight text-balance">
              Kjenner du deg igjen?
            </h2>
            <p className="mt-5 max-w-[52ch] text-ink-2 text-pretty">
              Vi har lang erfaring med feilsøking og feilretting på alle slags PC-er, med
              konkurransedyktige priser og kort behandlingstid.
            </p>
            <ul className="mt-10 grid gap-x-10 gap-y-4 text-sm sm:grid-cols-2 lg:grid-cols-3">
              {[
                "PC starter ikke opp",
                "Windows starter ikke opp",
                "Feilmeldinger dukker opp",
                "Ulyder fra maskinen",
                "Har ikke internett",
                "Utstyr virker ikke",
                "Problemer med trådløst nett",
                "Maskinen har blitt treg",
                "Maskinen har alltid vært treg",
              ].map((item) => (
                <li key={item} className="flex items-start gap-3 border-b border-haze pb-3">
                  <span className="mt-0.5 font-mono text-iceblue">/</span>
                  <span>{item}</span>
                </li>
              ))}
            </ul>
            <a
              href="tel:+4741221200"
              className="mt-10 inline-block rounded-md bg-ink px-5 py-3 font-semibold text-ice ring-1 ring-black/5 transition-colors duration-200 hover:bg-iceblue"
            >
              Ring og beskriv feilen
            </a>
          </div>
        </section>

        <section id="rensing" className="mx-auto max-w-6xl px-5 py-20">
          <span className="font-mono text-xs tracking-[0.2em] text-iceblue uppercase">
            Rensing
          </span>
          <h2 className="mt-4 max-w-[26ch] text-4xl font-extrabold tracking-tight text-balance">
            Maskinvare blir ikke tregere — programvaren gjør det
          </h2>
          <div className="mt-8 grid gap-12 md:grid-cols-2">
            <div>
              <p className="text-ink-2 text-pretty">
                Enten fungerer maskinvaren, eller den gjør det ikke. Når en maskin gradvis
                tråkker i sirup, kommer det nesten alltid av programmer som er installert uten
                at du visste om det. Vi rydder opp.
              </p>
              <ul className="mt-6 space-y-3 text-sm">
                {[
                  "Startside eller søkemotor er endret til noe du ikke kjenner igjen",
                  "Ukjente utvidelser eller verktøylinjer i nettleseren",
                  "Reklamevinduer og sider du ikke har bedt om",
                  "Sporadiske feilmeldinger og nye ikoner i oppgavelinjen",
                ].map((item) => (
                  <li key={item} className="flex items-start gap-3">
                    <span className="mt-0.5 font-mono text-iceblue">/</span>
                    <span className="text-ink-2">{item}</span>
                  </li>
                ))}
              </ul>
            </div>
            <div>
              <h3 className="text-xl font-semibold">Støv i PC</h3>
              <p className="mt-3 text-ink-2 text-pretty">
                Det er ikke mange som tenker på det, men støv i en PC kan faktisk være
                brannfarlig. Det gir også mer viftestøy, høyere temperatur og maskiner som
                slår seg av når de blir varme. Samme problem gjelder spillkonsoller.
              </p>
              <p className="mt-4 font-mono text-xs tracking-[0.14em] text-ink-2 uppercase">
                Vi åpner, renser og setter sammen igjen
              </p>
            </div>
          </div>
        </section>

        <section id="oppgradering" className="border-y border-haze bg-frost/50">
          <div className="mx-auto grid max-w-6xl items-center gap-10 px-5 py-20 md:grid-cols-2">
            <div>
              <span className="font-mono text-xs tracking-[0.2em] text-iceblue uppercase">
                Oppgradering
              </span>
              <h2 className="mt-4 text-4xl font-extrabold tracking-tight text-balance">
                Nytt liv i maskinen, uten ny maskin
              </h2>
              <p className="mt-5 max-w-[44ch] text-ink-2 text-pretty">
                Det er to flaskehalser i nesten alle eldre PC-er: for lite minne og for treg
                disk. Begge koster lite å fikse, og forskjellen merkes med en gang.
              </p>
              <ul className="mt-8 space-y-3 text-sm">
                <li className="flex items-start gap-3">
                  <span className="mt-0.5 font-mono text-iceblue">/</span>
                  <span>
                    <span className="font-semibold">Mer minne (RAM)</span>{" "}
                    <span className="text-ink-2">
                      — maskinen reagerer raskere og takler flere programmer samtidig.
                    </span>
                  </span>
                </li>
                <li className="flex items-start gap-3">
                  <span className="mt-0.5 font-mono text-iceblue">/</span>
                  <span>
                    <span className="font-semibold">SSD i stedet for harddisk</span>{" "}
                    <span className="text-ink-2">
                      — den enkeltoppgraderingen som gir størst hopp i ytelse.
                    </span>
                  </span>
                </li>
                <li className="flex items-start gap-3">
                  <span className="mt-0.5 font-mono text-iceblue">/</span>
                  <span>
                    <span className="font-semibold">Mer plass</span>{" "}
                    <span className="text-ink-2">
                      — full disk er en vanlig grunn til at alt går tregt.
                    </span>
                  </span>
                </li>
              </ul>
              <a
                href="tel:+4741221200"
                className="mt-8 inline-block rounded-md bg-ink px-5 py-3 font-semibold text-ice ring-1 ring-black/5 transition-colors duration-200 hover:bg-iceblue"
              >
                Ring for vurdering
              </a>
            </div>
            <img
              src={upgradeImg}
              width={1024}
              height={1024}
              loading="lazy"
              alt="Minnebrikke og SSD klar til oppgradering av PC"
              className="aspect-square w-full rounded-xl object-cover outline-1 -outline-offset-1 outline-black/5"
            />
          </div>
        </section>

        <section id="konsoller" className="mx-auto max-w-6xl px-5 py-20">
          <div className="grid items-center gap-10 md:grid-cols-2">
            <img
              src={solderImg}
              width={1024}
              height={768}
              loading="lazy"
              alt="Lodding av HDMI-port på kretskort i en spillkonsoll"
              className="aspect-[4/3] w-full rounded-xl object-cover outline-1 -outline-offset-1 outline-black/5"
            />
            <div>
              <span className="font-mono text-xs tracking-[0.2em] text-iceblue uppercase">
                Konsoller og lodding
              </span>
              <h2 className="mt-4 text-4xl font-extrabold tracking-tight text-balance">
                Mikroelektronikk på verkstedet
              </h2>
              <p className="mt-5 max-w-[44ch] text-ink-2 text-pretty">
                En ødelagt HDMI-port er en vanlig grunn til at bildet forsvinner, selv om
                konsollen ellers virker. Vi bytter porten, og lodder også annen elektronikk der
                det er fornuftig å reparere framfor å kaste.
              </p>
              <ul className="mt-8 space-y-3 text-sm">
                {[
                  "Bytte av HDMI-port på spillkonsoll",
                  "Annen lodding på kretskort der det er praktisk mulig",
                  "Rens av konsoll: støv, vifter og overoppheting",
                ].map((item) => (
                  <li key={item} className="flex items-start gap-3">
                    <span className="mt-0.5 font-mono text-iceblue">/</span>
                    <span className="text-ink-2">{item}</span>
                  </li>
                ))}
              </ul>
              <p className="mt-6 text-sm text-ink-2">
                Ta gjerne med lader og eventuelle feilmeldinger. Vi gir beskjed før vi går i
                gang hvis det ikke lønner seg.
              </p>
            </div>
          </div>
        </section>

        <section id="nettsider" className="border-y border-haze bg-frost/50">
          <div className="mx-auto max-w-6xl px-5 py-20">
            <span className="font-mono text-xs tracking-[0.2em] text-iceblue uppercase">
              Nettsider
            </span>
            <h2 className="mt-4 max-w-[28ch] text-4xl font-extrabold tracking-tight text-balance">
              Enkle nettsider for lokale bedrifter
            </h2>
            <p className="mt-5 max-w-[54ch] text-ink-2 text-pretty">
              PC-verkstedet er kjernen i Borgen Data. I tillegg lager vi nettsider for
              bedrifter i Sarpsborg og Østfold — sider som laster raskt, er lette å
              vedlikeholde, og som eieren faktisk kan bruke. Ingen unødvendig CMS-jungel.
            </p>
            <ul className="mt-8 grid gap-x-10 gap-y-4 text-sm sm:grid-cols-2">
              {[
                "Bedriftsnettside med tjenester, adresse og kontakt",
                "Mobilvennlig layout",
                "Oppsett hos vanlige norske webhotell",
                "Tekst og struktur som gir mening for lokale kunder",
              ].map((item) => (
                <li key={item} className="flex items-start gap-3 border-b border-haze pb-3">
                  <span className="mt-0.5 font-mono text-iceblue">/</span>
                  <span className="text-ink-2">{item}</span>
                </li>
              ))}
            </ul>
            <a
              href="https://hovdum.no/"
              target="_blank"
              rel="noopener noreferrer"
              className="mt-10 inline-block rounded-md border border-haze-2 px-5 py-3 font-semibold transition-colors duration-200 hover:bg-ice"
            >
              Se eksempel: hovdum.no
            </a>
          </div>
        </section>

        <section id="faq" className="mx-auto max-w-3xl px-5 py-20">
          <h2 className="text-4xl font-extrabold tracking-tight">Vanlige spørsmål</h2>
          <div className="mt-8 border-t border-haze">
            {faq.map((item) => (
              <details key={item.q} className="group border-b border-haze py-4">
                <summary className="flex cursor-pointer items-center justify-between font-semibold">
                  <span>{item.q}</span>
                  <span className="font-mono text-iceblue transition-transform duration-200 group-open:rotate-45">
                    +
                  </span>
                </summary>
                <p className="mt-3 text-sm text-ink-2 text-pretty">{item.a}</p>
              </details>
            ))}
          </div>
        </section>

        <section id="kontakt" className="bg-ink text-ice">
          <div className="mx-auto grid max-w-6xl gap-12 px-5 py-20 md:grid-cols-2">
            <div>
              <span className="font-mono text-xs tracking-[0.2em] text-iceblue uppercase">
                Kontakt
              </span>
              <h2 className="mt-4 text-4xl font-extrabold tracking-tight text-balance">
                Bare ring — ingen spørsmål er for dumme
              </h2>
              <p className="mt-4 max-w-[42ch] text-ice/70 text-pretty">
                Har du spørsmål om dataservice eller vil bestille time? Vi har åpen telefon fra
                08:00 til 22:00.
              </p>
              <div className="mt-8 space-y-4">
                <a href="tel:+4741221200" className="block">
                  <span className="font-mono text-xs tracking-wider text-ice/50 uppercase">
                    Hovednummer · Bjørn Kristiansen
                  </span>
                  <span className="block font-display text-3xl font-extrabold tracking-tight">
                    41 22 12 00
                  </span>
                </a>
                <a href="tel:+4792082685" className="block">
                  <span className="font-mono text-xs tracking-wider text-ice/50 uppercase">
                    Alternativt nummer · Nathalie Kristiansen
                  </span>
                  <span className="block font-display text-2xl font-semibold tracking-tight">
                    92 08 26 85
                  </span>
                </a>
                <div className="pt-2">
                  <span className="font-mono text-xs tracking-wider text-ice/50 uppercase">
                    E-post
                  </span>
                  <a href="mailto:support@borgendata.no" className="u mt-1 block">
                    support@borgendata.no
                  </a>
                </div>
                <div>
                  <span className="font-mono text-xs tracking-wider text-ice/50 uppercase">
                    Adresse
                  </span>
                  <span className="mt-1 block">Parkveien 10, 1738 Borgenhaugen, Sarpsborg</span>
                </div>
              </div>
            </div>
            <div className="flex flex-col justify-between gap-6 rounded-xl bg-ice/5 p-6 outline-1 -outline-offset-1 outline-ice/10">
              <div>
                <h3 className="font-display text-xl font-semibold">Hjemmebesøk i nærområdet</h3>
                <p className="mt-3 text-sm text-ice/70 text-pretty">
                  Mesteparten gjøres på verkstedet, men ved mindre problemer kan hjemmebesøk
                  avtales i Hafslund, Borgen, Borgenhaugen, Sandbakken, Klavestadhaugen, Bede og
                  Hafslundsøy.
                </p>
              </div>
              <a
                href="https://www.google.com/maps/search/?api=1&query=Parkveien+10%2C+1738+Borgenhaugen"
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex items-center justify-center rounded-md bg-iceblue px-5 py-3 font-semibold text-ice transition-colors duration-200 hover:bg-ice hover:text-ink"
              >
                Åpne kart til Parkveien 10
              </a>
            </div>
          </div>
        </section>
      </main>

      <footer className="border-t border-ice/10 bg-ink text-ice/60">
        <div className="mx-auto flex max-w-6xl flex-col items-start justify-between gap-4 px-5 py-8 text-sm md:flex-row md:items-center">
          <span className="font-display text-lg font-extrabold tracking-tight text-ice">
            BORGEN DATA
          </span>
          <span>PC-verksted · Parkveien 10, Borgenhaugen · Sarpsborg</span>
          <a href="tel:+4741221200" className="u">
            41 22 12 00
          </a>
        </div>
      </footer>

      <div className="sticky bottom-0 z-40 border-t border-haze bg-ice md:hidden">
        <a
          href="tel:+4741221200"
          className="flex items-center justify-center gap-2 bg-iceblue py-4 font-semibold text-ice"
        >
          Ring 41 22 12 00
        </a>
      </div>
    </div>
  );
}
