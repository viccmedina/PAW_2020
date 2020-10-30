<?php

namespace Paw\Core;

use Paw\Core\Exceptions\RouteNotFoundException;
use Paw\Core\Request;
use Exception;

class Router{ 

    public array $routes = [
        "GET"=>[],
        "POST"=>[],
    ];

    public function __construct(){
        $this->get($this->notFound,'ErrorController@notFound');
        $this->get($this->internalError,'ErrorController@internalError');
    }


    public function loadRouter($path, $action, $method = "GET"){

        $this->routes[$method][$path] = $action;

    }

    public function get($path, $action){
        $this->loadRouter($path, $action, "GET");
    }

    public function post($path, $action){
        $this->loadRouter($path, $action, "POST"); 
    }



    public function exists($path, $method){
        return array_key_exists($path,$this->routes[$method]);
    }

    

    public function getController($path, $http_method){
        if(! $this->exists($path, $http_method)){
            throw new RouteNotFoundException("No existe ruta para este path");
        }
        
        return explode('@' , $this->routes[$http_method][$path]);
    }


    public string $notFound = 'not_found';
    public string $internalError = 'internal_error';


    public function call($controller, $method){
        $controller_name = "Paw\\App\\Controllers\\{$controller}" ;
        $objController = new $controller_name ;
        $objController->$method();
    }



    public function direct(Request $request){

        try{
            list($path, $http_method) = $request->route();
            list($controller, $method) = $this->getController($path,$http_method);
            $this->call($controller,$method);
        }catch(RouteNotFoundException $e){
            list($controller, $method) = $this->getController($this->notFound,"GET");
            $this->call($controller,$method);
        }catch(Exception $e){
            list($controller, $method) = $this->getController($this->internalError,"GET");
            $this->call($controller,$method);

        }
         
    }


}