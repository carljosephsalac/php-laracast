<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="h-full">

<div class="min-h-full">
  <?php require 'partials/nav.php'?>

  <?php require 'partials/header.php'?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <?php foreach($notes as $note) : ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underlined">
            <?= $note['body'] ?>
          </a>
        </li>
      <?php endforeach; ?>
      <a href="/notes/create" class="mt-6 inline-block text-blue-500 hover:underlined">
        Create Notes
      </a>
    </div>
  </main>
</div>

</body>
</html>