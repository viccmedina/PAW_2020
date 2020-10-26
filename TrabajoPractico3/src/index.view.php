<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer documento PAW</title>
</head>
<body>
    <header>
        <h1>
            <?= $titulo ?>
        </h1>
        <nav>
            <ul>
                <?php foreach($menu as $item) : ?>
                    <li><a href="<?= $item["href"]?>"><?= $item["name"]?></a></li>
                <?php endforeach ;?>
            </ul>
        </nav>
    </header>
</body>
</html>