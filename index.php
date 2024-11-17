<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$query1 = "SELECT * FROM posts WHERE NOT id = :id"; // named placeholders (:id)
$posts = $db->query($query1, [':id' => $id])->fetchAll();
foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}

$query2 = "SELECT * FROM posts WHERE id = ?"; // positional placeholders (?)
$post = $db->query($query2, [$id])->fetch();
dd($post['title']);