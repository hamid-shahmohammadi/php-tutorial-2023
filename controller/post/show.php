<?php

use Core\App;
use Core\Database;

$AuthUserId = 3;
$config=require base_path("config");
$db=App::resolve(Database::class);
$errors = [];

$post = $db->query(
    "select * from posts where id= :id",
    ['id' => $_GET['id']]
)->findOrFail();

autorize($post['user_id'] !== $AuthUserId);


view('post/show', [
    'config' => $config,
    'heading' => 'Show Post',
    'post' => $post,
    'errors' => $errors
]);
