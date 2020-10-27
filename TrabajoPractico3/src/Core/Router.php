<?php
namespace  Paw\Core;


use Paw\Core\Exceptions\RouteNotFoundException;

class Router{


    public array $routes;

    public function loadRoutes($path, $action){
        $this->routes[$path]= $action;
    }

    public function  direct($path){

        if (!array_key_exists($path,$this->routes)){
            throw new RouteNotFoundException("la ruta no existe para este path"); // corta el hilo de ejecucion, es como hacer un return o un exit
        }


        //toda esta parte me parecio medio confusa. pero entendi masomenos.

        list($controller, $method) = explode('@',$this->routes[$path]);

        $controller_name = "Paw\\App\\Controllers\\{$controller}";
        $objController = new $controller_name;
        $objController->$method();

    }
}