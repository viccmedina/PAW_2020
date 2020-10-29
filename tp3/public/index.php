<?php

require __DIR__ . '/../src/bootstrap.php';

use Paw\Core\Router;
use Paw\Core\Exceptions\RouteNotFoundException;



$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$log -> info("Peticion a: {$method}  {$path}");

//$router = new Router;
//$router->get('/','PageController@index');
//$router->get('/home','PageController@index');
//$router->post('/turnos','PageController@turnosProccess');
//$router->get('not_found','ErrorController@notFound');
//$router->get('internal_error','ErrorController@internalError');
try{
	$router->direct($path, $method);	
}catch(RouteNotFoundException $e){ 
	$router->direct('not_found');
	$log->info("Status code 404 - Route not found", ["Path" => $path]);
}catch(Exception $e){
	$router->direct('internal_error');
	$log->error("Status code: 500 - Internal server Error", ["Error" => $e]);
}


