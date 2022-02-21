import Swiper from 'swiper/bundle';

$(function() {
  const partnersSwiper = new Swiper('.partners-swiper', {
    slidesPerView: 7,
    spaceBetween: 30,
    loop: true,
    speed: 600,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
  const testimonialsSwiper = new Swiper('.testimonials-swiper', {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    //effect: 'fade',
    speed: 600,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.testimonials-button-next',
      prevEl: '.testimonials-button-prev',
    },
  });
});