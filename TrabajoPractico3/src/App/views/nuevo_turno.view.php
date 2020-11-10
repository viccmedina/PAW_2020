<!DOCTYPE html>
<html lang="es">
<head>
	<?php require 'parts/head.view.php'?>
  	<link rel="stylesheet" type="text/css" href="/assets/style/nuevo_turno/nuevo_turno.css"/>
</head>
<body>
	<header>
    	<h1><img src="/assets/imagenes/logo.png" alt="Enterprise Logo" width="500" height="600"> Enterprise Name</h1>
        <?php
        require 'parts/nav.view.php';
        ?>



    </header>

	<aside>
		<a href="#"><img src="" alt="Información COVID-19"></a>	
	</aside>

	<main>
			<header>
          		<h1>Nuevo Turno</h1>
                </header>
            <?php if ($hayErrores){?>
                <?php foreach ($errores as $key => $error) :?>
                    <div class="notificacionError"><?= $key?>: <?= $error?> </div>
                <?php endforeach;?>
            <?php }elseif(!$hayErrores && $procesado) {?>
                <div class="notificacion">

                    su peticion fue procesada con exito.<br>
                    nos pondremos en contacto con usted a la brevedad.
                </div>
            <?php }?>

        <!--para probar lo que se estaba haciendo en el video le tuve que poner get a proposito-->
			<form  action="/nuevo_turno"  method="POST" name="nuevo_turno" autocomplete="on" enctype="multipart/form-data">
			<fieldset>
                <!--Para los que son campos requeridos se le puede agregar el asterisco con css: https://stackoverrun.com/es/q/2978327 -->

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
            <fieldset>
                <label for="estudio">Subir estudio:</label>
                <input type="file" accept="image/jpeg" name="archivosubido">
            </fieldset>
			<input type="submit" value="Solicitar">
			<input type="reset" value="Limpiar">
			
		</form>
		

	</main>
    <footer>
        <?php
        require 'parts/footer.view.php';
        ?>
    </footer>	
</body>
</html>