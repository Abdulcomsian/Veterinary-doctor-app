// // INITIALIZING SWIPER JS
// const swiper = new Swiper(".swiper", {
//     // Optional parameters
//     direction: "horizontal",
//     loop: true,
//     slidesPerView: 3,
//     spaceBetween: 20,

//     //   // If we need pagination
//     //   pagination: {
//     //     el: ".swiper-pagination",
//     //   },

//     //   // Navigation arrows
//     //   navigation: {
//     //     nextEl: ".swiper-button-next",
//     //     prevEl: ".swiper-button-prev",
//     //   },
//     breakpoints: {
//         // When window width is >= 768px
//         576: {
//             slidesPerView: 2,
//         },
//         768: {
//             slidesPerView: 3,
//         },
//     },

//     // And if we need scrollbar
//     //   scrollbar: {
//     //     el: ".swiper-scrollbar",
//     //   },
// });

const consultationCardsEl = document.querySelectorAll(
    ".item-appointment .item-content-box"
);

consultationCardsEl.forEach((card) => {
    card.addEventListener("click", function (e) {
        e.stopPropagation();

        // Close all cards
        consultationCardsEl.forEach((otherCard) => {
            if (
                otherCard !== card &&
                otherCard.classList.contains("isExpended")
            ) {
                otherCard.classList.remove("isExpended");
            }
        });

        // Toggle the clicked card
        card.classList.toggle("isExpended");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Initialize DataTable
    var dataTable = new DataTable("#appointments-Table", {
        searching: false,
        lengthChange: false,
        info: false,
    });
});
