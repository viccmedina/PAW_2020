<?php
namespace Paw\App\Controllers;


class PageController{

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


    //crear un metodo por path que quiero procesar en el controlador que corresponda.

    public function index(){
        require $this->viewDir.'index.view.php';
    }

    
    public function turnos(){
        require $this->viewDir.'turnos.view.php';
    }
    
    public function estudios(){
        require $this->viewDir . 'estudios.view.php';
    }
    
    public function obrasSociales(){
        require $this->viewDir . 'obras_sociales.view.php';
    }
    
    public function especialidades(){
        require $this->viewDir . 'especialidades.view.php';
    }
    
    public function noticias(){
        require $this->viewDir . 'noticias.view.php';
    }

    
    public function institucional(){
        require $this->viewDir . 'institucional.view.php';
    }

}