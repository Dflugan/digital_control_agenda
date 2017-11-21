<?php

namespace App\Controllers;

use Foundation\Controller;
use App\Models\Pessoa;
use App\Models\Evento;

class MenuController extends Controller {

    public function index() {
        $pessoas = (new Pessoa)->getAll();        
        $evento = (new Evento)->getAll();
        $this->render('index/index', [
            'pessoas' => $pessoas,
            'eventos' => $evento
        ]);
    }

}
