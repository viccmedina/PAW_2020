<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'parts/head-view.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<header>
      <h1><img src="/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50"> 
        <?=
		    $titulo
	    ?></h1>
      <?php 
			require 'parts/nav-view.php';
			
		
		?>
    </header>
</body>
</html>