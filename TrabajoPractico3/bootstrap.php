<?php
    if(session_id() == ''){
        //session has not started
        session_start();
    }
    
    require __DIR__.'\vendor\autoload.php';
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PAW\core\Config;

    $config = New Config;
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    $logger = new Logger('main');
    $logger->pushHandler(new StreamHandler($config->get("LOG_PATH"), $config->get("LOG_LEVEL")));
?>