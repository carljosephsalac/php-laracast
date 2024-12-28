<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

// find the corresponding note
$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_POST['id']
])->findOrFail();

// authorize
authorize($note['user_id'] == $currentUserId);

// validate
$errors = [];
if (!Validator::string($_POST['body'], 1, 20)) {
    $errors['body'] = 'Note body is required and no more than 20 characters';
}

if (!empty($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

// redirect the user
header('location: /notes');
die();