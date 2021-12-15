{
    const cSwiperClients = new Swiper('.c-swiperClients', {
        speed: 400,
        spaceBetween: 50,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.cSwiperClients .swiper-button-next',
            prevEl: '.cSwiperClients .swiper-button-prev',
        },
        touchEvents: true,
        autoplay: {
            delay: 2500,
        },
        centeredSlides: true,
        initialSlide: 2,
        loop: true,
    });
}
