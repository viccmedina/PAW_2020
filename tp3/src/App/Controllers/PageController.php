<?php

namespace Paw\App\Controllers;
 

class PageController{

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


    public function index(){
        $titulo = "Enterprise Name";
        $nav = "Home";
        print_r($titulo);
        require $this->viewsDir. 'index-view.php';
    }


    public function turnos($procesado = false){
        $titulo = "Enterprise Name";
        $nav = "Turnos";
        
        require $this->viewsDir. 'index-view-turnos.php';
    }


    public function noticias(){
        $titulo = "Enterprise Name";
        $nav = "Turnos";
        
        require $this->viewsDir. 'noticias-view.php';
    }


    public function turnosProccess(){
        $formulario = $_POST;
        
        $this->turnos(true);
    }
     
    public function notFoundPage(){
        http_response_code(404);
        $titulo = "Enterprise Name";
        $nav = "PAGE NOT FOUND";
        require $this->viewsDir. 'not-found-view.php';
    }

}