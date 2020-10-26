<?php



//autoload es un mecanismo de php que me dice que cargue de forma automatica todos los objetos y clases que haya en este proyecto.

//
require __DIR__. "/../src/bootstrap.php";

use Paw\App\Controllers\ErrorController;
use Paw\App\Controllers\PageController;

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