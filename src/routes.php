<?php
use core\Router;

$router = new Router();


/*rotas fixas get*/
$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');

/*rotas dinamicas*/
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');



/*rotas receber*/
$router->post('/novo', 'UsuariosController@addAction');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');