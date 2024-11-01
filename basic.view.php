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
    <h1><?= $message ?></h1>

    <!-- Arrays -->
    <h1>Books (Arrays)</h1>
    <ul>
        <?php foreach ($booksArray as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

  <!-- Associative Arrays -->
  <h1>Books (Associative Arrays)</h1>   
    <ul>
        <?php foreach ($booksAssociativeArray as $book) : ?>
            <li>
                <a href="<?= $book['url'] ?>">
                    <?= $book['name'] ?> - By <?= $book['author'] ?>
                </a>     
            </li>    
        <?php endforeach; ?>
    </ul>
        
  <!-- Functions and Filter -->
  <h1>Filtered Books (Functions and Filter)</h1>           
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
    <ul>
        <?php if (!empty($filteredBooksLambda)) : ?>
            <?php foreach ($filteredBooksLambda as $book) : ?>
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