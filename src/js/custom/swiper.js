import Swiper from 'swiper/bundle';

$(function() {
  const partnersSwiper = new Swiper('.partners-swiper', {
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 7,
        spaceBetween: 30,
      },
    },
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    speed: 600,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
  const testimonialsSwiper = new Swiper('.testimonials-swiper', {
    breakpoints: {
      1200: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
    },
    slidesPerView: 1,
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

  const eventGalleryThumbs = new Swiper(".gallerySwiperThumbs", {
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
    loop: true,
    spaceBetween: 30,
    slidesPerView: 1,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".gallery-swiper-button-next",
      prevEl: ".gallery-swiper-button-prev",
    },
  });

});