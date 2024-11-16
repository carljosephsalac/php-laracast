<?php

require 'functions.php';
// require 'router.php';

// Connect to mysql database
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=php_laracast;charset=utf8mb4";
$user = 'root';

$pdo = new PDO($dsn, $user);

$statement = $pdo->prepare('SELECT * FROM posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}