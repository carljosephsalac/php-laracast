<?php

use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::string($email, 1, 30)) {
    $errors['email'] = 'Email is required and no more than 20 characters';
}
if (!Validator::string($password, 1, 20)) {
    $errors['password'] = 'Password is required and no more than 20 characters';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'heading' => 'Register',
        'errors' => $errors
    ]);
}

$user = $db->query('SELECT email FROM users WHERE email = :email', [
    'email' => $email,
])->find();

if ($user) {
    login($user);
    
    header('location: /');
    exit();
} else {
    $db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
    ]);

    $user = $db->query('SELECT email FROM users WHERE email = :email', [
        'email' => $email,
    ])->find();

    login($user);

    header('location: /');
    exit();
}
