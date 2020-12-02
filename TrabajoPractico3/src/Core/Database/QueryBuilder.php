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


    public function selectDiaPorMedico ($matricula){
        
        $query = "SELECT * FROM diamedicos WHERE matricula=:medico";
        $sentencia = $this->pdo->prepare($query);

        $sentencia->bindValue(":medico",$matricula);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

    public function selectTurnos($idMedico) {
        $query = "SELECT * FROM turno WHERE id=:medico";
        $sentencia = $this->pdo->prepare($query);

        $sentencia->bindValue(":medico",$idMedico);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    public function getAllTurnos() {
        $query = "SELECT T.*, CONCAT(M.nombre, ' ', M.apellido) as medico FROM turno T JOIN medico M ON T.medico=M.id";
        $sentencia = $this->pdo->prepare($query);

        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    public function selectSocio ($param){

        $where = "email=$param";

        
        $query = "SELECT id FROM socio WHERE email = $:email; ";
        $sentencia = $this->pdo->prepare($query);
        $sentencia->bindValue(":email",$param);

        //echo("qeri {$query} ---");
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

    public function selectMedico ($param){

        $where = "matricula=:matricula";
        
        $query = "SELECT id FROM medico WHERE {$where}";
        $sentencia = $this->pdo->prepare($query);
        $sentencia->bindValue(":matricula",$param);

        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }



    public function validarMatricula($matricula){
        $query = "select * from medico where matricula = :matricula";
        $this->logger->debug($query);
        $sentencia = $this->pdo->prepare($query);
        $sentencia->bindValue(":matricula",$matricula);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    public function validarSocio($mail){
        $query = "select * from socio where email = :mail";
        $this->logger->debug($query);
        $sentencia = $this->pdo->prepare($query);
        $sentencia->bindValue(":matricula",$mail);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }


    public function insert($table, $column, $valor){
        $this->logger->debug("Llegué a query builder");
        $query = "insert into $table (";
        foreach($column as $c ){
            $query .=  $c . ",";
        }
        $query  = substr($query,0,strlen($query) -1); # sin la ultima coma
        $query .= ") VALUES (";
        for ($i = 0; $i < count($valor); $i++) {
            $query .= " :valor{$i} ,";
        }
        $query  = substr($query, 0, strlen($query) - 1); # sin la ultima coma
        $query .= ")";
        $sentencia = $this->pdo->prepare($query);
        $c = 0;
        for ($i = 0; $i < count($valor); $i++) {
            $anotacion = ":valor".$i;
            $sentencia->bindValue($anotacion, $valor[$i]);
            $this->logger->debug(":valor".$i."  -> ".$valor[$i]);
        }
        // foreach ($valor as $v) {
        //     $c += 1;
        //     $anotacion = ":valor".$c;
        //     $sentencia->bindValue($anotacion,$v);
        // }
        //$query .= ") VALUES ('$valor[0]','$valor[1]',".$valor[2]['id'].",".$valor[3]['id'].");";
        // foreach($valor as $va ){
            
        //     $query .= "'". $va ."'," ;
        // }
        //'$valor[0]','$valor[1]',$valor[2],$valor[3]);
        //print_r($query);
        //$query  = substr($query,0,strlen($query) -1); # sin la ultima coma
        //$query .= ");";
        $this->logger->debug($query);
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