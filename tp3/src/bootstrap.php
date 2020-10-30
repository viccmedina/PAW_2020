<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Dotenv\Dotenv;

use Paw\Core\Config;
use Paw\Core\Router;
use Paw\Core\Request;


$dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
$dotenv ->load();
//print_r(getenv("LOG_LEVEL")); me devulve el DEBUG
$config = new Config;
//getenv("LOG_LEVEL");

//$_ENV["LOG_LEVEL"];


$log = new Logger('mvc-app');

$handler = new StreamHandler($config->get("LOG_PATH"));
$handler->setLevel($config->get("LOG_LEVEL"));
$log->pushHandler($handler);

$whoops = new \Whoops\Run;
$whoops -> pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops -> register();

$request = new Request;

$router = new Router;

$router->setLogger($log);

$router->get('/','PageController@index');
$router->get('/home','PageController@index');
$router->post('/turnos','PageController@turnosProccess');
$router->get('/turnos','PageController@turnos');
$router->get('/noticias','PageController@noticias');

//Las genero ni bien instancie un router
//$router->get('not_found','ErrorController@notFound');
//$router->get('internal_error','ErrorController@internalError');