<?php
    
    require __DIR__ . '/../bootstrap.php';
    use PAW\core\Router;
    $ruta = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    if (!empty($logger)) {
        //$logger->debug("Creando instancia de PAW/Router");
    }
    $router = new Router();

    $router->cargarRuta("/","PageController@index");
    $router->cargarRuta("/home","PageController@index");
    $router->cargarRuta("/especialidades","PageController@especialidades");
    $router->cargarRuta("/estudios","PageController@estudios");
    $router->cargarRuta("/institucional","PageController@institucional");
    $router->cargarRuta("/noticias","PageController@noticias");
    $router->cargarRuta("/nuevoTurno","PageController@nuevoTurno");
    $router->cargarRuta("/obrasSociales","PageController@obrasSociales");
    $router->cargarRuta("/obras_sociales","PageController@obrasSociales");
    $router->cargarRuta("/turnos","PageController@turnos");
    $router->cargarRuta("/login","PageController@login");
    $router->cargarRuta("/logout","PageController@logout");
    if (!empty($logger)) {
        //$logger->debug("Rutas creadas");
        //$logger->debug("Redireccionando a: " . $ruta);
    }
    try{
        $router->redireccionar($ruta, $logger);
    }
    catch (Exception $e){
        echo "500";
    }
?>