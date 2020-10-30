<?php
session_start();
require '../vendor/autoload.php';
require '../src/routes.php';

$dotenv = Dotenv\Dotenv::createImmutable('C:\xampp\htdocs\api-ranek\\');
$dotenv->load();
$router->run($router->routes);
