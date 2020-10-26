<?php

namespace PAW\core;

use PAW\ViewController;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Router{

    private array $rutas;

    public function cargarRuta($ruta, $nombre){
        $this->rutas[$ruta] = $nombre;
    }

    public function redireccionar($ruta, Logger $logger = null){
        $logger->debug("Ruta: $ruta");
        if (!array_key_exists($ruta, $this->rutas)){
            $logger->debug("Ruta: $ruta no existe");
            return;
        }
        list($controlador, $metodo) = explode("@", $this->rutas[$ruta]);
        $instanciaControlador = new $controlador;
        if ($logger){
            $logger->debug("Usando la clase " .$instanciaControlador . " metodo " . $metodo);
        }
        $instanciaControlador->$metodo();
    }
}


?>