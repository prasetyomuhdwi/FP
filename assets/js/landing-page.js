// Menu Mobile
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});

// Dark Mode
const body = document.querySelector("body");
const btn_darkmode = document.querySelector("#btn_darkmode");
const item_darkmode = document.querySelector("#item_darkmode");
let toggle = 0;

btn_darkmode.addEventListener("click", () => {
  btn_darkmode.classList.toggle("bg-green-700");
  item_darkmode.classList.toggle("translate-x-7");
  darkmode(body);
});
function darkmode(element) {
  if (toggle == 0) {
    element.classList.add("dark");
    toggle = 1;
  } else {
    element.classList.remove("dark");
    toggle = 0;
  }
}

// Account modal
const btn_account = document.querySelector("#btn_account");
const account_modal = document.querySelector("#account_modal");

btn_account.addEventListener("click", () => {
  account_modal.classList.remove("hidden");
  setTimeout(() => {
    account_modal.classList.add("hidden");
    btn_account.blur();
  }, 3000);
});
