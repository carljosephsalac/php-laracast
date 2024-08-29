<?php

class Post {
    private static $posts = [
        [
            'name' => 'Carl',
            'content' => 'lorem ipsum',
            'created_at' => 'August, 20, 2024'
        ],
        [
            'name' => 'Joseph',
            'content' => 'some text',
            'created_at' => 'August, 20, 2024'
        ],
    ];

    public static function get()
    {
        return self::$posts;
    }
}

echo "<h1>STATIC</h1>";

$posts = Post::get();

foreach($posts as $post) {
    echo "{$post['name']} <br>";
    echo "{$post['content']} <br>";
    echo "{$post['created_at']} <br>";
}

?>