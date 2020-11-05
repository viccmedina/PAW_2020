<?php

namespace Paw\App\Controllers;

use DateTime;
use Paw\App\Models\turno;
use Paw\Core\Controller;

class TurnoController extends Controller{


    public ?string $modelname = turno::class;



    public function turnos(){
        require $this->viewDir.'turnos.view.php';
    }



    public function nuevo_turno($procesado = false, $hayErrores = false, $errores=null){ //le paso estos valores a nuevo_truno pq si no no se pueden usar en la vista.


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



       $errores = [];
       $hayErrores = false;

       d($_FILES);
        if($apenomb= null){
            $errores['apenomb'] = "Nombre y apellido son requeridos en este formulario";
            $hayErrores=true;
        }
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errores['email']= "el email ingresado es incorrecto.";
            $hayErrores=true;
        }
        $is_tel = preg_match('/^[0-9]{7-10}$/',$tel); //no me esta tomando la expresion regular del numero de telefono
        if ($is_tel = false){
            $errores['tel']= "el telefono ingresado es incorrecto";
            $hayErrores=true;
        }

        if ($this->validateDate($fecha_nac) ==false ){
            $errores['fecha_nac'] = "La fecha ingresada no es una fecha correcta";
            $hayErrores=true;
        }

        if ($this->validateDate($date) == false){
            $errores['date'] = "la fecha de turno ingresada no es una fecha correcta";
            $hayErrores=true;
        }


        if (is_numeric($edad)==false){
            $errores['edad'] = "la edad ingresada no es valida";
            $hayErrores=true;
        }

        if ($this->validateDate($hora_turno,'H:i') == false){ //puede que la h tenga que ir en mayuscula
            $errores['hora_turno'] = "la hora ingresada no es valida";
            $hayErrores=true;
        }


        //funcion para determinar si es una imagen

        if (isset($_FILES['archivosubido'])){
            if ($_FILES['archivosubido']['type'] != "image/jpeg"){
                $errores['Estudio'] = "la imagen de estudio subida no es correcta.";
                $hayErrores=true;
            }
        }



        // cuando paso a hacer esto estoy asignando a formulario todos los datos que llegaron por la vista.
        $this->nuevo_turno(true,$hayErrores,$errores);

    }


    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }


}
