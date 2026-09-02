function showEmail() {
  var holder = document.getElementById("mail");
  if (!holder) return;
  var address = holder.textContent.replace("1", "bk").replace("2", "borgendata.no");
  holder.innerHTML = "<a href='mailto:" + address + "'>" + address + "</a>";
}

document.addEventListener("DOMContentLoaded", function () {
  showEmail();
  var mailLink = document.getElementById("mailLink");
  if (mailLink) {
    mailLink.href = "mailto:" + "support" + "@" + "borgendata.no";
  }

  var parent = document.querySelector(".menu-parent");
  var item = parent && parent.closest(".has-sub");
  if (!parent || !item) return;

  function setOpen(open) {
    item.classList.toggle("open", open);
    parent.setAttribute("aria-expanded", open ? "true" : "false");
  }

  parent.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    setOpen(!item.classList.contains("open"));
  });

  document.addEventListener("click", function (e) {
    if (!item.contains(e.target)) setOpen(false);
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") setOpen(false);
  });
});
