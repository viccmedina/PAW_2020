<?php

require __DIR__ . '/../src/bootstrap.php';


use Paw\Core\Exceptions\RouteNotFoundException;

$titulo = htmlspecialchars($_GET["nombre"] ?? "PAW");

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$log->info("Petición a: {$method} {$path}");



try {
		$router->direct($path, $method);
} catch (RouteNotFoundException $e){
		$router->direct('not_found', $method);
		$log->info('Path not Found: 404');
} catch (Exception $e){
		$router->direct('internal_error', $method);
		$log->error('Status Code: 500 - Internal Server Error', ['Error'=>$e]);
}

?>
