{
    const qtfSliders = $('.js-swiperHeaderHome .swiper-slide').length;
    console.log('qtfSliders ' + qtfSliders)

    let options = {
        speed: 400,
        spaceBetween: 0,
        pagination: {
            el: '.js-swiperHeaderHome .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        touchEvents: false,
    }

    if (qtfSliders <= 1) {
        console.log('entrou aqui')
        options = {
            speed: 400,
            spaceBetween: 0,
            touchEvents: false,
            allowTouchMove: false
        }
    } else {
        console.log('aqui entao')
    }

    const swiper__headerHome = new Swiper('.js-swiperHeaderHome', options);
}
