<?php

namespace Paw\Core;

use Paw\Core\Model;
use Paw\Core\Database\QueryBuilder;


class Controller {

    public string $viewsDir;
    public ?string $modelName = null;

    public function __construct(){

        global $connection,$log;

        $this->viewsDir = __DIR__ . "/../App/views/";
        $this->menu = [
            [
                "href" => "/home",
                "name" => "Home", 
            ],
            [
                "href" => "/turnos",
                "name" => "Turnos", 
            ],
            [
                "href" => "/estudios",
                "name" => "Estudios", 
            ],
            [
                "href" => "/obrasSociales",
                "name" => "Obras Sociales", 
            ],
            [
                "href" => "/especialidades",
                "name" => "Especialidaes", 
            ]
            ,
            [
                "href" => "/noticias",
                "name" => "Noticias", 
            ],
            [
                "href" => "/institucional",
                "name" => "Intitucional", 
            ],
            [
                "href" => "/authors",
                "name" => "Autores", 
            ],
        ];

        if(!is_null($this->modelName)){
            $qb = new QueryBuilder($connection,$log);
            $model = new $this->modelName;
            $model->setQueryBuilder($qb);
            $this->setModel($model);
        }
    }


    public function setModel(Model $model){
        
        $this->model = $model;
    }
}