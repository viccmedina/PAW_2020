<?php

    require __DIR__ . '\bootstrap.php';
    use PAW\app\ViewController\Import;
    use PAW\core\Router;
    $ruta = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $logger->debug("Creando instancia de PAW/Router");
    $router = new Router();

    $router->cargarRuta("/","PageController@index");
    $router->cargarRuta("/especialidades","PageController@especialidades");
    $router->cargarRuta("/estudios","PageController@estudios");
    $router->cargarRuta("/institucional","PageController@institucional");
    $router->cargarRuta("/noticias","PageController@noticias");
    $router->cargarRuta("/nuevoTurno","PageController@nuevoTurno");
    $router->cargarRuta("/obrasSociales","PageController@obrasSociales");
    $router->cargarRuta("/turnos","PageController@turnos");

    $logger->debug("Rutas creadas");
    $logger->debug("Redireccionando a: " . $ruta);
    $router->redireccionar($ruta, $logger);
?>