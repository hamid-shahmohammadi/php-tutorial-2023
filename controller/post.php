<?php
$heading="Post";
$config=require('config.php');
$db=new Database($config['database']);


$post=$db->query('select * from posts where id = :id',['id'=>$_GET['id']])->fetch();

require "views/post.view.php";








