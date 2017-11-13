<?php

namespace App\Models;

use Foundation\Database\Model;

class Login extends Model {

    public function getLogin($email_login, $pass_login) {
        session_start();
        $query = "SELECT * FROM pessoa WHERE email='{$email_login}' AND password='{$pass_login}' ";
        $return = $this->db->select($query);
        if ($return) {
            $_SESSION['email_login'] = $email_login;
            $_SESSION['pass_login'] = $pass_login;
            session()->put('_sucesso', 'Você esta logado!!');
            return redirect()->route('cadastro.index');
        } else {
            unset($_SESSION['email_login']);
            unset($_SESSION['pass_login']);
            return redirect()->route('cadastro.index');
        }
    }

    protected function getTableName() {
        return 'login';
    }

}
