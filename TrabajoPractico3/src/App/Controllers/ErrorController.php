<?php
namespace Paw\App\Controllers;

class ErrorController{

    public string $viewDir;

    function __construct(){

        $this->viewDir = __DIR__."/../views/";
        $this->menu= [
            [
                "href" => "/",
                "name" => "Home",
            ],
            [
                "href" => "/turnos",
                "name" => "Turnos",
            ],
            [
                "href" => "/estudios",
                "name" => "Eestudios",
            ],
            [
                "href" => "/obras_sociales",
                "name" => "Obras Sociales",
            ],
            [
                "href" => "/especialidades",
                "name" => "Especialidades",
            ],
            [
                "href" => "/noticias",
                "name" => "Noticias",
            ],
            [
                "href" => "/institucional",
                "name" => "Institucional",
            ],

        ];
    }


    public function notfound(){
        http_response_code(404);
        require $this->viewDir.'not-found.view.php';
    }

    public function internalError(){
        http_response_code(500);
        require $this->viewDir.'internal-error.view.php';

    }
}