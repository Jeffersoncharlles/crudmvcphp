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

    public function edit($id){
        //$usuario = Usuario::select()->where('id', $id['id'])->one();
        $usuario = Usuario::select()->find($id['id']);

        $dados = [
            'usuarios' => $usuario
        ];
        $this->render('edit', $dados);
    }
    public function editAction($args){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            Usuario::update()
                ->set('nome', $name)
                ->set('email',$email)
                ->where('id',$args['id'])
                ->execute();
                //redirection para /
                    $this->redirect('/');
        }
        //redirection para /novo
        $this->redirect('/usuario/'.$args['id'].'/editar');
        
    }
    public function del($id){
        Usuario::delete()->where('id', $id['id'])->execute();

        $this->redirect('/');
    }

}