{
    // swiper
    const tabPlans__swiper = new Swiper('.c-tabPlans__swiper', {
        speed: 400,
        allowTouchMove: false,
    });

    // tabs
    $('.c-tabPlans__tab a').on('click', function(e){
        e.preventDefault();
        // in/active
        $('.c-tabPlans__tab a').removeClass('is-active');
        $(this).addClass('is-active');

        // changeswipers
        let index = $(this).closest('li').index();
        tabPlans__swiper.slideTo(index);
   
    })
}
