// Menu Mobile
const toggle_mobile_menu = document.querySelector("button.mobile-menu-button");
const mobile_menu = document.querySelector(".mobile-menu");

if (toggle_mobile_menu) {
  toggle_mobile_menu.addEventListener("click", () => {
    mobile_menu.classList.toggle("hidden");
  });
}

// Dark Mode
const body = document.querySelector("body");
const btn_darkmode = document.querySelector("#btn_darkmode");
const item_darkmode = document.querySelector("#item_darkmode");
const logo = document.querySelector("#logo-search");
let toggleDarkmode = getCookies("viewmode") ? getCookies("viewmode") : "light";

darkmode();
if (btn_darkmode) {
  btn_darkmode.addEventListener("click", () => {
    darkmode();
    if (toggleDarkmode === "light") {
      document.cookie = "viewmode=dark";
    } else {
      document.cookie = "viewmode=light";
    }
  });
}

function darkmode() {
  if (toggleDarkmode === "light") {
    body.classList.remove("dark");
    if (logo) {
      logo.src = "./assets/image/logo-alt.svg";
    }
    toggleDarkmode = "dark";
  } else {
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
    account_modal.classList.toggle("hidden");
    setTimeout(() => {
      account_modal.classList.toggle("hidden");
      btn_account.blur();
    }, 3000);
  });
}

// Cookies
function getCookies(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// Modal Setting
const btn_setting = document.querySelector("#btn_setting");
const modal_setting = document.querySelector("#modal_setting");
const btn_close_modal_setting = document.querySelector(
  "#btn_close_modal_setting"
);

if (btn_setting) {
  btn_setting.addEventListener("click", () => {
    modal_setting.classList.toggle("hidden");
  });

  btn_close_modal_setting.addEventListener("click", () => {
    modal_setting.classList.toggle("hidden");
  });
}

// Modal Menu
const btn_blog = document.querySelector("#btn-blog");
const blog_modal = document.querySelector("#blog-modal");

if (btn_blog) {
  btn_blog.addEventListener("click", () => {
    blog_modal.classList.toggle("hidden");
    setTimeout(() => {
      blog_modal.classList.toggle("hidden");
      btn_blog.blur();
    }, 2500);
  });
}
