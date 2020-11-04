<?php

namespace Paw\App\Controllers;

use Paw\App\Models\turno;
use Paw\Core\Controller;

class TurnoController extends Controller{


    public ?string $modelname = turno::class;



    public function turnos(){
        require $this->viewDir.'turnos.view.php';
    }
    public function nuevo_turno($procesado = false){


        require $this->viewDir.'nuevo_turno.view.php';
    }

    public function nuevo_turno_proccess(){
        global $request;
        $apenomb= $request->get('apenomb') ;
        $email = $request->get('email');
        $tel = $request->get('tel');
        $fecha_nac = $request->get('fecha_nac');
        $date = $request->get('date');
        $edad= $request->get('edad');
        $hora_turno = $request->get('hora_turno');


        // cuando paso a hacer esto estoy asignando a formulario todos los datos de la persona que llegaron por la vista.
        $this->nuevo_turno(true);

    }





}
