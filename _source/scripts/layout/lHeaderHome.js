{
    const swiper__headerHome = new Swiper('.js-swiperHeaderHome', {
        speed: 400,
        spaceBetween: 0,
        pagination: {
            el: '.js-swiperHeaderHome .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        touchEvents: false,
    });
}
