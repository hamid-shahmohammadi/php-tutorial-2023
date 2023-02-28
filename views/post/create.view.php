<?php include $config["base_views"] . "/inc/head.php"; ?>
<?php include $config["base_views"] . "/inc/nav.php"; ?>

<header class="bg-white shadow flex py-6 px-4">
  <div class=" flex">
    <h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-blue-600"><?= $heading ?></h1>

  </div>
</header>

<div class="p-4">
  <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
    <div class="text-green-600"><?= $success ?? null ?></div>
    <form method="POST">
      <div class="form-group mb-6">
        <input value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>"
        name="title" type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" placeholder="Title" >
        <?php if (isset($errors['title'])) : ?>
          <div class="my-2 text-xs text-red-700" role="alert">
            <?= $errors['title'] ?>
          </div>
        <?php endif ?>
      </div>

      <div class="form-group mb-6">
        <textarea name="body" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      " id="exampleFormControlTextarea13" rows="3" placeholder="Body">
          <?= $_POST['body'] ?? '' ?>
      </textarea>
        <?php if (isset($errors['body'])) : ?>
          <div class="my-2 text-sm text-red-700" role="alert">
            <?= $errors['body'] ?>
          </div>
        <?php endif ?>
      </div>

      <button type="submit" class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Submit</button>
    </form>
  </div>
</div>
<?php include $config["base_views"] . "/inc/footer.php"; ?>