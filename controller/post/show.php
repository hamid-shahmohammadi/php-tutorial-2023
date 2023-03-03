<?php


$AuthUserId=3;
$config=require BASE_DIR."config.php";
$db=new Database($config['database']);

$post=$db->query("select * from posts where id= :id",
['id'=>$_GET['id']]
)->findOrFail();

autorize($post['user_id'] !== $AuthUserId);


view('post/show',[
    'config'=>$config,
    'heading'=>'Show Post',
    'post'=>$post
]);










