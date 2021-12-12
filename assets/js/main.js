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
const logo = document.querySelector("#logo-search");
let toggleDarkmode = document.cookie ? getCookies("viewmode") : "light";

darkmode();

btn_darkmode.addEventListener("click", () => {
  darkmode();
  if (toggleDarkmode === "light") {
    document.cookie = "viewmode=dark";
  } else {
    document.cookie = "viewmode=light";
  }
});

function darkmode() {
  if (toggleDarkmode === "light") {
    btn_darkmode.classList.remove("bg-green-700");
    item_darkmode.classList.remove("translate-x-7");
    body.classList.remove("dark");
    if (logo) {
      logo.src = "./assets/image/logo-alt.svg";
    }
    toggleDarkmode = "dark";
  } else {
    btn_darkmode.classList.add("bg-green-700");
    item_darkmode.classList.add("translate-x-7");
    body.classList.add("dark");
    if (logo) {
      logo.src = "./assets/image/logo-alt2.svg";
    }
    toggleDarkmode = "light";
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

// Modal Setting
const btn_setting = document.querySelector("#btn_setting");
const modal_setting = document.querySelector("#modal_setting");
const btn_close_modal_setting = document.querySelector(
  "#btn_close_modal_setting"
);

btn_setting.addEventListener("click", () => {
  modal_setting.classList.toggle("hidden");
});

btn_close_modal_setting.addEventListener("click", () => {
  modal_setting.classList.toggle("hidden");
});
