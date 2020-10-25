<?php

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

if ($path == "/") {
    require __DIR__ . '/../src/index.view.php';
}elseif ($path == "/turnos") {
    require __DIR__ . '/../src/turnos.view.php';
}else{
    echo "page not found";
}