<?php
session_start();
require __DIR__.'/vendor/autoload.php';
use PAW\app\ViewController\Import;
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

Import::Header('index/index.css');

?>

    <!--no se si en mi seccion deberia poner una imagen u otra cosa. (alguien tiene info de covid aca)-->



    <main class="main">
        <header>
            <h1>Especialidades</h1>
        </header>

        <!--
           lo que va en esta parte es discutible ya que se puede  usar un
            datalist donde se le muestre al cliente los resultados en tiempo real.
        -->
        <section>
            <form action="/especialidades.php" method="get" name="consultaEspecialidades">
                <label for="buscar">Buscar
                    <input type="search" name="buscar" id="buscar"  autofocus placeholder="Ingrese la especialidad que desea buscar." required>
                </label>
                <input type="submit" value="Buscar">
            </form>
            <!-- resultados de ejemplo-->
            <h2>Resultado:</h2>

            <article>
                <h3><a href="/resultado1">Resultado 1</a></h3>
                <p>Aqui deberia ir un resumen de este resultado en si.</p>
            </article>

            <article>
                <h3><a href="/resultado2">Resultado 2</a></h3>
                <p>Aqui deberia ir un resumen de este resultado en si.</p>
            </article>

            <article>
                <h3><a href="/resultado3">Resultado 3</a></h3>
                <p>Aqui deberia ir un resumen de este resultado en si.</p>
            </article>

        </section>

    </main>

    <aside class="imagenCovid">
        <img src="/imagenes/covid.jpg" alt="Información COVID-19" >
    </aside>
<?php
	Import::Footer();
?>