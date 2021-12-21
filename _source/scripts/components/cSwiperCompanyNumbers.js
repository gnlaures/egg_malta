{
    const cSwiperCompanyNumbers = new Swiper('.c-swiperCompanyNumbers', {
        speed: 400,
        slidesPerView: 3,
        navigation: {
            nextEl: '.c-swiperCompanyNumbers .swiper-button-next',
            prevEl: '.c-swiperCompanyNumbers .swiper-button-prev',
        },
        allowTouchMove: false,
    });
}
