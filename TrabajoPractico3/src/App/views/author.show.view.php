<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require 'parts/head.view.php';
    ?>
</head>
<body>
    <header>
        <h1>
            <?= $title ?>: <?= ucfirst($author->fields["nombre"]) ?>
        </h1>
        <?php
            require "parts/nav.view.php";
        ?>
    </header>

    <main> 
        <p>Nombre: <?= $author->fields["nombre"] ?></p>
        <p>Correo: <a href="mailto:<?= $author->fields["email"]?>"><?= $author->fields["email"] ?></p></a> 
    </main>

</body>
</html>