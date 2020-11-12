<?php


namespace Paw\Core;

use Paw\Core\Model;
use Paw\Core\Database\QueryBuilder;

class Controller{

    public string $viewDir;

    public ?string $modelname = null;

    function __construct(){

        global $connection, $log; // peligroso o confuso.

        $this->viewDir = __DIR__."/../App/views/";
        $this->menu= [
            [
                "href" => "/",
                "name" => "Home",
            ],
            [
                "href" => "/turnos",
                "name" => "Turnos",
            ],
            [
                "href" => "/nuevo_turno",
                "name" => "Nuevo turno",
            ],
            [
                "href" => "/estudios",
                "name" => "Estudios",
            ],
            [
                "href" => "/obras_sociales",
                "name" => "Obras Sociales",
            ],
            [
                "href" => "/especialidades",
                "name" => "Especialidades",
            ],
            [
                "href" => "/noticias",
                "name" => "Noticias",
            ],
            [
                "href" => "/institucional",
                "name" => "Institucional",
            ],
            [
                "href" => "/socios",
                "name" => "Socios",
            ],

        ];




        if(!is_null($this->modelname)){
            $qb = new QueryBuilder($connection,$log);
            $model = new $this->modelname;
            $model->setQueryBuilder($qb);
            $this->setModel($model);
        }

    }

    public function setModel(Model $model){
        $this->model =$model;
    }



}