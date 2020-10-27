<?php
    require __DIR__ . '/../vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    use Dotenv\Dotenv;

    use Paw\Core\Config;

    $dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
    $dotenv->load();

    $config = new Config;

    $log = new Logger('mvc-app');
    $handler = new StreamHandler($config->get("LOG_PATH"));
    $handler->setLevel($config->get("LOG_LEVEL"));
    $log->pushHandler($handler);

    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    use Paw\Core\Router;
    
    $router = new Router;
    $router->get('/', 'PageController@index');
    $router->get('/about', 'PageController@about');
    $router->get('/services', 'PageController@services');
    $router->get('/contact', 'PageController@contact');
    $router->post('/contact', 'PageController@contactProcess');
    $router->get('not_found', 'ErrorController@notFound');
    $router->get('internal_error', 'ErrorController@internalError');
