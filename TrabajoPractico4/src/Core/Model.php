<?php


namespace Paw\Core;

use Paw\Core\Database\QueryBuilder;

use Paw\Core\Traits\loggable;

class Model{
    use loggable;

    public function setQueryBuilder(QueryBuilder  $qb){
        $this->queryBuilder = $qb;

    }
}