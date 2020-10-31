<?php

use core\Router;

$router = new Router();

$router->get('/', 'ProdutoController@getAll');
$router->get('/produto/{id}', 'ProdutoController@get');
