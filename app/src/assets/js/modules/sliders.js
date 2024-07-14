if (document.querySelector('.rmbt-testimonials-swiper')) {
  swiperParam = new Swiper('.rmbt-testimonials-swiper', {
    direction: 'horizontal',
    loop: true,

    slidesPerView: 4,
    spaceBetween: 40,
    centeredSlides: true,
    centerInsufficientSlides: true,

    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },

    // speed: 1400,
    // autoplay: {
    //   delay: 5000,
    // },
  });
}

if (document.querySelector('.rmbt-testimonials-video-swiper')) {
  swiperParam = new Swiper('.rmbt-testimonials-video-swiper', {
    direction: 'horizontal',
    loop: true,

    slidesPerView: 4,
    spaceBetween: 40,
    centeredSlides: true,
    centerInsufficientSlides: true,

    navigation: {
      nextEl: '.button-next-video',
      prevEl: '.button-prev-video',
    },

    // speed: 1400,
    // autoplay: {
    //   delay: 5000,
    // },
  });
}
