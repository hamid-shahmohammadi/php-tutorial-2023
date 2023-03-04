<?php

use Core\Database;


$config=require base_path('config');
$db=new Database($config['database']);

$posts=$db->query('select * from posts where user_id = 3')->get();


view('post/index',[
    'heading'=>'My Posts',
    'config'=>$config,
    'posts'=>$posts
]);








