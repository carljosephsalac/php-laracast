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
  <?php require base_path('views/partials/nav.php') ?>

  <?php require base_path('views/partials/header.php') ?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p><?= htmlspecialchars($note['body']) ?></p>
      <form class="mt-4" action="" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button class="text-red-500" type="submit">Delete</button>
      </form>
    </div>
  </main>
</div>

</body>
</html>