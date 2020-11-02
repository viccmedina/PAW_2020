<?php

namespace Paw\Core\Database;

use PDO;
use Monolog\Logger; 


class QueryBuilder{

    public function __construct(PDO $pdo, Logger $logger = null){
        $this->pdo = $pdo;
        $this->logger = $logger;
    }

    public function select($table){
        $query = "select * from {$table};";
        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

    public function insert(){
        
    }

    public function update(){
        
    }

    public function delete(){
        
    }



}