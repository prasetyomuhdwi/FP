// Menu
const menuNav = document.querySelector("#menu-baas");
const icon_menu = document.querySelectorAll(".icon-menu");
const toggle_menu = document.querySelector("#toggle-menu");

if (menuNav) {
  toggle_menu.addEventListener("click", () => {
    console.log(icon_menu[0].classList.length == 3);
    if (icon_menu[1].classList.length == 3) {
      console.log("icon_menu[0].classList.length == 3");
      icon_menu[1].classList.add("hidden");
      icon_menu[0].classList.remove("hidden");
      menuNav.classList.remove("sm:flex");
      menuNav.classList.add("sm:hidden");
    } else {
      console.log("icon_menu[0].classList.length != 3");
      icon_menu[1].classList.remove("hidden");
      icon_menu[0].classList.add("hidden");
      menuNav.classList.add("sm:flex");
      menuNav.classList.remove("sm:hidden");
    }
  });
}
