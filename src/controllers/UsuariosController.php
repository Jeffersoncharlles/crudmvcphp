<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class UsuariosController extends Controller {

    public function add() {
        $dados = [
            
        ];

        

        $this->render('add', $dados);
    }

    public function addAction(){
        echo 'recebido';
    }

}