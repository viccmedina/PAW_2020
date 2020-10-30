<!DOCTYPE html>
<html lang="es">
	<head>
        <?php require 'parts/head-view.php'; ?>
		<meta name="description" content="noticias"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	</head>

	<body>
		<header>
            <h1> <img src="/static/imagenes/logo.png" alt="Logo empresarial"> 
            <?=
				$titulo
			?>
        </h1>

        <?php 
			require 'parts/nav-view.php';
			
		
		?>
    	</header>

		
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

		<footer>
        	<address>
            	<P>Tel : XXX-XXX-XXX </P>

            	<P>Email : <a href="mailto:webmaster@example.com">webmaster@example.com</a>.</P>
            	<P>Calle al 1983, Luján</P>
        	</address>

        	<ul>
            	<li><a href="https://www.instagram.com">Instagram</a></li>
            	<li><a href="https://www.facebook.com">Facebook</a></li>
            	<li><a href="https://www.whatsapp.com">Whatsapp</a></li>
        	</ul>
    	</footer>	
	</body>

</html>