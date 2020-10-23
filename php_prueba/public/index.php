<?php

require __DIR__ . '/../vendor/autoload.php';
/*
$whoops = new \Whoops\Run;
$whoops -> pushHandler(new \Whoops\Handler\PrettyPageHandler)
$whoops -> register();

//throw new Exception("Mensaje de error para el desarrollador");
*/

/*
Con el attr htmlspecialchars sanitizamos los datos que vienen por medio de la petición
GET. De esta manera, si nos mandan un link no se inserta como tal sino como un string.

$_GET[] -> nos permite tomar los datos que se mandan por las request. En este caso un GET.
*/
$titulo = htmlspecialchars($_GET["nombre"] ?? "PAW");


/*
Generamo el contenido del menú dinámico.
Será un array de array (arrayset) donde definimos cada sección de nuestro sitio.
Para esto indicamos la url de la sección y su nombre.
*/

$menu = [
	[
		"href" => "/about",
		"name" => "Quienes Somos",
	],
	[
		"href" => "/",
		"name" => "Home"
	],
	[
		"href" => "/services",
		"name" => "Servicio"
	],

	[
		"href" => "/contact",
		"name" => "Contacto"
	]
];

/*
	Para poder redireccionar al usuario hacia la sección que desea, debemos analizar
	la variable $_SERVER['REQUEST_URI'] y parsearla con la función provista por PHP.
	Le especificamos a dicha función que parte de la URL queremos que nos devuelva por
	medio de la constante PHP_URL_PATH.
*/

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
if ($path == '/') {
	/*
		Invocamos a la vista con la palabra reservada.
		Primero declarar todas las variables, luego invocar.
		__DIR__ es una constante mágica que nos da el directorio del archivo
		que se esta ejecutando.
	*/
	$titulo = "Inicio"; 
	require __DIR__ . '/../src/index.view.php';

} else if ($path == '/services') {
	$main = "Página de Servicios";
	require __DIR__ . '/../src/services.view.php';
}  else if ($path == '/about') {
	$titulo = "Sobre Nosotros";
	$main = "Página Institucional";
	require __DIR__ . '/../src/about.view.php';
} else if ($path == '/contact') {
	$titulo = "Contactos";
	$main = "Formas de Contactos ";
	require __DIR__ . '/../src/contact.view.php';
} else {
	// deberíamos generar una vista para el 404 not found
	http_response_code(404);
	require __DIR__ . '/../src/not_found.view.php';
}




?>