const list = document.getElementById("list-list");
const cardList = document.getElementById("card-list");
const btnCardList = document.getElementById("btn-cardlist");
const btnList = document.getElementById("btn-listlist");

btnCardList.addEventListener("click", () => {
  cardList.classList.remove("hidden");
  list.classList.add("hidden");
});

btnList.addEventListener("click", () => {
  cardList.classList.add("hidden");
  list.classList.remove("hidden");
});
