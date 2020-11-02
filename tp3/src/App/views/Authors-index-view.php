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
        <h1> <?= $titulo ?> </h1>
        <?php
            require 'parts/nav-view.php'
        ?>
    </header>
    <main>
        <table>
            <thead>
                <tr> 
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($authors as $author) : ?>
                    <tr>
                        <td> 
                            <?= $author->fields["id"] ?>
                        </td>
                        <td>
                            <a href="/author?id=<?= $author->fields['id'] ?>  ">
                                <?= $author->fields["nombre"] ?>
                            </a>    
                        </td>
                        <td>
                            <?= $author->fields["email"] ?>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
            
        </table>
    
    </main>
</body>
</html>