<?php

namespace App\Controllers;

use App\Models\Pessoa;
use Foundation\Controller;
use Foundation\Database;

class PessoaController extends Controller {

    protected $pessoa;

    public function __construct() {
        $this->pessoa = new Pessoa;
    }

    public function index() {
        $pessoa = $this->pessoa->getAll();

        $this->render('pessoa/index', [
            'pessoas' => $pessoa
        ]);
    }

    public function cadastrar() {
        $idPessoa = input()->get('pessoa');

        if (!$idPessoa) {
            return redirect()->route('index');
        }
        $this->render('cadastro/editar', [
                    'pessoa' => $this->pessoa->getById($idPessoa)
        ]);
    }   

    public function salvar() {
        
        $idPessoa = input()->get('pessoa');

        $fields = [
            'nome' => input()->get('nome'),
            'fone' => input()->get('fone'),
            'email' => input()->get('email')            
        ];

//        // Atualizar
        if ($idPessoa) {
            $this->pessoa->updateById($idPessoa, $fields);
            session()->put('_sucesso', 'O cadastro foi atualizado com sucesso');
            return redirect()->route('pessoa.index');
        }
    }

    public function deletar() {
        $idPessoa = input()->get('pessoa');
        $pessoa = $this->pessoa->getById($idPessoa);
        $eventos = $this->pessoa->getEventos($idPessoa);

        if ($eventos) {
            session()->put('_erro', 'Não é possivél deletar funcionário <strong>' . $pessoa->nome . '</strong> tem agenda ativa!!!');
            return redirect()->route('pessoa.index');
        } else {

            $where = "id= $idPessoa";
            $qtd = $this->pessoa->delete($where);

            if ($qtd) {
                redirect()->route('pessoa.index');
            } else {
                session()->put('_error', 'Erro ao deletar funcionário!!!');
                redirect()->route('pessoa.index');
            }
        }
    }

}
