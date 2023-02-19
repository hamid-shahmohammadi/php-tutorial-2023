<?php
$heading="Create Posts";
$config=require('config.php');

if($_SERVER["REQUEST_METHOD"] === "POST"){
    dd($_POST);
}


require $config['base_views']."/post/create.view.php";