<?php

namespace Paw\Core;

use Paw\Core\Database\Querybuilder;

use Paw\Core\Traits\Loggable;


class Model{
    use Loggable;

    public function setQueryBuilder(QueryBuilder $queryBuilder){
        $this->queryBuilder = $queryBuilder;
    }
}