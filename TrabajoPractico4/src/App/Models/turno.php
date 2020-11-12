<?php


namespace Paw\App\Models;

use Paw\Core\Model;
use Exception;

use Paw\Core\Exceptions\invalidValueFormatException;

class turno extends Model{




    public $table = 'turno';


    protected $apenomb;
    protected $email ;
    protected $tel;
    protected $fecha_nac;
    protected $date;
    protected $edad;
    protected $hora_turno;



    /**
     * @return mixed
     */
    public function getApenomb()
    {
        return $this->apenomb;
    }


    /**
     * @param mixed $apenomb
     */
    public function setApenomb($apenomb): void
    {
        $this->apenomb = $apenomb;
    }

    public function validarApenomb(){

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






}