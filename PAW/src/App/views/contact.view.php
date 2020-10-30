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
		<?php
			require 'parts/nav.view.php';
		?>
		<?php  if ($procesado) : ?>
		<div class="notificacion">
			Su petición fue procesada con éxito <br>
			Nos pondremos en contacto a la brevedad.
		</div>
	<?php endif; ?>
	</header>
	<main>
		<?= $main ?>
			<form action="/contact" method="POST">
				<label for="subject"><strong>Asunto (*)</strong></label>
				<input type="text" name="subject">
				<label for="email"><strong>Correo (*)</strong></label>
				<input type="email" name="email">
				<label for="description"><strong>Descripción (*)</strong></label>
				<textarea name="description" cols="30" rows="10"></textarea>
				<input type="submit" name="submit" value="Enviar">
			</form>
	</main>
</body>
</html>
