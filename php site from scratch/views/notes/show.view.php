<?php require('views/partials/head.php') ?>

<?php require('views/partials/nav.php') ?>

<?php require('views/partials/header.php') ?>


<main>
  <h1>Note page</h1>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/notes" class="text-blue-500 underline">Go back...</a>
    </p>

    <p>
      <?= htmlspecialchars($note['body']) ?>
    </p>
  </div>
</main>

<?php require('views/partials/footer.php') ?>