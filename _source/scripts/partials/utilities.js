
    // Identifica direcao do scroll
    function scrollDirection() {
        var scrollInit = 0;
        $(window).on('scroll', function() {
            var scrollBody = $(this).scrollTop();
            if (scrollBody < scrollInit) {
                $('body').removeClass('hidden');
                $('body').addClass('scrolledUp');
                $('body').removeClass('scrolledDown');
            } else {
                $('body').removeClass('scrolledUp');
                $('body').addClass('scrolledDown');
            }
            scrollInit = scrollBody;
        });
    }
    // Example:
    // $(window).on('load', function() {scrollDirection();});


    // link scroll
    function goToSection__scroll(elScrollDestiny, distanceIfScrollGoingToUp, distanceIfScrollGoingToDown, speedScroll, delay) {
        // scroll reference
        var scrollEfetuado = $(window).scrollTop();
        // element reference
        var sectionDestiny_offsetTop = $(elScrollDestiny).offset().top;

        if (scrollEfetuado > sectionDestiny_offsetTop) {
            setTimeout(function(){
                $('html, body').animate({
                    scrollTop: sectionDestiny_offsetTop - distanceIfScrollGoingToUp
                }, speedScroll);
            }, delay);
        } else {
            setTimeout(function(){
                $('html, body').animate({
                    scrollTop: sectionDestiny_offsetTop - distanceIfScrollGoingToDown
                }, speedScroll);
            }, delay);
        }
    }
    // Example:
    // $('.js-linkScroll').on('click', function(e) {
    //     e.preventDefault();
    //     var finalDestiny = $(this).attr('href');
    //     goToSection__scroll(finalDestiny, 100, 50, 700, 10);
    // });


    // position sticky control
    function stickyPosition(stickyElement, initDistance, scrolledDistance) {
        var el = $(stickyElement);
        var nav = $('.l-nav');
        if (nav.hasClass('is-scrolled')) {
            if (nav.hasClass('is-hidden')) {
                el.css('top', initDistance);
            } else {
                el.css('top', scrolledDistance);
            }
        } else {
            el.css('top', initDistance);
        }
    }
    // Example;
    // $(window).on('scroll', function () {stickyPosition('.u-stickyElement', 0, get__navHeight());});
    // $(window).on('load', function () {stickyPosition('.u-stickyElement', 0, get__navHeight());});
