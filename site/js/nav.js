document.addEventListener("DOMContentLoaded", function () {
  var header = document.getElementById("top");
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.getElementById("site-nav");
  var parent = document.querySelector(".nav-parent");
  var group = parent && parent.closest(".nav-group");

  function setMenuOpen(open) {
    if (!toggle || !nav || !header) return;
    header.classList.toggle("is-open", open);
    toggle.setAttribute("aria-expanded", open ? "true" : "false");
    toggle.setAttribute("aria-label", open ? "Lukk meny" : "Åpne meny");
    document.body.classList.toggle("nav-lock", open);
  }

  function setSubOpen(open) {
    if (!group || !parent) return;
    group.classList.toggle("open", open);
    parent.setAttribute("aria-expanded", open ? "true" : "false");
  }

  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      setMenuOpen(!header.classList.contains("is-open"));
    });
  }

  if (parent && group) {
    parent.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      setSubOpen(!group.classList.contains("open"));
    });
  }

  document.addEventListener("click", function (e) {
    if (group && !group.contains(e.target)) setSubOpen(false);
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

  if (nav) {
    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        setMenuOpen(false);
      });
    });
  }
});
