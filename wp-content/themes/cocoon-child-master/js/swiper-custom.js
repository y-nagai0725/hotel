const mySwiper = new Swiper('.swiper', {
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  speed: 1200,
  loop: true,
  loopAdditionalSlides: 1,
  centeredSlides: true,
  slidesPerView: 1.5,
  spaceBetween: 40,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    768: { //画面幅768px以上
      slidesPerView: 1.75,
      spaceBetween: 60,
    },
    1024: { //画面幅1024px以上
      slidesPerView: 2.5,
      spaceBetween: 120,
    }
  },
});