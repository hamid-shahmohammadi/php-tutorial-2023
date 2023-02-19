<?php
$heading="My Posts";
$config=require('config.php');
$db=new Database($config['database']);

$posts=$db->query('select * from posts where user_id = 3')->get();

require "views/post/index.view.php";








