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
                <h1> Institucional </h1>
            </header>


            <p class="titulo">Mision: </p>
                <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
            <br>
            
            <p class="titulo">Vision:</p>
                <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
            <br>

            <p class="titulo">Valores:</p>
                <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut consectetur dolor. Nam interdum erat fermentum scelerisque facilisis. Duis tincidunt, dolor non semper semper, purus leo blandit massa, vel dictum magna augue et est. Suspendisse commodo eu augue sed euismod. Fusce mattis neque id orci posuere, vel ullamcorper ligula molestie.</p>
            <br>

            

            <section>
                <p class="titulo">Directorio: </p><br>

                <a href="#" > <img  src ="imagenes/director.svg" alt = "imagen director1"> </a>
                    <p class="descripcion">Lorem ipsum dolor sit amet, consectetur</p>

                <a href="#" > <img  src ="imagenes/director1.svg" alt = "imagen director2"> </a>
                    <p class="descripcion">Lorem ipsum dolor sit amet, consectetur</p>

                <a href="#" > <img  src ="imagenes/director2.svg" alt = "imagen director3"> </a>
                    <p class="descripcion">Lorem ipsum dolor sit amet, consectetur</p>
            </section>

         </main>   


        <aside class="aside">
            <a href="#" > <img src="imagenes/covid.jpg" alt="Imagenes de covid nineteen -Informativo">  </a> <br><br>
        </aside>


<?php
	Import::Footer();
?>