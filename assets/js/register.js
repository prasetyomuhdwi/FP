// Register Step
const step = document.querySelectorAll(".step");
const progress_akun = document.querySelector("#progress-akun");
const progress_personal = document.querySelector("#progress-personal");
const btn_prev = document.querySelector("#btn-prev");
const btn_next = document.querySelector("#btn-next");

btn_next.addEventListener("click", () => {
  if (step[1].classList.length == 2) {
    progress_akun.classList.remove("border-emerald-400");
    progress_akun.children[0].classList.remove("text-emerald-500");

    progress_akun.classList.add("border-gray-200");
    progress_akun.children[0].classList.add("text-gray-400");

    progress_personal.classList.add("border-emerald-400");
    progress_personal.children[0].classList.add("text-emerald-500");

    progress_personal.classList.remove("border-gray-200");
    progress_personal.children[0].classList.remove("text-gray-400");
    btn_next.innerHTML = "Kirim";
    step[0].classList.add("hidden");
    step[1].classList.remove("hidden");
    btn_prev.classList.remove("hidden");
  } else {
    btn_next.type = "submit";
  }
});
btn_prev.addEventListener("click", () => {
  if (step[1].classList.length == 1) {
    progress_akun.classList.add("border-emerald-400");
    progress_akun.children[0].classList.add("text-emerald-500");
    progress_akun.classList.remove("border-gray-200");
    progress_akun.children[0].classList.remove("text-gray-400");

    progress_personal.classList.remove("border-emerald-400");
    progress_personal.children[0].classList.remove("text-emerald-500");
    progress_personal.classList.add("border-gray-200");
    progress_personal.children[0].classList.add("text-gray-400");
    btn_next.innerHTML = "Selanjutnya";
    step[0].classList.remove("hidden");
    step[1].classList.add("hidden");
    btn_prev.classList.add("hidden");
  }
});
