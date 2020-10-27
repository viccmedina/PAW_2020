<?php

require __DIR__ . '/../vendor/autoload.php';

use Paw\App\Controllers\PageController;

$whoops = new \Whoops\Run;

$whoops -> pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops -> register();

$controller = new PageController;


$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);



if ($path == '/'){
	$controller-> index();
}
if ($path == '/home'){
	$controller-> index();
}else if ($path == '/turnos'){
	$controller -> turnos();
}else {
	$controller -> notFoundPage();
}

