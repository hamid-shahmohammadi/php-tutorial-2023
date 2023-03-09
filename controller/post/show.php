<?php

use Core\Database;


$AuthUserId = 3;
$config = require BASE_DIR . "config.php";
$db = new Database($config['database']);
$errors=[];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if(!checkToken($_POST['token'],$_SESSION['token'])){
        $errors['csrf']='csrf problem';
    }

    $post = $db->query(
        "select * from posts where id= :id",
        ['id' => $_GET['id']]
    )->findOrFail();

    autorize($post['user_id'] !== $AuthUserId);
    
    if(empty($errors)){        

        $db->query("UPDATE `posts` SET `deleted_at`=:deleted_at WHERE id=:id",[
            'deleted_at'=>now(),
            'id'=>$_POST['id']
        ]);
    
        header("location: /posts");
        exit();

    }  


} else {
    $post = $db->query(
        "select * from posts where id= :id",
        ['id' => $_GET['id']]
    )->findOrFail();

    autorize($post['user_id'] !== $AuthUserId);


    view('post/show', [
        'config' => $config,
        'heading' => 'Show Post',
        'post' => $post,
        'errors'=>$errors
    ]);
}
