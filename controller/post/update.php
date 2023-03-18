<?php

use Core\App;
use Core\Database;
use Core\Validator;

$config = require base_path("config");
$db=App::resolve(Database::class);
$errors = [];

if (!checkToken($_POST['token'], $_SESSION['token'])) {
    $errors['csrf'] = 'csrf problem';
}

if (!Validator::string($_POST['title'], 1, 100)) {
    $errors['title'] = "this is title more than 100 character required";
}

if (!Validator::string($_POST['body'])) {
    $errors['body'] = "this is body required";
}

if (empty($errors)) { 
    
    $query=$db->query("UPDATE `posts` SET 
    `title`=:title,`body`=:body,`user_id`=:user_id,`updated_at`=:updated_at WHERE id=:id",[
        'title' => $_POST['title'],
        'body' => $_POST['body'],
        'user_id' => 3,
        'updated_at'=>now(),
        'id'=>$_POST['id']
    ]);

    $_SESSION['success'] = "success update post";
    header("location: /posts");
    exit();
}
