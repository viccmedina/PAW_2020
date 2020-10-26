<?php

    require __DIR__ . '/../vendor/autoload.php';

    $menu = 
    [
        [
            "href" => "/",
            "name" => "Home"
        ],
        [
            "href" => "/about",
            "name" => "Quienes Somos"
        ],
        [
            "href" => "/services",
            "name" => "Servicios"
        ],
        [
            "href" => "/contacts",
            "name" => "Contactos"
        ],
    ];

    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    #$whoops = new \Whoops\Run;
    #$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    #$whoops->register(); 

    #throw new \Exception("Mensaje de error para el desarrollador");

    if($path == '/'){
        $titulo = htmlspecialchars($_GET['nombre'] ?? "PAW");
        require __DIR__ . '/../src/index.view.php';
    }else if ($path == '/services'){
        $title = "Servicios";
        $main = "Página de servicios";
        require __DIR__ . '/../src/services.view.php';
    }else if ($path == '/about'){
        $title = "Sobre Nosotros";
        $main = "Página Institucional";
        require __DIR__ . '/../src/services.view.php';
    }else if ($path == '/contacts'){
        $title = "Contacto";
        $main = "Formas de contacto";
        require __DIR__ . '/../src/contact.view.php';
    }
    else{
        //Debería generarse un codigo 404
        http_response_code(404);
        require __DIR__ . '/../src/not-found.view.php';
    }

  
?>