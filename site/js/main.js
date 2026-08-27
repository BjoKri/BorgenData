function showEmail() {
 
  if (document.getElementById("mail") !== null) {  
    var holder = document.getElementById("mail");
    var address = holder.innerHTML.replace("1", "bk");
    address = address.replace("2", "borgendata.no");
    address = "<a href='mailto:" + address + "'>" + address + "</a>";
    holder.innerHTML = address;
  }
}
function showContacts(div) {
  $("#call").hide();
  $("#location").hide();

  $("#mail").hide();
  $("#" + div).show();
}

$(document).ready(function () {
  showEmail();
});
