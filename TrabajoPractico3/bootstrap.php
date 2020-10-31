<?php
    if(session_id() == ''){
        //session has not started
        session_start();
    }
    
    require __DIR__.'\vendor\autoload.php';
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PAW\core\Config;
    use PAW\core\Request;
    use PAW\core\Router;
    use PAW\core\Database\ConnectionBuilder;

    $request = new Request();
    $config = New Config;
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    $logger = new Logger('main');
    $logger->pushHandler(new StreamHandler($config->get("LOG_PATH"), $config->get("LOG_LEVEL")));
    $router = new Router();

    $router->cargarRuta("/","GET","PageController@index");
    $router->cargarRuta("/home","GET","PageController@index");
    $router->cargarRuta("/especialidades","GET","PageController@especialidades");
    $router->cargarRuta("/estudios","GET","PageController@estudios");
    $router->cargarRuta("/institucional","GET","PageController@institucional");
    $router->cargarRuta("/noticias","GET","PageController@noticias");
    $router->cargarRuta("/nuevoTurno","GET","PageController@nuevoTurno");
    $router->cargarRuta("/obrasSociales","GET","PageController@obrasSociales");
    $router->cargarRuta("/obras_sociales","GET","PageController@obrasSociales");
    $router->cargarRuta("/turnos","GET","PageController@turnos");
    $router->cargarRuta("/login","GET","PageController@login");
    $router->cargarRuta("/logout","GET","PageController@logout");

    $connectionBuilder = New ConnectionBuilder;
    $connection = $connectionBuilder->make($config);
?>