<?php

$path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if ($path == "/home") {
    require __DIR__ . '/../src/index.view.php';
}elseif ($path == "/turnos") {
    require __DIR__ . '/../src/turnos.view.php';
}elseif ($path == "/estudios") {
    require __DIR__ . '/../src/estudios.view.php';
}elseif ($path == "/obras_sociales") {
    require __DIR__ . '/../src/obras_sociales.view.php';
}elseif ($path == "/especialidades") {
    require __DIR__ . '/../src/especialidades.view.php';
}elseif ($path == "/noticias") {
    require __DIR__ . '/../src/noticias.view.php';
}elseif ($path == "/institucional") {
    require __DIR__ . '/../src/institucional.view.php';
}elseif ($path == "/home") {
    require __DIR__ . '/../src/index.view.php';
}else {
  echo "Page not found";
}
