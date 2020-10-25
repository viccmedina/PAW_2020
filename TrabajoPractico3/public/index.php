<?php



//autoload es un mecanismo de php que me dice que cargue de forma automatica todos los objetos y clases que haya en este proyecto.

//
require __DIR__. "/../vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops ->pushHandler(new \Whoops\Handler\PrettyPageHandler);//esto significa que puedo generar mi propio handler.

$whoops->register();// con esto le estoy indicando que sobre escrib las funciones de errores de php y que pase el a manejar los errores
//throw new \Exception("Mensaje de error para desarrollador"); 


/*esto seria un nav generado de forma dinamica, este nav que es una especie de lista sera pasado a
  la vista y en la vista este objeto sera recorrido listando en un LI de la lista cada uno de estos elementos.*/





$nav = [
    [
        "href" => "/index.view.php",
        "name" => "Home",
    ],
    [
        "href" => "/turnos",
        "name" => "Turnos",
    ],
    [
        "href" => "/estudios.html",
        "name" => "Eestudios",
    ],
    [
        "href" => "/obras_sociales.html",
        "name" => "Obras Sociales",
    ],
    [
        "href" => "/especialidades",
        "name" => "Especialidades",
    ],
    [
        "href" => "/noticias",
        "name" => "Noticias",
    ],
    [
        "href" => "/institucional",
        "name" => "Institucional",
    ],

];


/*La variable $_SERVER me da mucha data sobre lo que llega del lado del cliente.*/
/*echo "<pre>";
print_r($_SERVER);*/ 

//esto del path lo empiezo a escribir en un php que sera route.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//throw new \Exception("Mensaje de error para desarrollador"); es un error que se puede mostrar. ponerle cosas a esto requeriria escribir mas codigo
//la libreria que agregamos(whoops) nos permite hacer esto de forma un poco mas automatizada

if ($path == "/") {
    require __DIR__ . '/../src/index.view.php';
}elseif ($path == "/turnos") {
    require __DIR__ . '/../src/turnos.view.php';
}else{

    http_response_code(404);
    require __DIR__ . '/../src/not-found.view.php';
}