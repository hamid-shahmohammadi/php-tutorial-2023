<?php include "inc/head.php"; ?>
<?php include "inc/nav.php"; ?>
<?php include "inc/header.php"; ?>
<div class="p-4">
       <!-- Jumbotron -->
  <div class="text-center bg-gray-50 text-gray-800 py-20 px-6">
    <h1 class="text-5xl font-bold mt-0 mb-6"><?= $post['title'] ?></h1>
    <h3 class="text-3xl font-bold mb-8"><?= $post['body'] ?></h3>
    <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/posts" role="button">Back to Posts</a>
  </div>
  <!-- Jumbotron -->
</div>
<?php include "inc/footer.php"; ?>