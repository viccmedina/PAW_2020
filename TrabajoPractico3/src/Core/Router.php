<?php

namespace Paw\Core;

use Paw\Core\Exceptions\RouteNotFoundException;
use Paw\Core\Request;
use Exception;
use Paw\Core\Traits\Loggable;

class Router{

    use Loggable;

    public array $routes = [
        "GET" => [],
        "POST" => [],
    ];

    public string $notFound = 'not_found';
    public string $internalError = 'internal_error';

    public function __construct()
    {
        $this->get($this->notFound, 'ErrorController@notFound');
        $this->get($this->internalError, 'ErrorController@internalError');
    }

    public function loadRoutes($path, $action, $http_method = "GET")
    {
        $this->routes[$http_method][$path] = $action;
    }

    public function get($path, $action){
        $this->loadRoutes($path, $action, "GET");
    }

    public function post($path, $action){
        $this->loadRoutes($path, $action, "POST");
    }

    public function exists($path, $http_method){
        return array_key_exists($path, $this->routes[$http_method]);
    }

    public function getController($path, $http_method){
        if(!$this->exists($path, $http_method))
            throw new RouteNotFoundException("No existe ruta para ese Path");
        return explode('@', $this->routes[$http_method][$path]);
    }

    public function call($controller, $method)
    {
        $controller_name = "Paw\\App\\Controllers\\{$controller}";
        $objController = new $controller_name;
        $objController->$method();
    }

    public function direct(Request $request)
    {
        try
        {
            list($path, $http_method) = $request->route();
            list($controller, $method) = $this->getController($path, $http_method);
            throw new \Exception("asd");
            $this->logger
                ->debug(
                    "Status Code: 200",
                    [
                        "Path" => $path,
                        "Method" => $http_method,
                    ]
                );
        } catch(RouteNotFoundException $e){
            list($controller, $method) = $this->getController($this->notFound, "GET");
            $this->logger->info("Status Code: 400 - Route Not Found", ["Error" => $e]);
        }
        catch(Exception $e){
            list($controller, $method) = $this->getController($this->internalError, "GET");
            
            $this->logger->error("Status Code: 500 - Internal Server Error", ["Error" => $e]);
        } finally{
            $this->call($controller, $method);
        }
    }

}