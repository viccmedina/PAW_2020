<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOT FOUND PAGE</title>
</head>
<body>
<header>
      <h1><img src="/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50"> 
        <?=
		    $titulo
	    ?></h1>
      <nav>
        <ul>
        <?php foreach($this->menu as $item) : ?>
					  <li><a href="<?= $item["href"] ?>" > <?= $item["name"] ?></a></li>
            <?php endforeach; ?>
            
        </ul>
        <?= $nav ?> 
      </nav>
    </header>
</body>
</html>