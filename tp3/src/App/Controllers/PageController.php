<?php

namespace Paw\App\Controllers;
 
use Paw\Core\Controller;


class PageController extends Controller{


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