<?php


namespace Paw\Core;

use Paw\Core\Database\QueryBuilder;

use Paw\Core\Traits\loggable;

class Model{
    use loggable;

    private $table;
    private $id;
    private $queryBuilder;

    public function setQueryBuilder(QueryBuilder  $qb){
        $this->queryBuilder = $qb;

    }

    public function save() {
        $datos = get_object_vars($this);
        $existe = false;
        if ($this->id) {
            $existe = true;
            $query = "SELECT * FROM {$this->table} WHERE ID=:id";
            $sentencia = $this->pdo->prepare($query);
        }
        if ($existe) {
            //insert
        } else {
            //update
        }
        foreach ($datos as $key => $val) {
            
        }
    }

}