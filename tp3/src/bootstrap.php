<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Paw\Core\Router;
use Monolog\Handler\StreamHandler;

$log = new Logger('mvc-app');
$log ->pushHandler(new StreamHandler(__DIR__ . '/../log/app.log', Logger::DEBUG));

$whoops = new \Whoops\Run;

$whoops -> pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops -> register();

$router = new Router;
$router->get('/','PageController@index');
$router->get('/home','PageController@index');
$router->post('/turnos','PageController@turnosProccess');
$router->get('/turnos','PageController@turnos');
$router->get('not_found','ErrorController@notFound');
$router->get('internal_error','ErrorController@internalError');