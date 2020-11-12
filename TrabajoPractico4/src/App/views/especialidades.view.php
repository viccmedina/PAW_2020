<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php';?>
    <link rel="stylesheet" type="text/css" href="/assets/style/especialidades/especialidades.css"/>
</head>

<body>
    <header>
        <h1> <img src="/assets/imagenes/logo.png" alt="Logo empresarial" width="50" height="50"> Enterprise Name </h1>
        <?php
            require 'parts/nav.view.php';
        ?>
    </header>

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
            <form action="/especialidades.html" method="get" name="consultaEspecialidades">
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


    <footer>
        <?php
            require 'parts/footer.view.php';
        ?>
    </footer>
</body>
</html>