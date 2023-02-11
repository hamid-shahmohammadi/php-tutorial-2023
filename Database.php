<?php
class Database{    
    
    public $pdo;

    public function __construct($config,$username='root',$password='')
    {        
        $dsn='mysql:'.http_build_query($config,'',';');
        $this->pdo = new PDO($dsn, $username, $password);
    }

    public function query($query,$params=[])
    {
        $state=$this->pdo->prepare($query);
        $state->execute($params);
        return $state;
    }
}