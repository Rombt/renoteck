if (document.querySelector('.rmbt-testimonials-swiper')) {
  swiperParam = new Swiper('.rmbt-testimonials-swiper', {
    direction: 'horizontal',
    loop: true,

    centeredSlides: true,
    centerInsufficientSlides: true,

    slidesPerView: 2,
    spaceBetween: 10,

    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },

    breakpoints: {
      480: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
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

    slidesPerView: 2,
    spaceBetween: 10,
    centeredSlides: true,
    centerInsufficientSlides: true,

    navigation: {
      nextEl: '.button-next-video',
      prevEl: '.button-prev-video',
    },

    breakpoints: {
      480: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },

    // speed: 1400,
    // autoplay: {
    //   delay: 5000,
    // },
  });
}

if (document.querySelector('.rmbt-about-us-swiper')) {
  swiperParam = new Swiper('.rmbt-about-us-swiper', {
    slidesPerView: 3,
    grid: {
      rows: 2,
    },
    spaceBetween: 30,
    direction: 'horizontal',
    loop: true,
    centeredSlides: true,
    centerInsufficientSlides: true,
    speed: 400,
    autoplay: {
      delay: 5000,
    },
  });
}
