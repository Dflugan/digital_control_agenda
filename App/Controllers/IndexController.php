<?php
namespace App\Controllers;

use Foundation\Controller;
use App\Models\Pessoa;

class IndexController extends Controller
{
    public function index()
    {
        $pessoas = (new Pessoa)->getAll();
        return $this->render('login/index');
    }
    
    public function login(){
        return $this->render('common/login');
    }
}
