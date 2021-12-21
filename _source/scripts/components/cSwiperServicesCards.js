{
    const cSwiperServicesCards = new Swiper('.c-swiperServicesCards', {
        speed: 400,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.c-swiperServicesCards .swiper-button-next',
            prevEl: '.c-swiperServicesCards .swiper-button-prev',
        },
        watchSlidesProgress: true,
    });

    function swipersServiceCards__updateClasses() {
        $('.c-swiperServicesCards .swiper-slide')
            .removeClass('swiper-slide-css-active')
            .removeClass('css-last-active')
        $('.c-swiperServicesCards .swiper-slide-active')
            .addClass('swiper-slide-css-active')
            .next().addClass('swiper-slide-css-active')
            .next().addClass('swiper-slide-css-active')
            .next().addClass('swiper-slide-css-active').addClass('css-last-active');
    }

    cSwiperServicesCards.on('slideChangeTransitionEnd', function () {
        swipersServiceCards__updateClasses()
    });
    swipersServiceCards__updateClasses();
}
