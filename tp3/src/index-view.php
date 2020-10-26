<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset = " UTF-8 " >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Enterprise Name - Home</title>
</head>
<body>
	<header>
		<h1><img src="/static/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50"> 
	  		<?=
				$titulo
			?>
		</h1>

      <nav>
        <ul>
			<!-- recorremos cada item del menu -->
			<?php foreach($this->menu as $item) : ?>
					  <li><a href="<?= $item["href"] ?>" > <?= $item["name"] ?></a></li>
			<?php endforeach; ?>		  
        </ul>
      </nav>
    </header>
	<aside>
		<a href="#"><img src="" alt="Información COVID-19"></a>	
	</aside>

	<main>
		<header>
        	<h1> <?= $nav ?> </h1>
      	</header>

		<ul>
			<li>
				<p>Consultar <a href="/turnos.html" title="">Turnos</a></p>
			</li>

			<li>
				<p>Consultar <a href="/estudios.html" title="">Estudios</a></p>
					
			</li>
			
			<li>
				<p>Consultar <a href="/especialidades.html" title="">Especialidades</a></p>
			</li>
		</ul>
		

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