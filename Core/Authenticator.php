<?php

namespace Core;

use Core\Session;
use Core\Database;

class Authenticator
{
    public function attempt($email, $password)
    {
        $config = require base_path('config.php');
        $db = new Database($config['database']);

        // match the credentials with the database
        $user = $db->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email,
        ])->find();

        if ($user) {
            // check if the password is correct
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $user['email'],
                ]);
        
                return true;
            }
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email'],
        ];
    
        session_regenerate_id(true);
    }
    
    public function logout()
    {
        Session::destroy();
    }
}