<?php

// Conditional and Booleans
$book = 'Dark Matter';
$read = true;

if ($read) {
    $message = "You have read $book (Conditional and Booleans)";
} else {
    $message = "You have not read $book (Conditional and Booleans)";
}

// Arrays
$booksArray = [
    'Ang Alamat ng Langgam',
    'Juan Tamad',
    'Matsing at Pagong'
];

// Associative Arrays
$booksAssociativeArray = [
    [
        'name' => 'Ang Alamat ng Langgam',
        'author' => 'Pedro Pen Duco',
        'url' => 'https://example.com'
    ],
    [
        'name' => 'Juan Tamad',
        'author' => 'Carlo J. Caparas',
        'url' => 'https://example.com'
    ],
    [
        'name' => 'Matsing at Pagong',
        'author' => 'Coco Martin',
        'url' => 'https://example.com'
    ],
    [
        'name' => 'Ang Probinsyano',
        'author' => 'Coco Martin',
        'url' => 'https://example.com'
    ],
];

// Functions and Filter
function filteredBooks($books, $author) {
    $filteredBooks = [];

    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }
                
    return $filteredBooks;      
}

$filteredBooks = filteredBooks($booksAssociativeArray, 'Coco Martin');

// Lambda Functions
$filteredBooksLambda = array_filter($booksAssociativeArray, function($book) {
    return $book['author'] === 'Coco Martin';
});

require 'index.view.php';