{
    const cSwiperServicesCards = new Swiper('.c-swiperServicesCards', {
        speed: 400,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.c-swiperServicesCards .swiper-button-next',
            prevEl: '.c-swiperServicesCards .swiper-button-prev',
        },
        allowTouchMove: false,
        watchSlidesProgress: true,
        observer: true,
        init: false,
        breakpoints: {
            880: {
                allowTouchMove: true,
            }
        }
    });

    function swipersServiceCards__updateClasses() {
        let wwid = $(window).width();
        console.log(wwid)
        $('.c-swiperServicesCards .swiper-slide')
            .removeClass('swiper-slide-css-active')
            .removeClass('css-last-active');
        if (wwid >= 1240) {
            console.log('>= 1240')
            $('.c-swiperServicesCards .swiper-slide').css('min-width', '20%');
            cSwiperServicesCards.init('.c-swiperServicesCards');
            $('.c-swiperServicesCards .swiper-slide-active')
                .addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active').addClass('css-last-active');
        } else if (wwid >= 1170) {
            console.log('>= 1170')
            $('.c-swiperServicesCards .swiper-slide').css('min-width', '25%');
            cSwiperServicesCards.init('.c-swiperServicesCards');
            $('.c-swiperServicesCards .swiper-slide-active')
                .addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active').addClass('css-last-active');
        } else if (wwid >= 880) {
            console.log('wwid >= 880')
            $('.c-swiperServicesCards .swiper-slide').css('min-width', '33.3%');
            cSwiperServicesCards.init('.c-swiperServicesCards');
            $('.c-swiperServicesCards .swiper-slide-active')
                .addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active').addClass('css-last-active');
        } else if (wwid >= 620) {
            console.log('wwid >= 480')
            $('.c-swiperServicesCards .swiper-slide').css('min-width', '50%');
            cSwiperServicesCards.init('.c-swiperServicesCards');
            $('.c-swiperServicesCards .swiper-slide-active')
                .addClass('swiper-slide-css-active')
                .next().addClass('swiper-slide-css-active').addClass('css-last-active');
        } else {
            console.log('else')
            $('.c-swiperServicesCards .swiper-slide').css('min-width', '100%');
            cSwiperServicesCards.init('.c-swiperServicesCards');
            $('.c-swiperServicesCards .swiper-slide-active')
                .addClass('swiper-slide-css-active').addClass('css-last-active');
        }
    }

    cSwiperServicesCards.on('slideChangeTransitionEnd slideChange', function () {
        swipersServiceCards__updateClasses()
    });
    $(window).on('resize', function() {
        swipersServiceCards__updateClasses();
    });
    swipersServiceCards__updateClasses();
}
