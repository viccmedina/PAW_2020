<?php
namespace  Paw\Core;


use Exception;
use Paw\Core\Request;
use http\Encoding\Stream\Debrotli;
use Paw\Core\Exceptions\RouteNotFoundException;
use Paw\Core\Traits\loggable;

class Router{


    use loggable; //cuando esta aca adentro php lo interpreta como un trait router va a incorporar todas las propiedades de este.

    public array $routes = [
        "GET" =>[],
        "POSt"=>[],
    ];

    public  string  $notFound = 'not_found';
    public string  $internalError = 'internal_error';


    public function __construct(){
        $this->get($this->notFound,'ErrorController@notFound');
        $this->get($this->internalError,'ErrorController@nInternalError');
    }


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

        if (!$this->exist($path,$http_method)){
            var_dump($path);
            throw new RouteNotFoundException("la ruta no existe para este path"); // corta el hilo de ejecucion, es como hacer un return o un exit
        }

        return explode('@',$this->routes[$http_method][$path]);
    }

    public function call($controller, $method){

        $controller_name = "Paw\\App\\Controllers\\{$controller}";
        $objController = new $controller_name;
        $objController->$method();

    }


    public function  direct(Request $request){


        try {


            list($path, $http_method) = $request->route();

            //toda esta parte me parecio medio confusa. pero entendi masomenos.

            list($controller, $method) = $this->getController($path,$http_method);//explode('@',$this->routes[$method][$path]);

            $this->logger
                ->info(
                    "Status Code: 200",
                    [
                        "Path"=>$path,
                        "Method" =>$http_method,
                    ]
                );

        }catch ( RouteNotFoundException $e){
            list($controller, $method) = $this->getController($this->notFound,"GET");//explode('@',$this->routes[$method][$path]);

            $this->logger->debug("Status Code : 404 - Route not found", ["ERROR"=>$e]);
        }catch ( Exception $e){
            list($controller, $method) = $this->getController($this->internalError,"GET");//explode('@',$this->routes[$method][$path]);


            $this->logger->error("Status Code : 500 - Internal Server Error", ["ERROR"=>$e]);
        } finally {
            $this->call($controller,$method);
        }
    }
}