<?php
namespace App\Controllers;
use Foundation\Controller;
use App\Models\Pessoa;

class CadastroController extends Controller
{
    public function index()
    {
        $this->render('cadastro/index');
    }
    public function salvar()
    {

        $senha = input()->get('password');
        $password = md5($senha);

        $dados = [
             'nome'=> input()->get('nome'),
             'fone'=> input()->get('fone'),
             'email'=> input()->get('email'),
             'password'=> $password
         ];

        $pessoa = new Pessoa;
        $qtd = $pessoa->insert($dados);
        
        if($qtd){
            session()->put('_sucesso', 'Funcionário incluido com Sucesso!!');
            return redirect()->route('pessoa.index');
        }
            session()->put('_erro', 'Erro ao incluir o cadastro!!!');
            return redirect()->route('cadastro.index');
    }
}
