<?php

namespace Paw\App\Controllers;
 

class ErrorController{

    public string $viewsDir;

    public function __construct(){
        $this->viewsDir = __DIR__ . "/../views/";
        $this->menu = [
            [
                "href" => "/home",
                "name" => "Home", 
            ],
            [
                "href" => "/turnos",
                "name" => "Turnos", 
            ],
            [
                "href" => "/estudios",
                "name" => "Estudios", 
            ]
            ,
            [
                "href" => "/obrasSociales",
                "name" => "Obras Sociales", 
            ],
            [
                "href" => "/especialidades",
                "name" => "Especialidaes", 
            ]
            ,
            [
                "href" => "/noticias",
                "name" => "Noticias", 
            ],
            [
                "href" => "/institucional",
                "name" => "Intitucional", 
            ],
        ];
    }


    

    public function notFound(){
        http_response_code(404);
        $titulo = "Enterprise Name";
        $nav = "PAGE NOT FOUND";
        require $this->viewsDir . 'not-found-view.php';
    }

    public function internalError(){
        http_response_code(500);
        $titulo = "Enterprise Name";
        $nav = "PAGE NOT FOUND";
        require $this->viewsDir . 'internal-error-view.php';
    }

}