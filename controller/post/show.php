<?php

use Core\Database;

$AuthUserId=3;

$config=require base_path('config');
$db=new Database($config['database']);



$post = $db->query(
    'select * from posts where id = :id',
    [       
        'id' => $_GET['id']
    ]
)->findOrFail();


athorize($post['user_id'] === $AuthUserId);


view('post/show',[
    'heading'=>'Post',
    'config'=>$config,
    'post'=>$post,

]);










