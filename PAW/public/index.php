<?php

require __DIR__ . '/../vendor/autoload.php';

use Paw\App\Controllers\PageController;

use Paw\App\Controllers\ErrorController;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//throw new Exception("Mensaje de error para el desarrollador");


/*
Con el attr htmlspecialchars sanitizamos los datos que vienen por medio de la petición
GET. De esta manera, si nos mandan un link no se inserta como tal sino como un string.

$_GET[] -> nos permite tomar los datos que se mandan por las request. En este caso un GET.
*/
$titulo = htmlspecialchars($_GET["nombre"] ?? "PAW");

$controller = new PageController;





/*
	Para poder redireccionar al usuario hacia la sección que desea, debemos analizar
	la variable $_SERVER['REQUEST_URI'] y parsearla con la función provista por PHP.
	Le especificamos a dicha función que parte de la URL queremos que nos devuelva por
	medio de la constante PHP_URL_PATH.
*/

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if ($path == '/') {

	$controller->index();

} else if ($path == '/services') {
	
	$controller->services();

}  else if ($path == '/about') {

	$controller->about();

} else if ($path == '/contact') {

	$controller->contact();

} else {
	// deberíamos generar una vista para el 404 not found
	$controller = new ErrorController;
	$controller->notFound();
}

?>
