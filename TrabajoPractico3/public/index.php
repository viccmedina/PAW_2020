<?php
    require __DIR__ . '/../src/bootstrap.php';

    //use Paw\Core\Exceptions\RouteNotFoundException;

    $router->direct($request);
    /*
    try{
        
        $log->info("Status Code: 200 - {$path}");
    } catch(RouteNotFoundException $e){
        $router->direct('not_found');
        $log->info("Status Code: 404 - Route Not Found", ["Path" => $path]);
    } catch(Exception $e){
        $router->direct('internal_error');
        $log->error("Status Code: 500 - Internal Server Error", ["Error" => $e]);
    }
    */

?>