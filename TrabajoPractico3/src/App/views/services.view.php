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
    </header>
    <main>
        <?= $main ?>
    </main>
</body>
</html>