<?php

namespace PAW\core;

use Dotenv\Dotenv;

class Config{

    private array $config;

    public function __construct(){
        $dotenv = Dotenv::createUnsafeImmutable(__DIR__ . "/../../");
        $dotenv->load();
        $this->config['LOG_LEVEL'] = getenv("LOG_LEVEL", "FATAL");
        $path = getenv("LOG_PATH", "/log/app.log");
        $this->config['LOG_PATH'] = $this->joinPaths("..", $path);
    }

    public function joinPaths(){
        $args = func_get_args();
        $paths = array();
        foreach ($args as $arg) {
            $paths = array_merge($paths, (array)$arg);
        }

        $paths = array_map(create_function('$p', 'return trim($p, "/");'), $paths);
        $paths = array_filter($paths);
        return join('/', $paths);
    }
    public function get($key){
        if (!array_key_exists($key, $this->config)){
            return null;
        }
        return $this->config[$key];
    }
}


?>