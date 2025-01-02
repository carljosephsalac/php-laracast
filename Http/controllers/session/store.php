<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    }
    
    $form->error('email', 'User not found');
}

return view('session/create.view.php', [
    'heading' => 'Login',
    'errors' => $form->errors(),
]);