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
if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'heading' => 'Login',
        'errors' => $errors
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