<?php

require __DIR__ . '/../src/bootstrap.php';

use Paw\Core\Router;
use Paw\Core\Exceptions\RouteNotFoundException;



$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$log -> info("Peticion a:  {$path}");

$router = new Router;

$router->loadRouter('/','PageController@index');
$router->loadRouter('/home','PageController@index');
$router->loadRouter('/turnos','PageController@turnos');
$router->loadRouter('not_found','ErrorController@notFound');
$router->loadRouter('internal_error','ErrorController@internalError');
try{
	$router->direct($path);	
}catch(RouteNotFoundException $e){ 
	$router->direct('not_found');
	$log->info("Status code 404 - Route not found", ["Path" -> $path]);
}catch(Exception $e){
	$router->direct('internal_error');
	$log->error("Status code: 500 - Internal server Error", ["Error" -> $e]);
}


