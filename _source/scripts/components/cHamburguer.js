 {
    const cHamburguer = document.querySelectorAll('.c-hamburguer');
    cHamburguer.forEach((item) => {
        item.addEventListener('click', function () {
            if (!item.classList.contains('is-blocked')) {
                item.classList.toggle('is-active');
            }
        });
    })
}
