<?php

namespace Paw\App\Controllers;

class ErrorController {
	public string $viewDir;
	
	// constructor de la clase
	public function __construct(){
		$this->viewDir = __DIR__ . '/../';
		/*
			Generamo el contenido del menú dinámico.
			Será un array de array (arrayset) donde definimos cada sección de nuestro sitio.
			Para esto indicamos la url de la sección y su nombre.
		*/
		$this->menu = [
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
	}

	public function notFound(){
		$titulo = "Not Found"; 
		require $this->viewDir . 'not_found.view.php';
	}
}