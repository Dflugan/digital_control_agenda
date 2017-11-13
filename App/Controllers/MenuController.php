<?php
namespace App\Controllers;
use Foundation\Controller;
use App\Models\Pessoa;

class MenuController extends Controller
{
  public function index(){
    $pessoas = (new Pessoa)->getAll();
    $this->render('index/index',[
        'pessoas' => $pessoas
    ]);
  }
}
