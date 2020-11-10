<!DOCTYPE html>
<html lang="es">
	<head>
		<?php require 'parts/head.view.php'?>
  		<link rel="stylesheet" type="text/css" href="/assets/style/noticias/noticias.css"/>
	</head>

	<body>
		<header>
        	<h1> <img src="/assets/imagenes/logo.png" alt="Logo empresarial"> Enterprise Name </h1>
            <?php
            require 'parts/nav.view.php';
            ?>
    	</header>

		
		<main>
			<header>
        		<h1> Noticias </h1>
      		</header>

			<ul>
				<article >
					<a href="#" > <img class="img_noticia" src ="/assets/imagenes/noticia1.png" alt = "Noticia 1 "> </a>
						<p class="titulo">titulo de la noticia 1</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie. 1</p>
				</article>	
				<article>	
					<a href="#" > <img class="img_noticia" src ="/assets/imagenes/noticia2.png" alt = "Noticia 2 "> </a>
						<p class="titulo">titulo de la noticia 2</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>
				<article >		
					<a href="#" > <img class="img_noticia" src ="/assets/imagenes/noticia3.png" alt = "Noticia 3 "> </a>
						<p class="titulo">titulo de la noticia 3</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>
				<article class="item-container">		
					<a href="#" > <img class="img_noticia" src ="/assets/imagenes/noticia4.png" alt = "Noticia 4 "> </a>
						<p class="titulo">titulo de la noticia 4</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>
				<article>		
					<a href="#" > <img class="img_noticia" src ="/assets/imagenes/noticia5.png" alt = "Noticia 5 "> </a>
						<p class="titulo">titulo de la noticia 5</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>
				<article>		
					<a href="#" > <img class="img_noticia" src ="/assets/imagenes/noticia6.png" alt = "Notiimagenes/noticia5.pngcia 6 "> </a>
						<p class="titulo">titulo de la noticia 6</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
				</article>		
			</ul>
		</main>

		<aside class="aside">
			<a href="#" > <img  src="/assets/imagenes/covid.jpg" alt="Imagenes de covid nineteen -Informativo"> </a><br><br>
		</aside>

		<footer>
            <?php
            require 'parts/footer.view.php';
            ?>
    	</footer>	
	</body>

</html>