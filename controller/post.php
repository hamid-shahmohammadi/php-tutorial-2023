<?php
$heading="Post";
$AuthUserId=3;

$config=require('config.php');
$db=new Database($config['database']);


// $post = $db->query(
//     'select * from posts where user_id = :user_id and id = :id',
//     [
//         'user_id'=> 3, // auth user
//         'id' => $_GET['id']
//     ]
// )->fetch();

$post = $db->query(
    'select * from posts where id = :id',
    [       
        'id' => $_GET['id']
    ]
)->fetch();

// if(! $post){
//     abort();
// }else{
//     require "views/post.view.php";
// }

if(!$post){
    abort();
}elseif(isset($post['user_id']) && $post['user_id'] !== $AuthUserId){  
    abort(Response::FORBIDDEN);
}else{
    require "views/post.view.php";
}









