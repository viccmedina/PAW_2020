<?php

    require __DIR__ . '/../vendor/autoload.php';

    use Paw\App\Controllers\PageController;
    use Paw\App\Controllers\ErrorController;

    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    $controller = new PageController;

    if($path == '/'){
        $controller->index();
    }else if ($path == '/services'){
        $controller->services();
    }else if ($path == '/about'){
        $controller->about();
    }else if ($path == '/contacts'){
        $controller->about();
    }
    else{
        $constroller = new ErrorController;
        $constroller->notFound();
    }
?>