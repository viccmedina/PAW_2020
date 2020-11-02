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
        <p><?= $author->fields["nombre"] ?></p>
        <p><?= $author->fields["email"] ?></p>
    </main>
</body>
</html>