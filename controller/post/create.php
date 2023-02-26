<?php
$heading="Create Posts";
$config=require('config.php');
$db=new Database($config['database']);

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $errors=[];
    
    if(strlen($_POST['title']) === 0){
        $errors['title']='the title is required';
    }
    if(strlen($_POST['title']) > 100){
        $errors['title']='the title can not more than 100 characters.';
    }
    if(strlen($_POST['body']) === 0){
        $errors['body']='the body is required';
    }

    if(empty($errors)){
        $db->query("INSERT INTO `posts` (`title`, `body`, `user_id`) VALUES (:title, :body, :user_id)",[
            'title'=>$_POST['title'],
            'body'=>$_POST['body'],
            'user_id'=>3,
        ]);
    }

}


require $config['base_views']."/post/create.view.php";