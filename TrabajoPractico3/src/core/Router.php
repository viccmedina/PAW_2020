<?php

namespace PAW\core;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PAW\app\ViewController\PageController;
use Exception;

class Router{

    private array $rutas;

    public function cargarRuta($ruta, $nombre){
        $this->rutas[$ruta] = $nombre;
    }

    public function redireccionar($ruta, Logger $logger = null){
        $logger->debug("Ruta: $ruta");
        if (!array_key_exists($ruta, $this->rutas)){
            //$router = New Router();
            //$router->redireccionar("/");
            throw new Exception();
            return;
        }
        list($controlador, $metodo) = explode("@", $this->rutas[$ruta]);
        $instanciaControlador = new PageController;
        //$instanciaControlador = new $controlador();
        if ($logger){
            $logger->debug("Usando la clase " .$controlador . " metodo " . $metodo);
        }
        $instanciaControlador->$metodo();
    }
}


?>