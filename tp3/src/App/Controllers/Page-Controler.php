<?php

namespace Paw\App\Controllers;
 

class PageController{

    public string $viewsDir;

    public function __construct(){
        $this->viewsDir = __DIR__"/../../";
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


    public function index{
        $titulo = "Enterprise Name";
        $nav = "Home";
        require $this->viewsDir. 'index-view.php';
    }


    public function turnos{
        $titulo = "Enterprise Name";
        $nav = "Turnos";
        require $this->viewsDir. 'index-view-turnos.php';
    }
}