<?php
    require __DIR__ . '/../vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    use Dotenv\Dotenv;

    use Paw\Core\Config;
    use Paw\Core;
    use Paw\Core\Database\ConnectionBuilder;
    use Paw\Core\Request;

    $dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
    $dotenv->load();

    $config = new Config;

    $log = new Logger('mvc-app');
    $handler = new StreamHandler($config->get("LOG_PATH"));
    $handler->setLevel($config->get("LOG_LEVEL"));
    $log->pushHandler($handler);

    $connectionBuilder = new ConnectionBuilder;
    $connectionBuilder->setLogger($log);
    $connection = $connectionBuilder->make($config);

    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    $request = new Request;

    use Paw\Core\Router;
    
    $router = new Router;
    $router->setLogger($log);
    $router->get('/', 'PageController@index');
    $router->get('/about', 'PageController@about');
    $router->get('/services', 'PageController@services');
    $router->get('/contact', 'PageController@contact');
    $router->post('/contact', 'PageController@contactProcess');
    $router->get('/authors', 'AuthorController@index');
    $router->get('/author', 'AuthorController@get');
    $router->get('/author/edit', 'AuthorController@edit');
    $router->post('/author/edit', 'AuthorController@set');


