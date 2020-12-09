<?php


namespace Paw\App\Models;

use Paw\Core\Model;
use Exception;
use Paw\Core\Database\QueryBuilder;

use Paw\Core\Exceptions\invalidValueFormatException;

class turno extends Model{




    public $table = 'turno';


    public $apenomb;
    public $email ;
    public $matricula;
    public $tel;
    public $fecha_nac;
    public $hora;
    public $hora_turno;
    public $minuto;
    public $medico;

    public $idMed;
    public $idSoc;

    /**
     * @return mixed
     */
    public function getApenomb()
    {
        return $this->apenomb;
    }

    public function getAll() {
        return $this->queryBuilder->getAllTurnos();
    }

    public function insert(){
        $columns = array();
        $valores = array();
        
        array_push($columns,'dia','hora', 'minuto','socio','medico');
        array_push($valores,$this->date, $this->hora_turno, $this->minuto, $this->email, $this->matricula);
        $valor = array();
        $soc = $this->queryBuilder->selectSocio($this->email);
        
        $medic = $this->queryBuilder->selectMedico($this->matricula);
        $this->queryBuilder->insert($this->table,$columns,$valores);
        $this->logger->debug($this->date. $this->hora_turno. $this->email. $this->matricula);

    }

        // // titulo', 'string',['limit'=>60])
        // ->addColumn('descripcion','string',['null'=>true])
        // ->addColumn('socio','integer')
        // ->addColumn('medico','integer')
        // ->addColumn('created', 'timestamp', ['default'=> 'CURRENT_TIMESTAMP'])
        // ->addForeignKey('socio','socio','id')
        // ->addForeignKey('medico','medico','id')

    /**
     * @param mixed $apenomb
     */
    public function setApenomb($apenomb): void
    {
        $this->apenomb = $apenomb;
    }

    public function validarApenomb(){

    }

    public function validarMatricula($matricula){
        $validar = $this->queryBuilder->validarMatricula($matricula);
        if (empty($validar)){
            return false;
        }else{
            return true;
        }
    }

    public function validarSocioMail($mail){
        $validarsoc = $this->queryBuilder->validarMatricula($mail);
        
        if (empty($validarsoc)){
            return false;
        }else{
            return true;
        }
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function validarEmail(){

    }


    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    public function validarTel(){

    }

    /**
     * @return mixed
     */
    public function getFechaNac()
    {
        return $this->fecha_nac;
    }



    /**
     * @param mixed $fecha_nac
     */
    public function setFechaNac($fecha_nac): void
    {
        $this->fecha_nac = $fecha_nac;
    }



    public function validarFechaNac(){

    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $hora
     */
    public function setDate($hora): void
    {
        $this->date = $hora;
    }


    public function validarDate(){

    }
    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }




    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    public function validarEdad(){

    }

    /**
     * @return mixed
     */
    public function getHoraTurno()
    {
        return $this->hora_turno;
    }


    /**
     * @param mixed $hora_turno
     */
    public function setHoraTurno($hora_turno): void
    {
        $this->hora_turno = $hora_turno;
        $this->hora = $hora_turno;
    }

    public function validarHoraTurno(){

    }

    public function setMinuto($minuto) {
        $this->minuto = $minuto;
    }


    public static function getJson($connection, $logger) {
        $json = "{ 'especialistas': [";
        $qb = new QueryBuilder($connection, $logger);
        $aux = new medico();
        $aux->setQueryBuilder($qb);
        $medicos = $aux->getAll();
        foreach ($medicos as $medico) {
            $medico->setQueryBuilder($qb);
            $json .= "{ \"matricula\": \"{$medico->fields['matricula']}\",";
            $json .= " \"nombre\": \"{$medico->fields['nombre']}\", ";
            $json .= "\"apellido\": \"{$medico->fields['apellido']}\", 
            \"diasQueAtiende\": [";
            $flag = false;
            foreach ($medico->getDias() as $dia) {
                $json .= "\"{$dia['dia']}\",";
                $flag = true;
            }
            if ($flag){
                $json  = substr($json, 0, strlen($json) - 1); # sin la ultima coma
            }
                // \"Lunes\",
                // \"Martes\",
                // \"Jueves\"
            $json .= "],
            \"horarioInicio\": {
                \"horas\": {$medico->fields['horaInicio']},
                \"minutos\": 0
            },
            \"horarioFinalizacion\": {
                \"horas\": {$medico->fields['horaFin']},
                \"minutos\": 0
            },
            \"duracionTurno\": 60,
            \"turnosTomados\": [";
            $conTurnos = false;
            foreach ($medico->getTurnosTomados() as $dia) {
                $json .= "{\"dia\": \"{$dia['dia']}\",";
                $json .= "\"horas\": \"{$dia['hora']}\",";
                $json .= "\"minutos\": \"{$dia['minuto']}\"},";
                $conTurnos = true;
            }
            if ($conTurnos) {
                $json  = substr($json, 0, strlen($json) - 1); # sin la ultima coma
            }
                // {
                //     \"dia\": \"Lunes\",
                //     \"horas\": 9,
                //     \"minutos\": 0
                // },
                // {
                //     \"dia\": \"Martes\",
                //     \"horas\": 10,
                //     \"minutos\": 0
                // },
                // {
                //     \"dia\": \"Martes\",
                //     \"horas\": 11,
                //     \"minutos\": 0
                // },
                // {
                //     \"dia\": \"Jueves\",
                //     \"horas\": 9,
                //     \"minutos\": 0
                // },
                // {
                //     \"dia\": \"Jueves\",
                //     \"horas\": 10,
                //     \"minutos\": 0
                // },
                // {
                //     \"dia\": \"Jueves\",
                //     \"horas\": 11,
                //     \"minutos\": 0
                // }
            $json .=" ]
        },";
        }
        $json  = substr($json, 0, strlen($json) - 1); # sin la ultima coma
        
        // "matricula": "3737",
        // "nombre": "Tekito",
        // "apellido": "Lakarie",
        $json .= "]}";
        return $json;
    }



}