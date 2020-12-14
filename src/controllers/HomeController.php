<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        
        $usuarios = Usuario::select()->execute();
        
        
        $data = [
            'usuarios' => $usuarios
        ];

        $this->render('home', $data);
    }


}