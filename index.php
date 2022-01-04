<?php

session_start();

use Dotenv\Dotenv;

require_once 'app/core/App.php';
require_once 'app/core/Controller.php';
require __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


$app = new App;

?>