<?php include $config['base_views'] . "/inc/head.php"; ?>
<?php include $config['base_views'] . "/inc/nav.php"; ?>
<header class="bg-white shadow flex items-center">
    <div class="py-6 px-4">
        <h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-blue-600"><?= $heading ?></h1>
    </div>
    <div>
        <a href="<?php echo url("post/create"); ?>" type="button" class="flex-btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
            <span class="ml-2">Create Post</span>
        </a>
    </div>
</header>
<div class="p-4">
<div class="text-green-500 text-center"><?= $_SESSION['success'] ?? '' ?></div>
    <div class="flex justify-center">
        
        <ul class="bg-white rounded-lg border border-gray-200 w-96 text-blue-500 ">
            <?php foreach ($posts as $post) : ?>
                <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg ">
                    <a href="/post?id=<?= $post['id'] ?>">
                        <?= htmlspecialchars($post['title']) ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>
<?php include $config['base_views'] . "/inc/footer.php"; ?>