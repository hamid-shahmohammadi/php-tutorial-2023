<?php

$config=require BASE_DIR."config.php";

$db=new Database($config['database']);

$posts=$db->query("select * from posts where user_id= :user_id",['user_id'=>3])->get();


// require $config['base_views']."/post/index.view.php";
view('/post/index',[
    'heading'=>'My Posts',
    'config'=>$config,
    'posts'=>$posts
]);








