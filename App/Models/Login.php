<?php

namespace App\Models;

use Foundation\Database\Model;

class Login extends Model {

    public function getLogin($email_login, $pass_login) {
        $query = "SELECT * FROM login WHERE email='{$email_login}' AND senha='{$pass_login}' ";

        $return = $this->db->select($query);

        if ($return) {
            session_start();
            $_SESSION['email_login'] = $email_login;
            $_SESSION['pass_login'] = $pass_login;
            
            foreach ($return as $value) {
                session()->put('_sucesso', "Bem vindo!!! Email: <strong>$email_login</strong>");
                return redirect()->route('menu.index');
            }
        } else {
            unset($_SESSION['email_login']);
            unset($_SESSION['pass_login']);
            echo "<script>alert('Erro ao Logar!);</script>";
            return redirect()->route('index');
        }
    }

    protected function getTableName() {
        return 'login';
    }

}
