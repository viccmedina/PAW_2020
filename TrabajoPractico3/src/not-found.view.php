<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found</title>
</head>
<body>
    <header>
        <h1>Page not found</h1>
        <nav>
            <ul>
                <?php foreach($this->menu as $item) : ?>
                    <li><a href="<?= $item["href"]?>"><?= $item["name"]?></a></li>
                <?php endforeach ;?>
            </ul>
        </nav>
    </header>
</body>
</html>