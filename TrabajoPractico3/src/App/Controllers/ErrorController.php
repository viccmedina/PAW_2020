<?php

namespace Paw\App\Controllers;

class ErrorController{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../views/";

        $this->menu = 
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
    }

    public function notFound(){
        http_response_code(404);
        require $this->viewsDir . "not-found.view.php";
    }

}