<?php require('partials/head.php') ?>
<!-- <link rel="stylesheet" href="../../src/css/output.css"> -->
<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>

<main>
  <h1>Notes page</h1>
  <div class=" mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
    <div class="mx-auto max-w-2xl">
      <form method="POST">
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="col-span-full">
              <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
              <div class="mt-1">
                <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

</main>

<?php require('partials/footer.php') ?>