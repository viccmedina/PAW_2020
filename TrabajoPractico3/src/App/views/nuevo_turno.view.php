<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset = " UTF-8 " >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="nuevos turnos"/>
	<link rel="stylesheet" href="/style/style.css">
	<link rel="stylesheet" href="/style/nuevo_turno/nuevo_turno.css">
	<title>Institución</title>
</head>
<body>
	<header>
    	<h1><img src="/imagenes/logo.png" alt="Enterprise Logo" width="500" height="600"> Enterprise Name</h1>
        <?php
        require 'parts/nav.view.php';
        ?>


        <?php if ($procesado):?>
            <div class="notificaicon">

                su peticion fue procesada con exito.<br>
                nos pondremos en contacto con usted a la brevedad.
            </div>
        <?php endif; ?>
    </header>

	<aside>
		<a href="#"><img src="" alt="Información COVID-19"></a>	
	</aside>

	<main>
			<header>
          		<h1>Nuevo Turno</h1>
      		</header>
            <!--para probar lo que se estaba haciendo en el video le tuve que poner get a proposito-->
			<form  action="/nuevo_turno"  method="POST" name="nuevo_turno" autocomplete="on">
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
			
			<input type="submit" value="Solicitar">
			<input type="reset" value="Limpiar">
			
		</form>
		

	</main>
    <footer>
        	<address>
            	<P>Tel : XXX-XXX-XXX </P>

            	<P>Email : <a href="mailto:webmaster@example.com">webmaster@example.com</a>.</P>
            	<P>Calle no se me ocurre al 1983, Luján</P>
        	</address>

        	<ul>
            	<li><a href="https://www.instagram.com">Instagram</a></li>
            	<li><a href="https://www.facebook.com">Facebook</a></li>
            	<li><a href="https://www.whatsapp.com">Whatsapp</a></li>
        	</ul>
    </footer>	
</body>
</html>