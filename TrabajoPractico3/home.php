<?php
session_start();
require __DIR__.'/vendor/autoload.php';
use PAW\app\ViewController\Import;
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

Import::Header('index/index.css');

?>
	<aside>
		<a href="#"><img src="" alt="Información COVID-19"></a>	
	</aside>

	<main>
		<header>
        	<h1> Home </h1>
      	</header>

		<ul>
			<li>
				<p>Consultar <a href="/turnos.php" title="">Turnos</a></p>
			</li>

			<li>
				<p>Consultar <a href="/estudios.php" title="">Estudios</a></p>
					
			</li>
			
			<li>
				<p>Consultar <a href="/especialidades.php" title="">Especialidades</a></p>
			</li>
		</ul>
		

	</main>
<?php
	Import::Footer();
?>