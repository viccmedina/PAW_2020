<?php

namespace Paw\Core\Database;

use PDO;

use Monolog\logger;

class QueryBuilder{

    public function __construct(PDO $pdo, Logger $logger = null)
    {
        $this->pdo = $pdo;
        $this->logger = $logger;

    }


    public function select ($table,$params= []){



        $where = "1=1";

        if (isset($params['id'])){
            $where= 'id = :id';
        }
        $query = "SELECT * FROM {$table} WHERE {$where}";
        $sentencia = $this->pdo->prepare($query);

        if (isset($params['id'])){
            $sentencia->bindValue(":id",$params['id']);
        }
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

    public function insert($table, $column, $valor){
        $query = "insert into $table (";
        foreach($column as $c ){
            $query .=  $c . ",";
        }
        $query  = substr($query,0,strlen($query) -1); # sin la ultima coma

        $query .= ") VALUES (" ;
        foreach($valor as $v ){
            $query .= "'". $v ."'," ;
        }

        $query  = substr($query,0,strlen($query) -1); # sin la ultima coma
        $query .= ");";
        $this->logger->debug($query);
        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
    }


    public function update(){

    }


    public function delete(){

    }

    //queda para despues
    public function getColumnsNames($table){
        $query = "select column_name from information_schema.columns where table_name = '{$table}'";
        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}