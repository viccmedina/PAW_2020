<?php

$menu = [
	[
		"href" => "/home",
		"name" => "Home", 
	],
	[
		"href" => "/turnos",
		"name" => "Turnos", 
	],
	[
		"href" => "/estudios",
		"name" => "Estudios", 
	]
	,
	[
		"href" => "/obrasSociales",
		"name" => "Obras Sociales", 
	],
	[
		"href" => "/especialidades",
		"name" => "Especialidaes", 
	]
	,
	[
		"href" => "/noticias",
		"name" => "Noticias", 
	],
	[
		"href" => "/institucional",
		"name" => "Intitucional", 
	],
];

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
if ($path == '/'){
	$titulo = "Enterprise Name";
	$nav = home;
	require __DIR__ . '/../src/index-view.php';
}
if ($path == '/home'){
	$titulo = "Enterprise Name";
	$nav = home;
	require __DIR__ . '/../src/index-view.php';
}else if ($path == '/turnos'){
	$titulo = "Enterprise Name";
	$nav = Turnos;
	require __DIR__ . '/../src/index-view-turnos.php';
}else {
	echo "Page not found beibii";
}

