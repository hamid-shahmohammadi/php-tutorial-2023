<?php
 class Database
 {
     
     public $dbh;
     public $statement;
 
     public function __construct($config,$username='root',$password='')
     {        
         $dbs = 'mysql:'.http_build_query($config,'',';');
        
         $this->dbh = new PDO($dbs,  $username, $password,[
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
         ]);
       
     }
     public function query($query,$params=[])
     {
         $this->statement = $this->dbh->prepare($query);
 
         $this->statement->execute($params);
 
         return $this;
     }
     public function find()
     {
        return $this->statement->fetch(PDO::FETCH_ASSOC);
     }
     public function findOrFail()
     {
        $result=$this->find();
        if(!$result){
            abort();            
        }
        return $result;
     }
     public function get()
     {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
     }
    
 }