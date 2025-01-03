<?php

use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];
if (!Validator::string($_POST['body'], 1, 20)) {
    $errors['body'] = 'Note body is required and no more than 20 characters';
}

if (!empty($errors)) {
    return view('notes/create.view.php', [
        'heading' => 'Create Notes',
        'errors' => $errors
    ]);
}

if (empty($errors)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

    header('location: /notes');
    exit();
}
