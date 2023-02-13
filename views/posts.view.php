<?php include "inc/head.php"; ?>
<?php include "inc/nav.php"; ?>
<?php include "inc/header.php"; ?>
<div class="p-4">
    <div class="flex justify-center">
        <ul class="bg-white rounded-lg border border-gray-200 w-96 text-blue-500">
            <?php foreach ($posts as $post) : ?>
                <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">
                    <a href="/post?id=<?= $post['id'] ?>">
                        <?= $post['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>
<?php include "inc/footer.php"; ?>