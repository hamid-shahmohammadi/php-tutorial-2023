<?php
$heading="My Posts";
$config=require('config.php');
$db=new Database($config['database']);


$posts=$db->query('select * from posts where user_id = 3')->fetchAll();



require "views/posts.view.php";








