<?php

namespace  Paw\Core;
use Paw\Core\Exceptions\RouteNotFoundException;


class Router {

  public array $routes = [
    "GET" => [],
    "POST" => [],

  ];

  public function loadRoutes($path, $action, $method="GET"){
    $this->routes[$method][$path] = $action;
  }

  public function get($path, $action){
    $this->loadRoutes($path, $action, "GET");
  }

  public function post($path, $action){
    $this->loadRoutes($path, $action, "POST");
  }

  public function exists($path, $method){
    return array_key_exists($path, $this->routes[$method]);
  }

  public function getController($path, $http_method="GET"){
    return explode('@', $this->routes[$http_method][$path]);
  }

  public function direct($path, $http_method="GET"){
    if (!$this->exists($path, $http_method)){
      throw new RouteNotFoundException("No exsiste ruta para este Path");
    }

    //list($controlador, $method) = explode('@', $this->routes[$http_method][$path]);
    list($controlador, $method) = $this->getController($path, $http_method);
    $controller_name = "Paw\\App\\Controllers\\{$controller}";
    $objController = new $controller_name;
    $objController->$method;


  }
}


 ?>
