<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<!-- 
			$main -> será pasado a la vista por el index.php
		-->
		<h1><?= $main ?></h1>	

		<!--
			Menú de Navegación dinámico
		-->
		<?php
			require 'parts/nav.view.php';
		?>
	</header>
	
</body>
</html>