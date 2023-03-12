<?php

use Core\Database;
use Core\Validator;

$config = require base_path("config");

$db = new Database($config['database']);

$errors = [];
$success = null;

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

    $db->query("INSERT INTO `posts` (`title`, `body`, `user_id`) VALUES
         ( :title, :body, :user_id);", [
        'title' => $_POST['title'],
        'body' => $_POST['body'],
        'user_id' => 3
    ]);

    $_SESSION['success'] = "success created post";
    header("location: /posts");
    exit();
}
