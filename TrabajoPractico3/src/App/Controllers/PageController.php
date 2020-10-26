<?php

namespace Paw\App\Controllers;

class PageController{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../../";

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

    public function index(){
        $title = htmlspecialchars($_GET['nombre'] ?? "PAW");
        require $this->viewsDir . 'index.view.php';
    }

    public function services(){
        $title = "Servicios";
        $main = "Página de servicios";
        require $this->viewsDir . 'services.view.php';
    }

    public function about(){
        $title = "Sobre Nosotros";
        $main = "Página Institucional";
        require $this->viewsDir . 'services.view.php';
    }

    public function contact(){
        $title = "Contacto";
        $main = "Formas de contacto";
        require $this->viewsDir . 'contact.view.php';
    }
}