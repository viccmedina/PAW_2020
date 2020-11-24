<?php


namespace Paw\App\Models;

use Paw\Core\Model;
use Exception;
use Paw\Core\Database\QueryBuilder;

use Paw\Core\Exceptions\invalidValueFormatException;

class turno extends Model{




    public $table = 'turno';


    protected $apenomb;
    protected $email ;
    protected $matricula;
    protected $tel;
    protected $fecha_nac;
    protected $date;
    protected $hora_turno;

    public $idMed;
    public $idSoc;

    /**
     * @return mixed
     */
    public function getApenomb()
    {
        return $this->apenomb;
    }


    public function insert(){
        global $connection,$log;
        $qb = new QueryBuilder($connection,$log);
        $columns = array();
        $valores = array();
        
        array_push($columns,'dia','hora','socio','medico');
        array_push($valores,$this->date, $this->hora_turno, $this->email, 1);
        $valor = array();
        //array_push($valor,$this->apenomb,$this->email, $this->socio,$this->medico);
        $soc = $qb->selectSocio($this->email);
        
        $medic = $qb->selectMedico($this->matricula);
        $qb->insert($this->table,$columns,$valores);
        $log->debug($this->date. $this->hora_turno. $this->email. $this->matricula);
        //array_push($valor,$this->apenomb,$this->email,$soc[0], $medic[0]);
        // $columns = ['1' => 'apenomb','2' => 'email','3' => 'socio','4'=> 'medico'];
        // $valor = ['1' => $this->apenomb,'2' => $this->email,'3' => $this->socio,'4'=> $this->medico];  
        //$qb->insert($this->table,$columns,$valor);

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
        global $connection,$log;
        $qb = new QueryBuilder($connection,$log);
        $validar = $qb->validarMatricula($matricula);
        if (empty($validar)){
            return false;
        }else{
            return true;
        }
    }

    public function validarSocioMail($mail){
        global $connection,$log;
        $qb = new QueryBuilder($connection,$log);
        $validarsoc = $qb->validarMatricula($mail);
        
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
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
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
    }

    public function validarHoraTurno(){

    }


    public static function getJson() {
        global $connection, $log;
        $json = "{ 'especialistas': [";
        $aux = new medico();
        $qb = new QueryBuilder($connection,$log);
        $aux->setQueryBuilder($qb);
        $medicos = $aux->getAll();
        foreach ($medicos as $medico) {
            $json .= "{ \"matricula\": \"{$medico->fields['matricula']}\",";
            $json .= " \"nombre\": \"{$medico->fields['nombre']}\", ";
            $json .= "\"apellido\": \"Lakarie\",
            \"diasQueAtiende\": [
                \"Lunes\",
                \"Martes\",
                \"Jueves\"
            ],
            \"horarioInicio\": {
                \"horas\": 9,
                \"minutos\": 0
            },
            \"horarioFinalizacion\": {
                \"horas\": 12,
                \"minutos\": 0
            },
            \"duracionTurno\": 20,
            \"turnosTomados\": [
                {
                    \"dia\": \"Lunes\",
                    \"horas\": 9,
                    \"minutos\": 0
                },
                {
                    \"dia\": \"Lunes\",
                    \"horas\": 9,
                    \"minutos\": 20
                },
                {
                    \"dia\": \"Martes\",
                    \"horas\": 10,
                    \"minutos\": 0
                },
                {
                    \"dia\": \"Martes\",
                    \"horas\": 10,
                    \"minutos\": 40
                },
                {
                    \"dia\": \"Martes\",
                    \"horas\": 11,
                    \"minutos\": 20
                },
                {
                    \"dia\": \"Jueves\",
                    \"horas\": 9,
                    \"minutos\": 0
                },
                {
                    \"dia\": \"Jueves\",
                    \"horas\": 9,
                    \"minutos\": 20
                },
                {
                    \"dia\": \"Jueves\",
                    \"horas\": 10,
                    \"minutos\": 40
                },
                {
                    \"dia\": \"Jueves\",
                    \"horas\": 11,
                    \"minutos\": 40
                }
            ]
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