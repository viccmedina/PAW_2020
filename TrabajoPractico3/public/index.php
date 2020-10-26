<?php

    require __DIR__ . '/../src/bootstrap.php';

    use Paw\App\Controllers\PageController;
    use Paw\App\Controllers\ErrorController;
    $controller = new PageController;

    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    $log->info("Petición a: {$path}");

    if($path == '/'){
        $controller->index();
        $log->info("Respuesta exitosa: 200");
    }else if ($path == '/services'){
        $controller->services();
        $log->info("Respuesta exitosa: 200");
    }else if ($path == '/about'){
        $controller->about();
        $log->info("Respuesta exitosa: 200");
    }else if ($path == '/contacts'){
        $controller->about();
        $log->info("Respuesta exitosa: 200");
    }
    else{
        $constroller = new ErrorController;
        $constroller->notFound();
        $log->info("Path not found: 404");
    }
?>