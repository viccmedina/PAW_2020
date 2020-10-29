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

    public function select($table, $params = [])
    {
        $where = "1 = 1";
        if(isset($params['id']))
            $where = "id = :id";
        $query = "select * from {$table} where {$where}";
        $sentencia = $this->pdo->prepare($query);
        if(isset($params['id']))
            $sentencia->bindValue(":id", $params['id']); //Evita problemas de seguridad
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