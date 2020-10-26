<?php

    require __DIR__ . '/../vendor/autoload.php';

    use Paw\App\Controllers\PageController;
    use Paw\App\Controllers\ErrorController;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $controller = new PageController;

    $log = new Logger('mvc-app');
    $log->pushHandler(new StreamHandler(__DIR__. '/../logs/app.log', Logger::DEBUG));

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