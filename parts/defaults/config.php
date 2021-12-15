<?php
    $title = 'Laures Ronak | Boilerplate';
    $pagina = explode('/', $_SERVER['REQUEST_URI']);
    $classOnBody = 'p-inner';

    switch ($pagina[1]) {
        // Boilerplate
        case 'laures':
        case 'ronak':
        case 'lauresronak':
        case 'docs':
        case 'documentation':
            $file = '_boilerplate/sections.php';
            $title_page = 'Documentação - '.$title;
            break;

        // Home
        case '' :
        case 'home' :
            $file = 'page_home.php';
            $title_page = $title;
            $classOnBody = 'p-home';
            break;

        // 404
        default :
            header("HTTP/1.0 404 Not Found");
            $file = 'page_404.php';
            $title_page = 'Página não encontrada - '.$title;
            break;
    }
?>
