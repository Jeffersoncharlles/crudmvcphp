<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');



/*rotas receber*/
$router->post('/novo', 'UsuariosController@addAction');