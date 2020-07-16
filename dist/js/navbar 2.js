/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function navBar() {
  var x = document.getElementById("mainNav");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}
