<?php


namespace Paw\Core;

use Paw\Core\Database\QueryBuilder;

use Paw\Core\Traits\loggable;
use Paw\Core\Traits\connectable;
use Exception;

class Model{
    use loggable;
    use connectable;

    private $table;
    private $id;
    public $queryBuilder;

    public function init() {
        $this->queryBuilder = new QueryBuilder($this->connection,$this->logger);
    }

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