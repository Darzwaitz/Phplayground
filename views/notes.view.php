<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>



<main>
  <h1>Notes page</h1>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= $note['body'] ?>
          </a>
        </li>
      <?php endforeach ?>
      <?php // dd($note)  
      ?>
    </ul>
    <p class="mt-6">
      <a href="notes/create" class="text-blue-500 hover:underline">Create Note</a>
    </p>
  </div>
</main>

<?php require('partials/footer.php') ?>