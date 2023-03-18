<?php include $config['base_views'] . "/inc/head.php"; ?>
<?php include $config['base_views'] . "/inc/nav.php"; ?>
<?php include $config['base_views'] . "/inc/header.php"; ?>
<div class="p-4">
  <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
    <div class="text-green-700"><?= $success ?? null ?></div>
    <form action="<?= url('post/update') ?>" method="POST">
      <div class="form-group mb-6">        
        <input type="hidden" name="id" value="<?= $post['id'] ?>"/>
        <input type="hidden" name="token" value="<?= csrf() ?>"/>
        <input value="<?= $post['title'] ?>"
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
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" 
        placeholder="Title" required>  
         
        
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
      " id="body" rows="3" placeholder="Body" required><?= $post['body'] ?></textarea>    
       
      </div>
      <button type="submit" class="      
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
      ease-in-out">Update</button>
      <a href="<?= url('post/update') ?>" type="submit" class="      
      px-6
      py-2.5
      bg-blue-100
      text-black
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg hover:text-white
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Cancle</a>
    </form>
  </div>
</div>
<?php include $config['base_views'] . "/inc/footer.php"; ?>