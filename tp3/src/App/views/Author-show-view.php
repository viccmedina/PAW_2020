<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
        require 'parts/head-view.php'
    ?>
</head>
<body>
    <header>
        <h1> <?= $titulo ?>: <?=ucfirst($author->fields['nombre']) ?></h1>
        <?php
            require 'parts/nav-view.php'
        ?>
    </header> 
    <main>
        <p>Código: <?= $author->fields["id"] ?></p>
        <p>Nombre: <?= $author->fields["nombre"] ?></p>
        <p>Correo: 
            <a href="mailto:<?= $author->fields["email"] ?>"> <?= $author->fields["email"] ?></a>
        </p>
    </main>
</body>
</html>