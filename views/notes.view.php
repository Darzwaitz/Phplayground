<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>



<main>
  <h1>Notes page</h1>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $note) : ?>
      <li>
        <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
          <?= $note['body'] ?>
        </a>
      </li>
    <?php endforeach ?>
    <!-- <?php dd($note) ?> -->
  </div>
</main>

<?php require('partials/footer.php') ?>