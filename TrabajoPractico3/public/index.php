<?php



//autoload es un mecanismo de php que me dice que cargue de forma automatica todos los objetos y clases que haya en este proyecto.

//
require __DIR__. "/../vendor/autoload.php";

use Paw\App\Controllers\ErrorController;
use Paw\App\Controllers\PageController;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('mvc-app');//ese nombre es un identificador ya que monolog nos permite tener varios logger para difertes cosas.
$log->pushHandler(new StreamHandler(__DIR__.'/../logs/app.log',Logger::DEBUG));


$whoops = new \Whoops\Run;
$whoops ->pushHandler(new \Whoops\Handler\PrettyPageHandler);//esto significa que puedo generar mi propio handler.

$whoops->register();// con esto le estoy indicando que sobre escrib las funciones de errores de php y que pase el a manejar los errores
//throw new \Exception("Mensaje de error para desarrollador");


/*La variable $_SERVER me da mucha data sobre lo que llega del lado del cliente.*/
/*echo "<pre>";
print_r($_SERVER);*/ 

//esto del path lo empiezo a escribir en un php que sera route.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$log->info("Peticion a: {$path}"); //estoy loggeando algo con respecto al path que recibi de parte del usuario.


$controller = new PageController;

//throw new \Exception("Mensaje de error para desarrollador"); es un error que se puede mostrar. ponerle cosas a esto requeriria escribir mas codigo
//la libreria que agregamos(whoops) nos permite hacer esto de forma un poco mas automatizada

if ($path == "/") {
   $controller->index();

   $log->info('reespuesta exitosa: 200');
}elseif ($path == "/turnos") {
    $controller->turnos();
    $log->info('reespuesta exitosa: 200');
}elseif ($path == "/estudios") {
    $controller->estudios();
    $log->info('reespuesta exitosa: 200');
}elseif ($path == "/obras_sociales") {
    $controller->obrasSociales();
    $log->info('reespuesta exitosa: 200');
}elseif ($path == "/especialidades") {
    $controller->especialidades();
    $log->info('reespuesta exitosa: 200');
}elseif ($path == "/noticias") {
    $controller->noticias();
    $log->info('reespuesta exitosa: 200');
}elseif ($path == "/institucional") {
    $controller->institucional();
    $log->info('reespuesta exitosa: 200');
}else{
    $controllerError  = new ErrorController;
    $controllerError->notfound();
    $log->info('Path not found: 404');
}