<?php

namespace App\Controllers;

use Foundation\Controller;
use App\Models\Imoveis;

class ListaController extends Controller
{
    
    public function index(){
    $imoveis = (new Imoveis)->getAll();    
        $this->render('index/lista',[
            'imoveis'=> $imoveis
        ]);
    }
}