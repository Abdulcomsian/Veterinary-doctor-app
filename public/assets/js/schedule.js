const btntabs = document.querySelectorAll(".label-btn");

const cardsAvaililty = document.querySelectorAll(".card-availibility");

btntabs.forEach((btn) =>
    btn.addEventListener("click", function () {
        cardsAvaililty.forEach((card) => card.classList.toggle("d-none"));
    })
);


