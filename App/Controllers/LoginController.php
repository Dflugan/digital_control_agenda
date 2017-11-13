<?php

namespace App\Controllers;
use Foundation\Controller;
use App\Models\Login;

class LoginController extends Controller
{
    public function index()
    {
    $this->render('index/index');
    }
    
    public function logar()
    {
    $password = md5(input()->get('password'));
    $dados = [
    'email' => input()->get('email'),
     'password' => $password
    ];
    $login = new Login;
    $login->getLogin($dados['email'], $password);
    }
    
    public function logout()
    {
        unset($_SESSION['email_login']);
        unset($_SESSION['pass_login']);
        session()->put('_sucesso', 'Logout!!!');
        return redirect()->route('index');
    }
}
