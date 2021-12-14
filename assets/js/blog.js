/* Progress bar */
//Source: https://alligator.io/js/progress-bar-javascript-css-variables/
var h = document.documentElement,
  b = document.body,
  st = "scrollTop",
  sh = "scrollHeight",
  progress = document.querySelector("#progress"),
  scroll;
var scrollpos = window.scrollY;
var header = document.getElementById("header");

document.addEventListener("scroll", function () {
  /*Refresh scroll % width*/
  scroll = ((h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight)) * 100;
  progress.style.setProperty("--scroll", scroll + "%");

  /*Apply classes for slide in bar*/
  scrollpos = window.scrollY;

  if (scrollpos > 10) {
    header.classList.add("fixed");
    header.classList.add("bg-white");
    header.classList.add("shadow");
  } else {
    header.classList.remove("bg-white");
    header.classList.remove("shadow");
  }
});
