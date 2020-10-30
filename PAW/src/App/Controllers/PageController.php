<?php

namespace Paw\App\Controllers;

class PageController {
	/*
	Clase encargada de administrar los paths
	de las secciones de la página..
	*/

	public string $viewDir;

	// constructor de la clase
	public function __construct(){
		$this->viewDir = __DIR__ . '/../views/';
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

	public function index(){
		/*
			Método que nos devolverá el path del Index.
		*/
		$titulo = "Inicio";
		require $this->viewDir . "index.view.php";
	}

	public function about(){
		/*
			Método que nos devolverá el path de la sección
			Página Institucional.
		*/

		$titulo = "Sobre Nosotros";
		$main = "Página Institucional";
		require $this->viewDir . 'about.view.php';
	}

	public function contact($procesado=false) {
		/*
			Método que nos delvolverá el path de la sección
			Contactos.
		*/

		$titulo = "Contactos";
		$main = "Formas de Contactos ";
		require $this->viewDir . 'contact.view.php';
	}

	public function services(){
		/*
			Método que nos delverá el path de la sección
			Servicios.
		*/

		$main = "Página de Servicios";
		require $this->viewDir . 'services.view.php';
	}

	public function contactProcess(){
		$formulario = $_POST;
		$this->contact(true);
	}
}

?>
