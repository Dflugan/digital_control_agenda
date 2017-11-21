<?php
namespace App\Controllers;

use App\Models\Pessoa;
use Foundation\Controller;
use Foundation\Database;

class PessoaController extends Controller
{
    protected $pessoa;
    public function __construct() {
        $this->pessoa = new Pessoa;
    }
    public function index(){
        $pessoa = $this->pessoa->getAll();
        
        $this->render('pessoa/index', [
            'pessoas' => $pessoa
        ]);
    }    
    
}