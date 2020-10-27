<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer documento PAW</title>
</head>
<body>
    <header>
        <h1><?= $title ?></h1>
        <?php
            require "parts/nav.view.php";
        ?>
        <?php if($procesado) : ?>
        <div class="notification">
            <p>Su petición fué procesada con éxito.</p>
            <p>Nos pondremos en contacto con usted a la brevedad.</p>
        </div>
        <?php endif ; ?>
    </header>
    <main>
        <?= $main ?>

        <form action="/contact" method="POST">
            <label for="subject"><strong>Asunto (*)</strong></label>
            <input required type="text" name="subject">
            <label for="email"><strong>Correo (*)</strong></label>
            <input type="email" name="email">
            <label for="description"><strong>Descripción (*)</strong></label>
            <textarea type="text" name="description" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </main>
</body>
</html>