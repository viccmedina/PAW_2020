<?php

namespace Paw\App\Models;
use Paw\Core\Model;
use Paw\Core\Exception\InvalidValueFormatException;
use Exception; 


class Autor extends Model{
    public $table = 'autor';

    public $fields =  [
        "nombre" => null,
        "email" => null,
        "id" => null,
    ];

    public function setID($id){
        $this->fields["id"] = $id;
    }

    public function setNombre(string $nombre){
        
        if(strlen($nombre) > 60){
            throw new InvalidValueFormatException    ("El nombre del autor no debe ser mayor a 60 caracteres");
        }
        $this->fields["nombre"] = $nombre ;

    }


    public function setEmail(string $mail){
        
        if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
            throw new InvalidValueFormatException ("El email ingresado es incorrecto");
        }
        $this->fields["email"] = $mail ;

    }

    public function set(array $values){
        foreach(array_keys($this->fields) as $field){
            if(!isset($values[$field])){
                continue;
            }

            $method = "set" . ucfirst($field); 
            $this->$method($values[$field]);

        }
    }


    public function load($id){
        $params = ["id" => $id];
        $record = current($this->queryBuilder->select($this->table,$params));
        $this->set($record); 
    }
}