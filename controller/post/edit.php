<?php

use Core\App;
use Core\Database;

$config=require base_path("config");

$AuthUserId = 3;

$db=App::resolve(Database::class);


$post = $db->query(
    "select * from posts where id= :id",
    ['id' => $_GET['id']]
)->findOrFail();

autorize($post['user_id'] !== $AuthUserId);

view('post/edit',[
    'config'=>$config,
    'heading'=>'Edit Post',
    'post'=>$post
  
]);








