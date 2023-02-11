<?php

require "helper.php";
require "Database.php";

// require "routes.php";
$config=require "config.php";
$db=new Database($config['database']);

$id=$_GET['id'];
$query="select * from posts where id = :id";
// dd($query);
$post=$db->query($query,['id' => $id])->fetchAll(PDO::FETCH_ASSOC);

dd($post);






