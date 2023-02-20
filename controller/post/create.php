<?php
$heading="Create Posts";
$config=require('config.php');
$db=new Database($config['database']);

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $db->query("INSERT INTO `posts` (`title`, `body`, `user_id`) VALUES (:title, :body, :user_id)",[
        'title'=>$_POST['title'],
        'body'=>$_POST['body'],
        'user_id'=>3,
    ]);
}


require $config['base_views']."/post/create.view.php";