<?php
require '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('../logs/your.log'));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

