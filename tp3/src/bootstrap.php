<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Dotenv\Dotenv;

use Paw\Core\Config;
use Paw\Core\Router;
use Paw\Core\Request;
use Paw\Core\Database\ConnectionBuilder;


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

$connectionBuilder = new ConnectionBuilder;
$connectionBuilder->setLogger($log);
$connection = $connectionBuilder->make($config);

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
$router->get('/authors', 'AuthorsController@index');
$router->get('/author', 'AuthorsController@get');
$router->get('/authors/edit', 'AuthorsController@edit');
$router->post('/authors/edit', 'AuthorsController@set');

//Las genero ni bien instancie un router
//$router->get('not_found','ErrorController@notFound');
//$router->get('internal_error','ErrorController@internalError');