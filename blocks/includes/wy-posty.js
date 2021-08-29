var swiper = new Swiper(".wy-po", {
  loop: true,
  autoplay: {
    delay: 5500,
  },
  navigation: {
    prevEl: ".s-next",
    nextEl: ".s-prev",
  },
  breakpoints: {
    500: {
      slidesPerView: 2,
    },
    998: {
      slidesPerView: 3,
    },
  },
});
