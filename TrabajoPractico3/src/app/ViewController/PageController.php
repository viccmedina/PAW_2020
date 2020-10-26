<?php

namespace PAW\app\ViewController;

class PageController {
    public function index(){
        require "home.php";
    }
    public function noticias(){
        require "noticias.php";
    }
    public function especialidades(){
        require "especialidades.php";
    }
    public function estudios(){
        require "estudios.php";
    }
    public function institucional(){
        require "institucional.php";
    }
    public function nuevoTurno(){
        require "nuevo_turno.php";
    }
    public function obrasSociales(){
        require "obras_sociales.php";
    }
    public function turnos(){
        require "turnos.php";
    }
}

?>