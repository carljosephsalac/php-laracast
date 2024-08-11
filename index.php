<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Laracast</title>
</head>

<body style="padding-bottom: 50px;">

    <!-- Variables -->
    <h1>
        <?php      
            $greeting = 'Hello';

            echo "$greeting PHP (Variables)";
        ?>
    </h1>

    <!-- Conditional and Booleans -->
    <?php
        $book = 'Dark Matter';
        $read = true;

        if ($read) {
            $message = "You have read $book (Conditional and Booleans)";
        } else {
            $message = "You have not read $book (Conditional and Booleans)";
        }
    ?>
    <h1><?= $message ?></h1>

    <!-- Arrays -->
    <h1>Books (Arrays)</h1>
    <?php
        $books = [
            'Ang Alamat ng Langgam',
            'Juan Tamad',
            'Matsing at Pagong'
        ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

  <!-- Associative Arrays -->
  <h1>Books (Associative Arrays)</h1>
    <?php
        $books = [
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
                'author' => 'Coco Maritn',
                'url' => 'https://example.com'
            ],
        ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['url'] ?>">
                    <?= $book['name'] ?> - By <?= $book['author'] ?>
                </a>     
            </li>    
        <?php endforeach; ?>
    </ul>
        
  <!-- Functions and Filter -->
  <h1>Filtered Books (Functions and Filter)</h1>
    <?php
        $books = [
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
                'name' => 'Batang Quiapo',
                'author' => 'Coco Martin',
                'url' => 'https://example.com'
            ],
            [
                'name' => 'Ang Probinsyano',
                'author' => 'Coco Martin',
                'url' => 'https://example.com'
            ],
        ];

        function filteredBooks($books, $author) {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }
                       
            return $filteredBooks;      
        }
    ?>
    
    <?php $filteredBooks = filteredBooks($books, 'Coco Martin') ?>

    <ul>
        <?php if (!empty($filteredBooks)) : ?>
            <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['url'] ?>">
                        <?= $book['name'] ?> - By <?= $book['author'] ?>
                    </a>     
                </li>     
            <?php endforeach; ?>
        <?php else : ?>
            <li>No books found</li>
        <?php endif; ?>        
    </ul>

    <!-- Lambda Functions -->
    <h1>Books (Lambda Functions)</h1>
    <?php
        $books = [
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
                'name' => 'Batang Quiapo',
                'author' => 'Coco Martin',
                'url' => 'https://example.com'
            ],
            [
                'name' => 'Ang Probinsyano',
                'author' => 'Coco Martin',
                'url' => 'https://example.com'
            ],
        ];

        $filteredBooks = array_filter($books, function($book) {
            return $book['author'] === 'Coco Martin';
        });
    ?>   

    <ul>
        <?php if (!empty($filteredBooks)) : ?>
            <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['url'] ?>">
                        <?= $book['name'] ?> - By <?= $book['author'] ?>
                    </a>     
                </li>     
            <?php endforeach; ?>
        <?php else : ?>
            <li>No books found</li>
        <?php endif; ?>        
    </ul>
</body>

</html>