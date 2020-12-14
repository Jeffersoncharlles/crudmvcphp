<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller {

    public function index() {
        $nome = 'Jefferson';
        $posts =  [
            ['titulo' => 'Titutlo de Teste 1'],
            ['titulo' => 'Titutlo de Teste 2'],
            ['titulo' => 'Titutlo de Teste 3'],
            ['titulo' => 'Titutlo de Teste 4']
        ];

        $dados = [
            'posts' => $posts,
            'nome' => $nome
        ];

        

        $this->render('home', $dados);
    }

    public function sobre() {
        $this->render('sobre');
    }
    public function fotos() {
        $teste = new Test();

        $this->render('fotos');
    }

    public function sobreP($args) {
        print_r($args);
    }

}