<?php
require 'vendor/autoload.php';

$instance = new \Whoops\Run;
$instance->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$instance->register();

Echo "Hello World!";

throw new ErrorException('Testing the whoops interface');
