<?php
class Database{    
    
    public $pdo;
    protected $state;

    public function __construct($config,$username='root',$password='')
    {        
        $dsn='mysql:'.http_build_query($config,'',';');
        $this->pdo = new PDO($dsn, $username, $password);
    }

    public function query($query,$params=[])
    {
        $this->state=$this->pdo->prepare($query);
        $this->state->execute($params);
        return $this;
    }
    public function get()
    {
        return $this->state->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find()
    {
        return $this->state->fetch(PDO::FETCH_ASSOC);
    }
    public function findOrFail()
    {
        $result=$this->find();
        if(! $result){
            abort();
        }
        return $result;
    }
}