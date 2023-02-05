<?php

require "helper.php";

// require "routes.php";

$dsn="mysql:host=localhost;port=3306;dbname=website;charset=utf8mb4";

$pdo=new PDO($dsn);

$statement=$pdo->prepare("select * from posts");

$statement->execute();

$posts=$statement->fetchAll();

// dd($posts);

foreach($posts as $post){
    '<li>'.$post['title'].'</li>';
}


