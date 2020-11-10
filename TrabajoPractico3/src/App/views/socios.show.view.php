<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php'?>
</head>

<body>
    <header>
        <h1> <img src="/assets/imagenes/logo.png" alt="Logo empresarial" width="50" height="50"> <?= ucfirst($socio->fields["nombre"])?></h1>
        <?php
            require 'parts/nav.view.php';
        ?>
    </header>

    <main class="main">
        <header>
            <h1>Socios</h1>
        </header>

        <p><?= $socio->fields["nombre"]?></p>
        <p><?= $socio->fields["email"]?></p>
    </main>

    <aside class="imagenCovid">
        <img src="/assets/imagenes/covid.jpg" alt="Información COVID-19" >
    </aside>


    <footer>
        <?php
            require 'parts/footer.view.php';
        ?>
    </footer>
</body>
</html>