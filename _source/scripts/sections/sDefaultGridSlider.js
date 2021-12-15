 {
    const swiper__gridMobileSlider = new Swiper('.swiper__gridMobileSlider', {
        speed: 400,
        init: false,
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
            el: '.swiper__gridMobileSlider .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper__gridMobileSlider .swiper-button-next',
            prevEl: '.swiper__gridMobileSlider .swiper-button-prev',
        },
        breakpoints: {
            610: {
                slidesPerView: 1
            },
            940: {
                slidesPerView: 2
            }
        }
    });

    if ($('.s-defaultGridSlider').length) {
        $(window).on('load', function () {
            var viewportWidth = $(window).width();
            if (viewportWidth >= 900) {
                $('.s-defaultGridSlider').removeClass('is-mobile').addClass('is-desktop');
            } else {
                $('.s-defaultGridSlider').addClass('is-mobile').removeClass('is-desktop');
                swiper__gridMobileSlider.init();
            }
        });
    }
}
