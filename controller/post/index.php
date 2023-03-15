<?php

use Core\App;
use Core\Database;

$config=require base_path("config");

$db=App::resolve(Database::class);

$posts=$db->query("select * from posts where user_id= :user_id and deleted_at is null",['user_id'=>3])->get();

view('/post/index',[
    'heading'=>'My Posts',
    'config'=>$config,
    'posts'=>$posts
]);










