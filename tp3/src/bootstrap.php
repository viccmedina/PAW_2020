<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;

use Monolog\Handler\StreamHandler;

$log = new Logger('mvc-app');
$log ->pushHandler(new StreamHandler(__DIR__ . '/../log/app.log', Logger::DEBUG));

$whoops = new \Whoops\Run;

$whoops -> pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops -> register();