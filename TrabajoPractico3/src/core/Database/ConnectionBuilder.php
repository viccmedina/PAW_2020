<?php

namespace PAW\core\Database;

use PDO;
use PDOException;
use PAW\core\Config;
//use PAW\core\Traits\Loggable;

class ConnectionBuilder{
    
    public function make(Config $config): PDO{
        try{
            $adapter = $config->get("DB_ADAPTER");
            $hostname = $config->get("DB_HOSTNAME");
            $dbname = $config->get("DB_NAME");
            $port = $config->get("DB_PORT");
            $charset = $config->get("DB_CHARSET");
            return new PDO(
                "{$adapter}:host={$hostname};dbname={$dbname};port{$port};charset={$charset}",
                $config->get("DB_USERNAME"),
                $config->get("DB_PASSWORD"),
                [
                    'options' => [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]
                ]
            );
        }
        catch(PDOException $e){
            //loggear
            die("Error interno - Consulte al administrador");
        }
    }
}

?>