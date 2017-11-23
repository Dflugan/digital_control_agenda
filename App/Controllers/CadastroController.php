<?php
namespace App\Controllers;
use Foundation\Controller;
use App\Models\Login;
use App\Models\Imoveis;

class CadastroController extends Controller
{
    public function index()
    {
        $this->render('cadastro/index');
    }
    
    public function login()
    {
        $this->render('cadastro/login');
    }
    public function salvar()
    {
        
        $senha = input()->get('password');
        $password = md5($senha);
        
        $dados = [
             'email'=> input()->get('email'),
             'senha'=> $password
         ];
         
        $login = new Login;
        $qtd = $login->insert($dados);
        
        if($qtd){
            session()->put('_sucesso', 'Funcionário incluido com Sucesso!!');
            return redirect()->route('menu.index');
        }
            session()->put('_erro', 'Erro ao incluir o cadastro!!!');
            return redirect()->route('cadastro.index');
    }
    public function criaDir($url){
        mkdir($url, 0777);
    }
    
    public function buscaPorCep($cep){
        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http:/viacep.com.br/ws/$cep/xml/";
        $xml = simplexml_load_file($url);
        return $xml;
    }

    public function cadastroImoveis(){
        $codigo = input()->get('codigo');
        $titulo = input()->get('titulo');
        $tipo = input()->get('tipo');
        $cep = input()->get('cep');
        $rua = input()->get('rua');
        $numero = input()->get('numero');
        $cidade = input()->get('cidade');
        $estado = input()->get('estado');
        $bairro = input()->get('bairro');
        $complemento = input()->get('complemento');
        $preco = input()->get('preco');
        $forma = input()->get('forma');
        $area = input()->get('area');
        $quarto = input()->get('quarto');
        $suite = input()->get('suite');
        $banheiro = input()->get('banheiro');
        $sala = input()->get('sala');
        $garagem = input()->get('garagem');
        $nome_da_imagem = $_FILES['arquivo']['name'];
        
        $dados = array(
          'codigo'=> $codigo,
          'titulo'=> $titulo,
          'tipo'=> $tipo,
          'cep'=> $cep,
          'rua'=> $rua,
          'numero'=> $numero,
          'cidade'=> $cidade,
          'estado'=> $estado,
          'bairro'=> $bairro,
          'complemento'=> $complemento,
          'preco'=> $preco,
          'forma'=> $forma,
          'area'=> $area,
          'quarto'=> $quarto,
          'suite'=> $suite,
          'banheiro'=> $banheiro,
          'sala'=> $sala,
          'garagem'=> $garagem,
          'imagem'=> $nome_da_imagem,
        );
        $imovel = new Imoveis;
        $id_prod = $imovel->insert($dados);
        
        $_UP['pasta'] = '../imagens/produtos/' . $id_prod . '/';
        $this->criaDir($_UP['pasta']);        
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_da_imagem);
        if($id_prod){
            session()->put('_sucesso', '<strong>Imovel</strong> incluido com Sucesso!!');
            return redirect()->route('cadastro.index');
        }
            session()->put('_erro', 'Erro ao incluir o Imovel, tente novamente!!!');
            return redirect()->route('cadastro.index');
        
    } 
    
}
