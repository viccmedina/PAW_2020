<?php

    require __DIR__.'/vendor/autoload.php';
    session_start();
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PAW\app\ViewController\Import;
    use PAW\core\Router;

    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    $ruta = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    
    $logger = new Logger('main');
    $logger->pushHandler(new StreamHandler(__DIR__ . '/logs/app.log', Logger::DEBUG));

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