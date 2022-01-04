<?php

require 'vendor/autoload.php';
use App\Router;

session_start();
$router = new Router();

$router->run();
