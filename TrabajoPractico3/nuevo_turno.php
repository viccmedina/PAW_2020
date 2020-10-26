<?php

require __DIR__.'/bootstrap.php';
use PAW\app\ViewController\Import;

Import::Header('nuevo_turno/nuevo_turno.css');

?>

	<aside>
		<a href="#"><img src="" alt="Información COVID-19"></a>	
	</aside>

	<main>
			<header>
          		<h1>Nuevo Turno</h1>
      		</header>
			<form method="POST" name="nuevo_turno" autocomplete="on">  
			<fieldset>
				<label for="apenomb">Apellido y Nombre</label><br>
				<input type="text" name="apenomb" required placeholder="Peréz Juan" autofocus tabindex="1"><br>
				<label for="email">Email:</label><br>
				<input type="email" name="email" placeholder="ejemplo@ejemplo.com.ar" tabindex="2"><br>
				<label for="tel">Teléfono Celular:</label><br>
				<input type="tel" name="tel" required placeholder="232315232425" tabindex="3"><br>
				<label for="fecha_nac">Fecha Nacimiento:</label><br>
				<input type="date" name="fecha_nac" tabindex="4"><br>
				<label for="edad">Edad:</label><br>
				<input type="number" name="edad" placeholder="46" tabindex="5">	
			</fieldset>
			<fieldset>
				<label for="fecha_turno">Fecha Turno:</label><br>
				<input type="date" name="fecha_turno" required tabindex="6"><br>
				<label for="hora_turno">Hora Turno:</label><br>
				<input type="time" name="hora_turno" required tabindex="7">	
			</fieldset>
			
			<input type="submit" value="Solicitar">
			<input type="reset" value="Limpiar">
			
		</form>
		

	</main>
<?php
	Import::Footer();
?>