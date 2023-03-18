<?php

use Core\App;
use Core\Database;

$AuthUserId = 3;

$db=App::resolve(Database::class);


$errors = [];


if (!checkToken($_POST['token'], $_SESSION['token'])) {
    $errors['csrf'] = 'csrf problem';
}

$post = $db->query(
    "select * from posts where id= :id",
    ['id' => $_POST['id']]
)->findOrFail();

autorize($post['user_id'] !== $AuthUserId);

if (empty($errors)) {

    $db->query("UPDATE `posts` SET `deleted_at`=:deleted_at WHERE id=:id", [
        'deleted_at' => now(),
        'id' => $_POST['id']
    ]);

    $_SESSION['success'] = "success delete post";

    header("location: /posts");
    exit();
}
