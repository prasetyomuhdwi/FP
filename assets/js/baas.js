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

// Users
const btn_users = document.getElementById("btn-add-users");
const users_modal = document.getElementById("users_modal");
const btn_close_users_modal = document.getElementById("btn_close_users_modal");

if (btn_users) {
  btn_users.addEventListener("click", () => {
    users_modal.classList.remove("hidden");
  });
  btn_close_users_modal.addEventListener("click", () => {
    users_modal.classList.add("hidden");
  });
}

// Blogs
const btn_blogs = document.getElementById("btn-add-blogs");
const blogs_modal = document.getElementById("blogs_modal");
const btn_close_blogs_modal = document.getElementById("btn_close_blogs_modal");

if (btn_blogs) {
  btn_blogs.addEventListener("click", () => {
    blogs_modal.classList.remove("hidden");
  });
  btn_close_blogs_modal.addEventListener("click", () => {
    blogs_modal.classList.add("hidden");
  });
}

// Bookmarks
const btn_bookmarks = document.getElementById("btn-add-bookmarks");
const bookmarks_modal = document.getElementById("bookmarks_modal");
const btn_close_bookmarks_modal = document.getElementById(
  "btn_close_bookmarks_modal"
);

if (btn_bookmarks) {
  btn_bookmarks.addEventListener("click", () => {
    bookmarks_modal.classList.remove("hidden");
  });
  btn_close_bookmarks_modal.addEventListener("click", () => {
    bookmarks_modal.classList.add("hidden");
  });
}

// Tags
const btn_tags = document.getElementById("btn-add-tags");
const tags_modal = document.getElementById("tags_modal");
const btn_close_tags_modal = document.getElementById("btn_close_tags_modal");

if (btn_tags) {
  btn_tags.addEventListener("click", () => {
    tags_modal.classList.remove("hidden");
  });
  btn_close_tags_modal.addEventListener("click", () => {
    tags_modal.classList.add("hidden");
  });
}

// Likes
const btn_likes = document.getElementById("btn-add-likes");
const likes_modal = document.getElementById("likes_modal");
const btn_close_likes_modal = document.getElementById("btn_close_likes_modal");

if (btn_likes) {
  btn_likes.addEventListener("click", () => {
    likes_modal.classList.remove("hidden");
  });
  btn_close_likes_modal.addEventListener("click", () => {
    likes_modal.classList.add("hidden");
  });
}

// Comments
const btn_comments = document.getElementById("btn-add-comments");
const comments_modal = document.getElementById("comments_modal");
const btn_close_comments_modal = document.getElementById(
  "btn_close_comments_modal"
);

if (btn_comments) {
  btn_comments.addEventListener("click", () => {
    comments_modal.classList.remove("hidden");
  });
  btn_close_comments_modal.addEventListener("click", () => {
    comments_modal.classList.add("hidden");
  });
}

$(window).bind("load", function () {
  // tinyCloud
  const alertDel = document.querySelectorAll(
    ".tox-notification__dismiss.tox-button.tox-button--naked.tox-button--icon"
  );
  if (alertDel.length != 0) {
    alertDel[0].click();
    alertDel[1].click();
  }
});
