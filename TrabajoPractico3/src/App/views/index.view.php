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
            <?= $title ?>
        </h1>
        <?php
            require "parts/nav.view.php";
        ?>
    </header>
</body>
</html>