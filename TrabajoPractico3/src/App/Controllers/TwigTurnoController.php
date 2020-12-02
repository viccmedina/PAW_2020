<?php

namespace Paw\App\Controllers;

use DateTime;
use Paw\App\Models\turno;
use Paw\Core\Controller;

class TwigTurnoController extends TurnoController{



    private function twigLoader($file, $array) {
        $loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/../views');
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));
        echo $twig->render($file, $array);
    }

    public function turnos(){
        $titulo = "Turnos";
        $descripcion = "Pagina para consultar turnos del sitio";
        $menu = $this->menu;
        $this->twigLoader('turnos.view.twig', compact("menu", "titulo"));
    }



    public function nuevo_turno($procesado = false, $hayErrores = false, $errores=null){ //le paso estos valores a nuevo_truno pq si no no se pueden usar en la vista.
        $titulo = "Nuevo Turno";
        $descripcion = "Pagina para solicitar turnos del sitio";
        $menu = $this->menu;
        $this->twigLoader('nuevo_turno.view.twig', compact("menu", "titulo", "procesado", "hayErrores", "errores"));
    }





    public function nuevo_turno_proccess(){

       global $request;

       ($_POST);

       $apenomb= $request->get('apenomb') ;
       $email = $request->get('email');
       $tel = $request->get('tel');
       $fecha_nac = $request->get('fecha_nac');
       $fecha_turno = $request->get('fecha_turno');
       //$edad= $request->get('edad');
       $hora_turno = $request->get('hora_turno');
       $matricula = $request->get('matricula');



        //aca trato de hacer lo que dijo tomi, poner las validaciones en el modelo.
        //deberia tener cada if en una funcion de validacion? seria como estar repartiendo todos los if.
        $validacionTurno = new turno();
        $validacionTurno->setApenomb($request->get('apenomb'));
        $validacionTurno->setEmail($request->get('email'));
        $validacionTurno->setTel($request->get('tel'));
        $validacionTurno->setDate($request->get('fecha_turno'));
        //$validacionTurno->setEdad($request->get('edad'));
        $validacionTurno->setHoraTurno($request->get('hora_turno'));
        $validacionTurno->setMatricula($request->get('matricula'));

        if($fecha_nac != ""){
            $validacionTurno->insert();
        }else{
            $errores['fecha_nac'] = "La fecha de nacimiento es invalida";
            $hayErrores=true;
        }




        $errores = [];
       $hayErrores = false;






       //todas estas validaciones deberian ir en el modelo.

        if($matricula== null){
            $errores['matricula'] = "La matricula es requerida en este formulario";
            $hayErrores=true;
        }
        if ($validacionTurno->validarMatricula($matricula) == false ){
            $errores['matricula'] = "La matricula ingresada es incorrecta";
            $hayErrores=true;
        }

        if ($validacionTurno->validarSocioMail($email) == false ){
            $errores['socio'] = "El socio ingresado es incorrecto";
            $hayErrores=true;
        }


        if($apenomb== null){
            $errores['apenomb'] = "Nombre y apellido son requeridos en este formulario";
            $hayErrores=true;
        }
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errores['email']= "el email ingresado es incorrecto.";
            $hayErrores=true;
        }


        $is_tel = preg_match("#[0-9]+#", $tel); //no me esta tomando la expresion regular del numero de telefono
        if ($is_tel == false){
            $errores['tel']= "el telefono ingresado es incorrecto";
            $hayErrores=true;
        }

        if ($this->validateDate($fecha_nac) ==false ){
            $errores['fecha_nac'] = "La fecha ingresada no es una fecha correcta";
            $hayErrores=true;
        }

        if ($this->validateDate($fecha_turno) == false){
            $errores['date'] = "la fecha de turno ingresada no es una fecha correcta";
            $hayErrores=true;
        }


        // if (is_numeric($edad)==false){
        //     $errores['edad'] = "la edad ingresada no es valida";
        //     $hayErrores=true;
        // }

        if ($this->validateDate($hora_turno,'H:i') == false){ //puede que la h tenga que ir en mayuscula
            $errores['hora_turno'] = "la hora ingresada no es valida";
            $hayErrores=true;
        }


        //funcion para determinar si es una imagen

        // if (isset($_FILES['archivosubido'])){
        //     if ($_FILES['archivosubido']['type'] != "image/jpeg"){
        //         $errores['Estudio'] = "la imagen de estudio subida no es correcta.";
        //         $hayErrores=true;
        //     }
        // }



        // cuando paso a hacer esto estoy asignando a formulario todos los datos que llegaron por la vista.
        $this->nuevo_turno(true,$hayErrores,$errores);

    }


    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }


}
