<?php
class config {


    private array  $configs;


    public function __construct()
    {
        $this->configs["LOG_LEVEL"] = getenv("LOG_LEVEL","INFO");
        $this->configs["LOG_PATH"] = getenv("LOG_PATH","'/log/app.log'");

    }


    public function get($name){
        return $this->configs[$name] ?? null;
    }
}