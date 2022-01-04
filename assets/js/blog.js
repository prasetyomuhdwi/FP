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

// Comment Reply
const comment_parent = document.querySelectorAll(".btn-toggle-comment");

function createInput(id, parent) {
  {
    /* <div class="hidden flex w-full rounded-lg bg-gray-300 dark:bg-gray-700 items-center justify-center shadow-lg mt-2 mb-4">
  <form class="w-full px-4 pt-2">
    <div class="flex flex-wrap -mx-3 mb-6">
      <h2 class="px-4 pt-3 pb-2 text-gray-800 dark:text-gray-100 text-lg">Balas</h2>
      <div class="w-full md:w-full px-3 mb-2 mt-2">
        <textarea class="bg-gray-100 dark:bg-gray-700 rounded border border-gray-400 text-gray-800 dark:text-gray-100 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 dark:placeholder-gray-100 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700" name="body" placeholder='Type Your Comment' required></textarea>
      </div>
      <div class="w-full md:w-full flex items-start md:w-full px-3">
        <div class="-mr-1">
          <input type='submit' class="bg-white text-gray-700 dark:bg-gray-700 dark:text-gray-50 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 dark:hover:shadow-lg cursor-pointer dark:hover:bg-gray-500" value='Post Comment'>
          <button onclick='close("reply" + id)' type='button' class="bg-white text-gray-700 dark:bg-gray-700 dark:text-gray-50 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 dark:hover:shadow-lg cursor-pointer dark:hover:bg-gray-500">Batal</button>
        </div>
      </div>
    </div>
  </form>
</div> */
  }

  let wrapper = document.createElement("div");
  wrapper.className =
    "reply" +
    id +
    " flex w-full rounded-lg bg-gray-300 dark:bg-gray-700 items-center justify-center shadow-lg mt-2 mb-4";

  let form = document.createElement("form");
  form.className = "w-full px-4 pt-2";
  form.action = "#" + id;
  form.method = "POST";

  let flex_wrap = document.createElement("div");
  flex_wrap.className = "flex flex-wrap -mx-3 mb-6";

  let h2 = document.createElement("h2");
  h2.className = "px-4 pt-3 pb-2 text-gray-800 dark:text-gray-100 text-lg";
  h2.innerHTML = "Balas";
  flex_wrap.appendChild(h2);

  let div = document.createElement("div");
  div.className = "w-full md:w-full px-3 mb-2 mt-2";

  let textarea = document.createElement("textarea");
  textarea.className =
    "bg-gray-100 dark:bg-gray-700 rounded border border-gray-400 text-gray-800 dark:text-gray-100 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 dark:placeholder-gray-100 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700";
  textarea.name = "comment";
  textarea.placeholder = "Type Your Comment";
  textarea.required = true;
  div.appendChild(textarea);

  flex_wrap.appendChild(div);

  div = document.createElement("div");
  div.className = "w-full md:w-full flex items-start md:w-full px-3";

  let div1 = document.createElement("div");
  div1.className = "-mr-1";

  let input = document.createElement("input");
  input.className =
    "bg-white text-gray-700 dark:bg-gray-700 dark:text-gray-50 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 dark:hover:shadow-lg cursor-pointer dark:hover:bg-gray-500";
  input.type = "submit";
  input.value = "Post Comment";

  let button = document.createElement("button");
  button.className =
    "bg-white text-gray-700 dark:bg-gray-700 dark:text-gray-50 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 dark:hover:shadow-lg cursor-pointer dark:hover:bg-gray-500";
  button.type = "button";
  button.innerHTML = "Batal";
  button.addEventListener("click", () => {
    parent.parentNode.removeChild(parent.parentNode.children[4]);
  });

  div1.appendChild(input);
  div1.appendChild(button);
  div.appendChild(div1);
  flex_wrap.appendChild(div);
  form.appendChild(flex_wrap);
  wrapper.appendChild(form);
  return wrapper;
}
if (comment_parent.length != 0) {
  function reply(id, obj) {
    let div = document.querySelector(".reply" + id);
    if (!div) {
      obj.parentNode.insertBefore(createInput(id, obj), obj.nextSibling);
    }
  }

  function name() {}
}
