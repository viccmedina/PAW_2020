<?php



//autoload es un mecanismo de php que me dice que cargue de forma automatica todos los objetos y clases que haya en este proyecto.

//
require __DIR__. "/../vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Paw\Core\Router;

$log = new Logger('mvc-app');//ese nombre es un identificador ya que monolog nos permite tener varios logger para difertes cosas.
$log->pushHandler(new StreamHandler(__DIR__.'/../logs/app.log',Logger::DEBUG));


$whoops = new \Whoops\Run;
$whoops ->pushHandler(new \Whoops\Handler\PrettyPageHandler);//esto significa que puedo generar mi propio handler.

$whoops->register();// con esto le estoy indicando que sobre escrib las funciones de errores de php y que pase el a manejar los errores
//throw new \Exception("Mensaje de error para desarrollador");


$router = new Router;
$router->loadRoutes('/','PageController@index');
$router->loadRoutes('/turnos','PageController@turnos');
$router->loadRoutes('/estudios','PageController@estudios');
$router->loadRoutes('/obras_sociales','PageController@obras_sociales');
$router->loadRoutes('/especialidades','PageController@especialidades');
$router->loadRoutes('/noticias','PageController@noticias');
$router->loadRoutes('/institucional','PageController@institucional');
$router->loadRoutes('not_found','ErrorController@notFound');
$router->loadRoutes('internal_error','ErrorController@nInternalError');