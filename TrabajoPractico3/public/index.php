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
            "href" => "/servicios",
            "name" => "Servicios"
        ],
        [
            "href" => "/contactos",
            "name" => "Contactos"
        ],
    ];

    $titulo = htmlspecialchars($_GET['nombre'] ?? "PAW");

    require __DIR__ . '/../src/index.view.php'; 
?>