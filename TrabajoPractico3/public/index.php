<?php
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

    if($path == '/'){
        $titulo = htmlspecialchars($_GET['nombre'] ?? "PAW");
        require __DIR__ . '/../src/index.view.php';
    }else if ($path == '/services'){
        $title = "Servicios";
        $main = "Página de servicios";
        require __DIR__ . '/../src/services.view.php';
    }else{
        //Debería generarse un codigo 404
        echo "Page Not Found";
    }

  
?>