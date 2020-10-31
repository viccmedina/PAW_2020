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
        $this->config['DB_ADAPTER'] = getenv("DB_ADAPTER", "FATAL");
        $this->config['DB_USERNAME'] = getenv("DB_USERNAME", "FATAL");
        $this->config['DB_PASSWORD'] = getenv("DB_PASSWORD", "FATAL");
        $this->config['DB_PORT'] = getenv("DB_PORT", "FATAL");
        $this->config['DB_CHARSET'] = getenv("DB_CHARSET", "FATAL");
        $this->config['DB_NAME'] = getenv("DB_NAME", "FATAL");
        $this->config['DB_HOSTNAME'] = getenv("DB_HOSTNAME", "FATAL");
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