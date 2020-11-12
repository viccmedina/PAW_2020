<?php



//autoload es un mecanismo de php que me dice que cargue de forma automatica todos los objetos y clases que haya en este proyecto.

//
require __DIR__. "/../vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Dotenv\Dotenv;


use Paw\Core\Request;
use Paw\Core\Router;
use Paw\Core\Config;
use \Paw\Core\Database\ConnectionBuilder;





$dotenv = Dotenv::createUnsafeImmutable(__DIR__.'/../');
$dotenv->load();//luego de que se ejecuto esto las variables de .env pasan a estar disponibles

$config = new Config;

        //getenv("LOG_LEVEL");
//$_ENV["LOG_ENV"];//puede ser menos eficiente que la funcion.
$log = new Logger('mvc-app');//ese nombre es un identificador ya que monolog nos permite tener varios logger para difertes cosas.
$handler = new StreamHandler($config->get("LOG_PATH"));
$handler->setLevel($config->get("LOG_LEVEL"));
$log->pushHandler($handler);



//conexion a la base de datos
$connectionBuilder = new ConnectionBuilder();
$connectionBuilder->setLogger($log);
$connection = $connectionBuilder->make($config);



$whoops = new \Whoops\Run;
$whoops ->pushHandler(new \Whoops\Handler\PrettyPageHandler);//esto significa que puedo generar mi propio handler.

$whoops->register();// con esto le estoy indicando que sobre escrib las funciones de errores de php y que pase el a manejar los errores
//throw new \Exception("Mensaje de error para desarrollador");


$request = new Request;


$router = new Router;

$router->setLogger($log);
$router->get('/','PageController@index');
$router->get('/turnos','TurnoController@turnos');
$router->get('/nuevo_turno','TurnoController@nuevo_turno');
$router->post('/nuevo_turno','TurnoController@nuevo_turno_proccess');
$router->get('/estudios','PageController@estudios');
$router->get('/obras_sociales','PageController@obras_sociales');
$router->get('/especialidades','PageController@especialidades');
$router->get('/noticias','PageController@noticias');
$router->get('/institucional','PageController@institucional');
$router->get('/socios','SocioController@index');
$router->get('/socio','SocioController@get');
$router->get('/socio/edit','SocioController@edit');
$router->post('/Socio/edit','SocioController@set');