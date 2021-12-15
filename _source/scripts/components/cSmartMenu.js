{
    const cSmartMenu = document.querySelectorAll('.c-smartMenu');
    const activeClass = 'is-active';

    if (cSmartMenu) {
        // identify
        cSmartMenu.forEach((component) => {
            component.classList.add('js-smartMenu');

            // identify fisrt sub menus
            const arrayChildrens = Array.from(component.children[0].children)
            arrayChildrens.forEach((itemList) => {
                itemList.classList.add('js-smartMenu__firstSub')
            });

            // identify menus
            const allSubItens = document.querySelectorAll('.c-smartMenu li')
            allSubItens.forEach((item) => {
                if (item.children[1]) {
                    item.classList.add('js-smartMenu__li')
                    item.children[0].classList.add('js-smartMenu__toggle')
                    item.children[1].classList.add('js-smartMenu__subMenu')
                }
            })

        });

        // open
        const openSubMenu = document.querySelectorAll('.js-smartMenu__toggle');
        openSubMenu.forEach((item) => {
            let thisSmartMenu = item.closest('.c-smartMenu');
            if (thisSmartMenu.classList.contains('--click')) {
                item.addEventListener('click', (event) => {
                    event.preventDefault();
                    item.classList.toggle(activeClass)
                    item.parentElement.classList.toggle(activeClass)
                    item.nextElementSibling.classList.toggle(activeClass)
                })
            } else {
                item.addEventListener('mouseenter', (event) => {
                    event.preventDefault();
                    item.classList.toggle(activeClass)
                    item.parentElement.classList.toggle(activeClass)
                    item.nextElementSibling.classList.toggle(activeClass)
                })
            }
        });

        // close
        const closeSubMenuReference = document.querySelectorAll('.js-smartMenu__firstSub');
        closeSubMenuReference.forEach((item) => {
            if (!item.parentElement.parentElement.classList.contains('--vertical')) {
                item.addEventListener('mouseleave', () => {
                    cSmartMenu.forEach((item) => {
                        item.classList.remove(activeClass);
                        item.querySelectorAll('*').forEach((item) => {
                            item.classList.remove(activeClass);
                        })
                    });
                })
            }
        })
    }
}
