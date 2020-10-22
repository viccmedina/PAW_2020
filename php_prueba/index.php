<?php

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
	]
];


// invocamos a la vista con la palabra reservada
// primero declarar todas las variables, luego invocar
require 'index.view.php';

?>