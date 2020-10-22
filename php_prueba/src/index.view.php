<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<!-- 
			$titlo -> será pasado a la vista por el index.php
		-->
		<h1><?= $titulo ?></h1>	

		<!--
			Menú de Navegación dinámico
		-->
		<nav>
			<ul>
				<?php foreach ($menu as $item) : ?>
					<li><a href="<?= $item['href']?>"> <?= $item['name'] ?> </a></li>
				<?php endforeach ; ?>
			</ul>
		</nav>
	</header>
	
</body>
</html>