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

let toggle = document.cookie ? getCookies("darkmode") : false;

if (toggle) {
  btn_darkmode.classList.add("bg-green-700");
  item_darkmode.classList.add("translate-x-7");
  darkmode(body);
}

btn_darkmode.addEventListener("click", () => {
  btn_darkmode.classList.toggle("bg-green-700");
  item_darkmode.classList.toggle("translate-x-7");
  darkmode(body);
});
function darkmode(element) {
  if (toggle == false) {
    element.classList.remove("dark");
    toggle = true;
    document.cookie = "darkmode=false";
  } else {
    element.classList.add("dark");
    toggle = false;
    document.cookie = "darkmode=true";
  }
}

// Account modal
const btn_account = document.querySelector("#btn_account");
const account_modal = document.querySelector("#account_modal");

if (btn_account) {
  btn_account.addEventListener("click", () => {
    account_modal.classList.remove("hidden");
    setTimeout(() => {
      account_modal.classList.add("hidden");
      btn_account.blur();
    }, 3000);
  });
}

// Cookies
function getCookies(name) {
  let formatedName = name + "=";
  let value = document.cookie
    .split("; ")
    .find((row) => row.startsWith(formatedName))
    .split("=")[1];
  return value;
}
