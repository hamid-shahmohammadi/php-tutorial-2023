<?php

$config=require base_path("config");
// require $config['base_dir'].'/Validator.php';
$db=new Database($config['database']);


if($_SERVER["REQUEST_METHOD"] === "POST"){
    $errors=[];
   
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
    }
    
}


// require $config['base_views']."/post/create.view.php";
view('post/create',[
    'config'=>$config,
    'heading'=>'Create Post',
    'errors'=> $errors ?? ''
]);








