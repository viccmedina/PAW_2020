<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require 'parts/head.view.php'?>
        <link rel="stylesheet" type="text/css" href="/assets/style/institucional/institucional.css"/>    
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

                <a href="#" > <img  src ="/assets/imagenes/director.svg" alt = "imagen director1"> </a>
                    <p class="descripcion">Lorem ipsum dolor sit amet, consectetur</p>

                <a href="#" > <img  src ="/assets/imagenes/director1.svg" alt = "imagen director2"> </a>
                    <p class="descripcion">Lorem ipsum dolor sit amet, consectetur</p>

                <a href="#" > <img  src ="/assets/imagenes/director2.svg" alt = "imagen director3"> </a>
                    <p class="descripcion">Lorem ipsum dolor sit amet, consectetur</p>
            </section>

         </main>   


        <aside class="aside">
            <a href="#" > <img src="/assets/imagenes/covid.jpg" alt="Imagenes de covid nineteen -Informativo">  </a> <br><br>
        </aside>


        <footer>
        <!-- Href a google maps? -->
            <?php
            require 'parts/footer.view.php';
            ?>
    	</footer>	

    </body>

</html>