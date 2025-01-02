<?php

use Http\Forms\LoginForm;
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if (!$form->validate($email, $password)) {
    return view('session/create.view.php', [
        'heading' => 'Login',
        'errors' => $form->errors(),
    ]);
}

// match the credentials with the database
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email,
])->find();

if ($user) {
    // check if the password is correct
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $user['email'],
        ]);

        header('location: /');
        exit();
    }
}

return view('session/create.view.php', [
    'heading' => 'Login',
    'errors' => [
        'email' => 'User not found',
    ]
]);