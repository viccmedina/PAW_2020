<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php'?>
</head>

<body>
    <header>
        <h1> <img src="/assets/imagenes/logo.png" alt="Logo empresarial" width="50" height="50"> Enterprise Name </h1>
        <?php
            require 'parts/nav.view.php';
        ?>
    </header>

    <main class="main">
        <header>
            <h1>Socios</h1>
        </header>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socios as $socio):?>
                    <tr>
                        <td><?= $socio->fields["nombre"]?></td>
                        <td><?= $socio->fields["email"]?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

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