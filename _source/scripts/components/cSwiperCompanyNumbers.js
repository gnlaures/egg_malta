{
    const cSwiperCompanyNumbers = new Swiper('.c-swiperCompanyNumbers', {
        speed: 400,
        slidesPerView: 3,
        navigation: {
            nextEl: '.c-swiperCompanyNumbers .swiper-button-next',
            prevEl: '.c-swiperCompanyNumbers .swiper-button-prev',
        },
        allowTouchMove: false,
        breakpoints: {
            // when window width is >= 480px
            560: {
                slidesPerView: 1,
            },
            // when window width is >= 640px
            780: {
                slidesPerView: 2,
                allowTouchMove: true,
            }
        }
    });
}
