<?php
namespace App\Controllers;

use Foundation\Controller;
use App\Models\Pessoa;
use App\Models\Evento;
use App\Models\PessoaEvento;
use Foundation\Database\Db;

class EventosController extends Controller
{
    protected $pessoa;
    protected $evento;
    protected $pessoaEvento;

    public function __construct()
    {
        $this->evento = new Evento;
        $this->pessoa = new Pessoa;
        $this->pessoaEvento = new PessoaEvento;
    }

    public function index()
    {   
        $id= input()->get('pessoa');
        $pessoa = $this->pessoa->getById($id);
        
        return $this->render('eventos/index', [
            'pessoa' => $pessoa,
            'eventos' => $this->pessoa->getEventos($id)
        ]);
    }

    public function cadastrar()
    {
        $idEvento = input()->get('evento', false);
        $idPessoa = input()->get('pessoa');

        if(!$idPessoa) {
            return redirect()->route('index');
        }

        $evento = null;

        if($idEvento) {
            $evento = $this->evento->getById($idEvento);
        }

        return $this->render('eventos/cadastrar',[
            'pessoa' => $this->pessoa->getById($idPessoa),
            'evento' => $evento
        ]);
    }

    public function salvar()
    {
        $idPessoa = input()->get('pessoa');
        $idEvento = input()->get('id');

        $data = str_replace('/', '-', input()->get('data'));

        $fields = [
            'data' => dt($data)->format('Y-m-d'),
            'hora_de' => input()->get('hora_de'),
            'hora_ate' => input()->get('hora_ate'),
            'descricao' => input()->get('descricao')
        ];

//        // Atualizar
        if($idEvento) {
            $this->evento->updateById($idEvento, $fields);

            session()->put('_sucesso', 'O Agenda foi atualizada com sucesso');

            return redirect()->route('eventos.index', [
                'evento' => $idEvento,
                'pessoa' => $idPessoa
            ]);
        }

        // Cadastra o evento
        $idEventoCadastrado = $this->evento->insert($fields);

        // Relaciona o evento com a pessoa
        $this->pessoaEvento->insert([
            'pessoa' => $idPessoa,
            'evento' => $idEventoCadastrado
        ]);

        session()->put('_sucesso', 'Agenda cadastrado com sucesso!');

        return redirect()->route('eventos.index', [
            'pessoa' => $idPessoa
        ]);
    }
    
    public function deletar()
    {
        $idEvento = input()->get('evento', false);
        $id = "evento={$idEvento}";
        
        $idPessoa= input()->get('pessoa');
        
        
        $deletar = $this->pessoaEvento->delete($id);
        if($deletar){
            return redirect()->route('eventos.index', [
            'pessoa' => $idPessoa
        ]);
        }else{
            session()->put('_erro', 'Erro ao deletar');
        }
    }
}
