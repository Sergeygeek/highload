<?php
require_once('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('my_log');
$log->pushHandler(new StreamHandler('log/my.log', Logger::Warning));

$log->info('test info');
$log->warning('Hello');
$log->error('World');
$form = file_get_contents('./tpl/form.php');

echo $form;