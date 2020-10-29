<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;

class PageController extends Controller{

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

    public function contact($procesado = false){
        $title = "Contacto";
        $main = "Formas de contacto";
        require $this->viewsDir . 'contact.view.php';
    }

    public function contactProcess(){
        $formulario = $_POST;   
        //Hacer algo con estos datos.
        $this->contact(true);
    }
}