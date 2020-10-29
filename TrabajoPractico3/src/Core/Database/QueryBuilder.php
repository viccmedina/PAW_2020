<?php

namespace Paw\Core\Database;

use Paw\Core\Traits\Loggable;
use PDO;

class QueryBuilder
{
    use Loggable;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function select($table)
    {
        $query = "select * from {$table}";
        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC); //Dice como va a retornar pdo el array de respuesta
        //Assoc en cada indice del array pone los nombres de las columnas
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }


}