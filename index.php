<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Laracast</title>
</head>

<body>

  <!-- Variables -->
  <h1>
    <?php      
      $greeting = 'Hello';

      echo "$greeting PHP";
    ?>
  </h1>

  <!-- Conditional and Booleans -->
  <?php
      $book = 'Dark Matter';
      $read = true;

      if ($read) {
        $message = "You have read $book";
      } else {
        $message = "You have not read $book";
      }
  ?>
  <h1>
    <?= $message ?>
  </h1>

  <!-- Arrays -->
  <h1>Books</h1>
  <?php
    $books = [
      'book1',
      'book2',
      'book3'
    ];
  ?>
  <ul>
    <?php foreach ($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach; ?>
  </ul>

</body>

</html>