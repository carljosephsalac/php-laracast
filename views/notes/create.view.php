<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>Document</title>
</head>
<body class="h-full">

<div class="min-h-full">
  <?php require 'views/partials/nav.php'?>

  <?php require 'views/partials/header.php'?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <form method="POST">
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
              <div class="col-span-full">
                <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
                <div class="mt-2">
                  <textarea id="body" name="body" rows="3" 
                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"><?= $_POST['body'] ?? '' ?></textarea>
                  <?php if (isset($errors['body'])) : ?>
                    <p class="text-red-500 text-xs mt-2">
                      <?= $errors['body'] ?>
                    </p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-6 flex items-center justify-center gap-x-6">
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
    </div>
  </main>
</div>

</body>
</html>