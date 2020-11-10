<?php
namespace Paw\App\Controllers;


use Paw\App\Models\socio;
use Paw\App\Models\socioCollection;
use Paw\Core\Controller;
use Kint\Kint;

class PageController extends Controller {

    //crear un metodo por path que quiero procesar en el controlador que corresponda.

    public function index(){
        $titulo = "Home";
        $descripcion = "Pagina principal del sitio";
        require $this->viewDir.'index.view.php';
    }

    //lo pase todo a turnoController
    /*public function turnos(){
        require $this->viewDir.'turnos.view.php';
    }
    public function nuevo_turno($procesado = false){


        require $this->viewDir.'nuevo_turno.view.php';
    }

    public function nuevo_turno_proccess(){
        $formulario = $_POST; // cuando paso a hacer esto estoy asignando a formulario todos los datos de la persona que llegaron por la vista.
        $this->nuevo_turno(true);

    }*/

    public function estudios(){
        $titulo = "Estudios";
        $descripcion = "Pagina de Estudios del sitio";
        require $this->viewDir . 'estudios.view.php';
    }
    
    public function obras_sociales(){
        $titulo = "Obras Sociales";
        $descripcion = "Pagina de Obras Sociales del sitio";
        require $this->viewDir . 'obras_sociales.view.php';
    }
    
    public function especialidades(){
        $titulo = "Especialidades";
        $descripcion = "Pagina de Especialidades del sitio";
        require $this->viewDir . 'especialidades.view.php';
    }
    
    public function noticias(){
        $titulo = "Noticias";
        $descripcion = "Pagina de Noticias del sitio";
        require $this->viewDir . 'noticias.view.php';
    }

    public function institucional(){
        $titulo = "Institucional";
        $descripcion = "Pagina Institucional del sitio";
        require $this->viewDir . 'institucional.view.php';
    }

}