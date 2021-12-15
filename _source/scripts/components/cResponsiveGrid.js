 {
    const cResponsiveGrid = document.querySelectorAll('.c-responsiveGrid');

    function removeGridClass(el) {
        for (var i = 1; i <= 12; i++) {
            el.classList.remove('--col' + i);
        }
        el.classList.remove('--colNaN');
    }

    function initResponsiveGrids() {
        cResponsiveGrid.forEach((item, index) => {
            item.classList.add('js-responsiveGrid')

            let thisGrid = {
                maxwBreaks: item.getAttribute('data-maxw-breaks').split(', ').map(Number),
                maxwCols: item.getAttribute('data-maxw-cols').split(', ').map(Number),
                initCols: parseInt(item.getAttribute('data-cols-init')),
                windowW: window.innerWidth
            }
            let qtfBreaks = thisGrid.maxwBreaks.length

            if (qtfBreaks === thisGrid.maxwCols.length) {
                for (let i = 0; i <= qtfBreaks; i++) {
                    if (thisGrid.maxwBreaks[i] >= thisGrid.windowW) {
                        removeGridClass(item);
                        item.classList.add('--col' + thisGrid.maxwCols[i]);
                    }
                    if (thisGrid.windowW > thisGrid.maxwBreaks[0]) {
                        removeGridClass(item);
                        item.classList.add('--col' + thisGrid.initCols);
                    }
                }
            } else {
                console.log('Erro na construção do grid responsivo');
            }
        });
    }

    window.addEventListener('load', initResponsiveGrids);
    window.addEventListener('resize', initResponsiveGrids);
}
