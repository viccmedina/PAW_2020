<?php
session_start();
require __DIR__.'/vendor/autoload.php';
use PAW\app\ViewController\Import;
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

Import::Header('index/index.css');

?>

		
		<main>
			<header>
        		<h1> Noticias </h1>
      		</header>

			<ul>
				<article >
					<a href="#" > <img class="img_noticia" src ="imagenes/noticia1.png" alt = "Noticia 1 "> </a>
						<p class="titulo">titulo de la noticia 1</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie. 1</p>
				</article>	
				<article>	
					<a href="#" > <img class="img_noticia" src ="imagenes/noticia2.png" alt = "Noticia 2 "> </a>
						<p class="titulo">titulo de la noticia 2</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>
				<article >		
					<a href="#" > <img class="img_noticia" src ="imagenes/noticia3.png" alt = "Noticia 3 "> </a>
						<p class="titulo">titulo de la noticia 3</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>
				<article class="item-container">		
					<a href="#" > <img class="img_noticia" src ="imagenes/noticia4.png" alt = "Noticia 4 "> </a>
						<p class="titulo">titulo de la noticia 4</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>
				<article>		
					<a href="#" > <img class="img_noticia" src ="imagenes/noticia5.png" alt = "Noticia 5 "> </a>
						<p class="titulo">titulo de la noticia 5</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>
				<article>		
					<a href="#" > <img class="img_noticia" src ="imagenes/noticia6.png" alt = "Notiimagenes/noticia5.pngcia 6 "> </a>
						<p class="titulo">titulo de la noticia 6</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>		
			</ul>
		</main>

		<aside class="aside">
			<a href="#" > <img  src="imagenes/covid.jpg" alt="Imagenes de covid nineteen -Informativo"> </a><br><br>
		</aside>
<?php
	Import::Footer();
?>