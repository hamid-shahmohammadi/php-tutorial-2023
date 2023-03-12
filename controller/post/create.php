<?php

use Core\Database;
use Core\Validator;

$config=require base_path("config");

$db=new Database($config['database']);

$errors=[];
$success=null;


if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(!isset($_POST['token']) || !isset($_SESSION['token'])){
        $errors['csrf']='CSRF Token Not Set';
    }elseif($_POST['token'] != $_SESSION['token']){
        $errors['csrf']='CSRF Token Not Match';
    }

   
    if(! Validator::string($_POST['title'],1,100)){
        $errors['title']="this is title more than 100 character required";
    }
    
    if(! Validator::string($_POST['body'])){
        $errors['body']="this is body required";
    }
   

    if(empty($errors)){

        $db->query("INSERT INTO `posts` (`title`, `body`, `user_id`) VALUES
         ( :title, :body, :user_id);",[
            'title'=>$_POST['title'],
            'body'=>$_POST['body'],
            'user_id'=>3]);

            $success="success created post";
    }
    
}



view('post/create',[
    'config'=>$config,
    'heading'=>'Create Post',
    'errors'=> $errors,
    'success'=>$success
]);








