<?php

use Core\App;
use Core\Database;
use Core\Validator;

$config = require base_path("config");
$db = App::resolve(Database::class);
$AuthUserId = 3;
$errors = [];

if (!checkToken($_POST['token'], $_SESSION['token'])) {
    $errors['csrf'] = 'csrf problem';
}

if (!Validator::string($_POST['title'], 1, 10)) {
    $errors['title'] = "this is title more than 100 character required";
}

if (!Validator::string($_POST['body'])) {
    $errors['body'] = "this is body required";
}

$post = $db->query(
    "select * from posts where id= :id",
    ['id' => $_POST['id']]
)->findOrFail();

autorize($post['user_id'] !== $AuthUserId);

if (count($errors)) {
    view('post/edit', [
        'config' => $config,
        'heading' => 'Edit Post',
        'post' => $post,
        'errors' => $errors
    ]);
}else{
    $query = $db->query("UPDATE `posts` SET 
        `title`=:title,`body`=:body,`user_id`=:user_id,`updated_at`=:updated_at WHERE id=:id", [
        'title' => $_POST['title'],
        'body' => $_POST['body'],
        'user_id' => 3,
        'updated_at' => now(),
        'id' => $_POST['id']
    ]);
    
    $_SESSION['success'] = "success update post";
    header("location: /posts");
    exit();

}


