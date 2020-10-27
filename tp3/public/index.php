<?php

require __DIR__ . '/../vendor/autoload.php';

use Paw\App\Controllers\PageController;

$whoops = new \Whoops\Run;

$whoops -> pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops -> register();

$controller = new PageController();


$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);



if ($path == '/'){
	$controler-> index();
}
if ($path == '/home'){
	$controler-> index();
}else if ($path == '/turnos'){
	$controler -> turnos();
}else {
	http_response_code(404);
	$titulo = "Enterprise Name";
	$nav = "PAGE NOT FOUND";
	require __DIR__ . '/../src/not-found-view.php';
}

