console.log('teste')
$('.js-scrollLink').on('click', function(e) {
    e.preventDefault();
    let finalDestiny = $(this).attr('href');
    goToSection__scroll(finalDestiny, 120, 120, 700, 10);
});
