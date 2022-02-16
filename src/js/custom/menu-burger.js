function menuMobile() {
  var x = document.getElementById("opener__menu");
  if (x.style.display === "block") {
    x.style.display = "none";
    x.classList.toggle("closed");
    x.classList.toggle("open");
  } else {
    x.style.display = "block";
    x.classList.toggle("open");
    x.classList.toggle("closed");
  }
}
