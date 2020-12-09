<?php

namespace Paw\Core\Traits;

trait connectable {

    public $connection;

    public  function  setConnection($connection){
        $this->connection = $connection;
    }

}