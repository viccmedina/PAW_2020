<?php

require __DIR__ . '/../vendor/autoload.php';

use Paw\App\Controllers\PageController;
use Monolog\Logger;

use Monolog\Handler\StreamHandler;

$log = new Logger('mvc-app');
$log ->pushHandler(new StreamHandler(__DIR__ . '/../log/app.log', Logger::DEBUG));

$whoops = new \Whoops\Run;

$whoops -> pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops -> register();

$controller = new PageController;


$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$log -> info("Peticion a:  {$path}");


if ($path == '/'){
	$controller-> index();
	$log-> info("Respuesta existosa 200OK");
}
if ($path == '/home'){
	$controller-> index();
	$log-> info("Respuesta existosa 200OK");
}else if ($path == '/turnos'){
	$controller -> turnos();
	$log-> info("Respuesta existosa 200OK");
}else {
	$controller -> notFoundPage();
	$log-> info("Path not found 404");
}

