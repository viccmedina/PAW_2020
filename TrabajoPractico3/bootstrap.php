<?php
    if(session_id() == ''){
        //session has not started
        session_start();
    }
    
    require __DIR__.'\vendor\autoload.php';
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;

    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    $logger = new Logger('main');
    $logger->pushHandler(new StreamHandler('\logs\app.log', Logger::DEBUG));
?>