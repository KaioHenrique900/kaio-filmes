function responsiveTopNav() {
  var x = document.getElementById("myTopnav");
  var c = document.getElementById('topnavControl');
  if (x.className === "topnav") {
    x.className += " responsive";
    c.className = "fa fa-close";
  } else {
    x.className = "topnav";
    c.className = "fa fa-bars";
  }
}