{
    const cSwiperClients = new Swiper('.c-swiperClients', {
        speed: 400,
        spaceBetween: 50,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.c-swiperClients .swiper-button-next',
            prevEl: '.c-swiperClients .swiper-button-prev',
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
