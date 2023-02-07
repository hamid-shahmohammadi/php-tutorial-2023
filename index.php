<?php

require "helper.php";

// require "routes.php";

class Database
{
    public $host = "localhost";
    public $db = "website";
    public $user = "root";
    public $password = "";
    public $dbh;
    public $statement;

    public function __construct()
    {
        $dbs = "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4";
        $this->dbh = new PDO($dbs,  $this->user, $this->password);
        $this->dbh->exec("set names utf8mb4");
    }
    public function query($query)
    {
        $this->statement = $this->dbh->prepare($query);

        $this->statement->execute();

        return $this->statement;
    }
   
}

$db=new Database();

$posts=$db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
// dd($posts);

foreach($posts as $post){
    echo '<li>'.$post['title'].'</li>';
}


