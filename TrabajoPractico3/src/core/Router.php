<?php

namespace PAW\core;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PAW\app\ViewController\PageController;
use Exception;
use PAW\core\Exception\PageNotFoundException;

class Router{

    private array $rutas;

    public function __construct(){
        $rutas = [
            "GET" => [],
            "POST" => [],
            "DELETE" => [],
            "PUT" => []
        ];
    }

    public function cargarRuta($ruta, $metodo, $nombre){
        $this->rutas[$metodo][$ruta] = $nombre;
    }

    public function existe($request){
        return array_key_exists($request->uri(), $this->rutas[$request->method()]);
    }

    public function obtenerControlador($request){
        $path = $request->uri();
        if (! $this->existe($request)){
            throw new PageNotFoundException();
        }
        return explode("@", $this->rutas[$request->method()][$path]);
    }

    public function call($controlador, $metodo, $logger){
        if ($logger){
            $logger->debug("Usando la clase " .$controlador . " metodo " . $metodo);
        }
        //$instanciaControlador = New $controlador;
        $instanciaControlador = New PageController();
        $instanciaControlador->$metodo();
    }

    public function redireccionar($request, Logger $logger = null){
        try{
            $ruta = $request->uri();
            $metodo = $request->method();
            $logger->debug("Ruta: $ruta, metodo: $metodo");
            list($controlador, $metodo) = $this->obtenerControlador($request);
            $this->call($controlador, $metodo, $logger);
        }
        catch(PageNotFoundException $e){
            $logger->error("404",["404" => $e]);
            $this->call("PageController", "notFound", $logger);
        }
        catch(Exception $e){
            $logger->error("500",["500" => $e]);
            $this->call("PageController", "internalError", $logger);
        }
    }
}


?>