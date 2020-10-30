<?php

namespace PAW\app\ViewController;

class PageController {
    public String $viewDir;
    public array $menu;
    public function __construct(){
        $this->viewDir = __DIR__ . "/../../view/";
        $menu = [
            [
                "name" => "",
                "href" => ""
            ]
        ];
    }
    public function index(){
        require $this->viewDir . "home.view.php";
    }
    public function noticias(){
        require $this->viewDir . "noticias.view.php";
    }
    public function especialidades(){
        require $this->viewDir . "especialidades.view.php";
    }
    public function estudios(){
        require $this->viewDir . "estudios.view.php";
    }
    public function institucional(){
        require $this->viewDir . "institucional.view.php";
    }
    public function nuevoTurno(){
        require $this->viewDir . "nuevo_turno.view.php";
    }
    public function obrasSociales(){
        require $this->viewDir . "obras_sociales.view.php";
    }
    public function turnos(){
        require $this->viewDir . "turnos.view.php";
    }
    public function login(){
        require $this->viewDir . "login.php";
    }
    public function logout(){
        require $this->viewDir . "logout.php";
    }
}

?>