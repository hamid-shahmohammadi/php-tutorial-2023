<?php

require 'Validator.php';
$heading="Create Posts";
$config=require('config.php');
$db=new Database($config['database']);

// dd(Validator::email('info@iranlaravel.ir'));

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $errors=[];
    
    
    if(! Validator::string($_POST['title'],1,100)){
        $errors['title']='the title is not more than 100 characters required';
    }
   
    if(! Validator::string($_POST['body'])){
        $errors['body']='the body is required';
    }

    if(empty($errors)){
        $db->query("INSERT INTO `posts` (`title`, `body`, `user_id`) VALUES (:title, :body, :user_id)",[
            'title'=>$_POST['title'],
            'body'=>$_POST['body'],
            'user_id'=>3,
        ]);
        $success='create post succes';
    }
}


require $config['base_views']."/post/create.view.php";