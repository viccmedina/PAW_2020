<!DOCTYPE html>
<html lang="es">
<head>
	<?php require 'parts/head.view.php'?>
	<link rel="stylesheet" type="text/css" href="/assets/style/index/index.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/style/paw_carousel/pawcarousel.css"/>
	<script src="/assets/js/components/PawCarousel.js"></script>	
</head>
<body>
	<header>
      <h1><img src="/assets/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50"> Enterprise Name</h1>
        <?php
        require 'parts/nav.view.php';
        ?>
    </header>
	<aside>

		<a href="#"><img src="" alt="Información COVID-19"></a>	
	</aside>

	<main>
		<header>
        	<h1> Home </h1>

      	</header>

		<ul>
			<li>
				<p>Consultar <a href="/turnos" title="">Turnos</a></p>
			</li>

			<li>
				<p>Consultar <a href="/estudios" title="">Estudios</a></p>
					
			</li>
			
			<li>
				<p>Consultar <a href="/especialidades" title="">Especialidades</a></p>
			</li>
		</ul>
		

	</main>

    <footer>
        <?php
        require 'parts/footer.view.php';
        ?>
	</footer>	
</body>
</html>