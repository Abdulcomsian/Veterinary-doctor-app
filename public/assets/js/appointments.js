// INITIALIZING SWIPER JS
const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  slidesPerView: 3,
  spaceBetween: 20,

  //   // If we need pagination
  //   pagination: {
  //     el: ".swiper-pagination",
  //   },

  //   // Navigation arrows
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },
  breakpoints: {
    // When window width is >= 768px
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
  },

  // And if we need scrollbar
  //   scrollbar: {
  //     el: ".swiper-scrollbar",
  //   },
});
