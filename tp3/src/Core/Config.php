<?php

namespace Paw\Core;

class Config{

    private array $configs;

    public function joinPaths(){
        foreach (func_get_args() as $arg){
            if ($arg != ''){
                $paths[] = $arg;
            }
        }
        return preg_replace('#/+#', '/', join('/', $paths));
    }


    public function __construct(){
        $this->configs["LOG_LEVEL"] = getenv("LOG_LEVEL", "INFO");
        $path = getenv("LOG_PATH", "/logs/app.log");
        $this->configs["LOG_PATH"] = $this->joinPaths('..', $path);

        //database config
        $this->configs['DB_ADAPTER'] = getenv('DB_ADAPTER') ?? 'mysql';
        $this->configs['DB_HOSTNAME'] = getenv('DB_HOSTNAME') ?? '127.0.0.1';
        $this->configs['DB_DBNAME'] = getenv('DB_DBNAME') ?? 'siven';
        $this->configs['DB_USERNAME'] = getenv('DB_USERNAME') ??'root';
        $this->configs['DB_PASSWORD'] = getenv('DB_PASSWORD' ) ?? 'masterkey';
        $this->configs['DB_PORT'] = getenv('DB_PORT') ?? '3306';
        $this->configs['DB_CHARSET']= getenv('DB_CHARSET') ?? 'utf8'; 
        
    } 

    public function get($name)  {
        return $this->configs[$name] ?? null ;  
    } 
}
