<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset = " UTF-8 " >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/style/style.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/style/index/index.css"/>
	<title>Enterprise Name - Home</title>
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
        <?php
        require 'parts/footer.view.php';
        ?>
	</footer>	
</body>
</html>