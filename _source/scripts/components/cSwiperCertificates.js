{
    const cSwiperCertificates = new Swiper('.c-swiperCertificates', {
        speed: 400,
        slidesPerView: 4,
        navigation: {
            nextEl: '.c-swiperCertificates .swiper-button-next',
            prevEl: '.c-swiperCertificates .swiper-button-prev',
        },
        allowTouchMove: false,
        breakpoints: {
            // when window width is >= 320px
            470: {
                slidesPerView: 1,
            },
            // when window width is >= 480px
            690: {
                slidesPerView: 2,
            },
            // when window width is >= 640px
            940: {
                slidesPerView: 3,
                allowTouchMove: true,
            }
        }
    });
}
