<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$db = new Database();

$posts = $db->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}

$post = $db->query('SELECT * FROM posts WHERE id = 4')->fetch(PDO::FETCH_ASSOC);
dd($post['title']);