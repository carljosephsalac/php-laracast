<?php

require 'Validator.php';

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Notes';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 20)) {
        $errors['body'] = 'Note body is required and no more than 20 characters';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/notes/create.view.php';