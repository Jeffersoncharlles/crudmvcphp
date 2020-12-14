<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $dados = [
            
        ];

        

        $this->render('add', $dados);
    }

    public function addAction(){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            $data = Usuario::select()->where('email',$email)->execute();

            if (count($data) === 0) {
                //inserir se ele nao achar
                Usuario::insert([
                    'nome'=> $name,
                    'email'=> $email
                ])->execute();
                //redirection para /
                    $this->redirect('/');
            }
        }
        //redirection para /novo
        $this->redirect('/novo');

    }

}