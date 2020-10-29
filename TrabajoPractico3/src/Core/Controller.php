<?php

namespace Paw\Core;

use Paw\Core\Model;
use Paw\Core\Database\QueryBuilder;

class Controller
{
    public string $viewsDir;

    public ?string $modelName = null;
    
    public function __construct()
    {

        global $connection, $log; //Esta sería la peor manera de resolverlo

        $this->viewsDir = __DIR__ . "/../App/views/";

        $this->menu = 
        [
            [
                "href" => "/",
                "name" => "Home"
            ],
            [
                "href" => "/about",
                "name" => "Quienes Somos"
            ],
            [
                "href" => "/services",
                "name" => "Servicios"
            ],
            [
                "href" => "/contact",
                "name" => "Contactos"
            ],
            [
                "href" => "/authors",
                "name" => "Autores"
            ],
        ];

        if (!is_null($this->modelName)){
            $qb = new QueryBuilder($connection);
            $qb->setLogger($log);
            $model = new $this->modelName;
            $model->setQueryBuilder($qb);
            $this->setModel($model);
        }
    }

    public function setModel(Model $model)
    {
        $this->model = $model;
    }
}