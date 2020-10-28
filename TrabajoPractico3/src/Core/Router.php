<?php
namespace  Paw\Core;


use http\Encoding\Stream\Debrotli;
use Paw\Core\Exceptions\RouteNotFoundException;

class Router{


    public array $routes = [
        "GET" =>[],
        "POSt"=>[],
    ];



    public function loadRoutes($path, $action, $method = "GET"){
        $this->routes[$method][$path]= $action;
    }

    public function get($path,$action){
        $this->loadRoutes($path,$action,"GET");
    }

    public function post($path,$action){
        $this->loadRoutes($path,$action,"POST");
    }

    public function exist ($path,$method){
        return array_key_exists($path,$this->routes[$method]);

    }

    public function getController($path,$http_method){
        return explode('@',$this->routes[$http_method][$path]);
    }

    public function  direct($path, $http_method = 'GET'){

        if (!$this->exist($path,$http_method)){
            throw new RouteNotFoundException("la ruta no existe para este path"); // corta el hilo de ejecucion, es como hacer un return o un exit
        }


        //toda esta parte me parecio medio confusa. pero entendi masomenos.

        list($controller, $method) = $this->getController($path,$http_method);//explode('@',$this->routes[$method][$path]);

        $controller_name = "Paw\\App\\Controllers\\{$controller}";
        $objController = new $controller_name;
        $objController->$method();

    }
}