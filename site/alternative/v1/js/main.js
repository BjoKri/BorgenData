document.addEventListener("DOMContentLoaded", function () {
  var mailLink = document.getElementById("mailLink");
  if (mailLink) {
    mailLink.href = "mailto:" + "support" + "@" + "borgendata.no";
  }

  var header = document.querySelector(".site-header");
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.getElementById("site-nav");
  var parent = document.querySelector(".nav-parent");
  var item = parent && parent.closest(".has-sub");

  function setMenuOpen(open) {
    if (!toggle || !nav || !header) return;
    header.classList.toggle("is-open", open);
    toggle.setAttribute("aria-expanded", open ? "true" : "false");
    toggle.setAttribute("aria-label", open ? "Lukk meny" : "Åpne meny");
    document.body.classList.toggle("nav-lock", open);
  }

  function setSubOpen(open) {
    if (!item || !parent) return;
    item.classList.toggle("open", open);
    parent.setAttribute("aria-expanded", open ? "true" : "false");
  }

  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      setMenuOpen(!header.classList.contains("is-open"));
    });
  }

  if (parent && item) {
    parent.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      setSubOpen(!item.classList.contains("open"));
    });
  }

  document.addEventListener("click", function (e) {
    if (item && !item.contains(e.target)) setSubOpen(false);
    if (header && header.classList.contains("is-open") && !header.contains(e.target)) {
      setMenuOpen(false);
    }
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      setSubOpen(false);
      setMenuOpen(false);
    }
  });

  nav && nav.querySelectorAll("a").forEach(function (link) {
    link.addEventListener("click", function () {
      setMenuOpen(false);
    });
  });
});
