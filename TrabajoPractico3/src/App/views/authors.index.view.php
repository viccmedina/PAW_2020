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

    <main>  
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($authors as $author) : ?>
                    <tr>
                        <td><?= $author->fields["nombre"] ?></td>
                        <td><?= $author->fields["email"] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>

</body>
</html>