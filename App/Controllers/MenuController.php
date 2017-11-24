<?php

namespace App\Controllers;

use Foundation\Controller;
use App\Models\Imoveis;
use App\Models\Evento;

class MenuController extends Controller {

    public function index() {
        $Imoveis = (new Imoveis)->getAll();        
        $evento = (new Evento)->getAll();
        $this->render('index/index', [
            'imoveis' => $Imoveis
        ]);
    }

}
