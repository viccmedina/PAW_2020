<?php



//autoload es un mecanismo de php que me dice que cargue de forma automatica todos los objetos y clases que haya en este proyecto.

//
require __DIR__ . "/../src/bootstrap.php";

/*use Paw\App\Controllers\ErrorController;
use Paw\App\Controllers\PageController;*/
//con este router voy a generalizar el control de la rutas.
//use Paw\Core\Exceptions\RouteNotFoundException;

/*La variable $_SERVER me da mucha data sobre lo que llega del lado del cliente.*/
/*echo "<pre>";
print_r($_SERVER);*/ 

//esto del path lo empiezo a escribir en un php que sera route.
//$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);// este path es el que me pasa el cliente desde el navegador
//$method = $_SERVER['REQUEST_METHOD']; //esperamos que venga get o post

//$log->info("Peticion a: {$method}{$path}"); //estoy loggeando algo con respecto al path que recibi de parte del usuario.

$router->direct($request);
/*try {
    $router->direct($request);

    $log->info("Status code : 200 - {$path}");
}catch (RouteNotFoundException $e) {
    $router->direct('not_found');
    $log->info('Status Code: 404 - Route not found',["Path"=>$path]); //un 404 puede ser problema del usuario
}catch ( Exception $e){
    $router->direct('internal_error');
    $log->error('Status Code: 500 - internal server error',["Error"=>$e]); // un erorr 500 siempre es problema nuestro
}*/



/*$controller = new PageController;

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
}*/