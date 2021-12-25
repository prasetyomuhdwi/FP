// Menu
const menu = document.querySelector("#menu");
const icon_menu = document.querySelectorAll(".icon-menu");
const toggle_menu = document.querySelector("#toggle-menu");

if (menu) {
  toggle_menu.addEventListener("click", () => {
    icon_menu[0].classList.toggle("hidden");
    icon_menu[1].classList.toggle("hidden");
    menu.classList.toggle("sm:hidden");
  });
}
