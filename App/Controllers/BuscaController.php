<?php

namespace App\Controllers;

use Foundation\Controller;
use Foundation\Database;
use App\Models\Imoveis;

class BuscaController extends Controller {

    protected $imoveis;

    public function __construct() {
        $this->imoveis = new Imoveis;
    }

    public function index() {
        $this->render('search/index');
    }

    public function search() {
        $search = input()->get('search');
        $imoveis = $this->imoveis->search($search);
        if ($imoveis) {
            $this->render('index/index', [
                'imoveis' => $imoveis
            ]);
        } else {
            session()->put('_errosearch', 'Código inválido, tente novamente!!!');
            return redirect()->route('menu.index');
        }
    }
    
    public function search_lista(){
        $search = input()->get('search');
        $imoveis = $this->imoveis->search($search);
        if ($imoveis) {
            $this->render('index/lista', [
                'imoveis' => $imoveis
            ]);
        } else {
            session()->put('_errosearch', 'Código inválido, tente novamente!!!');
            return redirect()->route('lista.index');
        }
        
    }

}
