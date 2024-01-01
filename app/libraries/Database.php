<?php
   class Database {
    private $dbname = CONFIG['db'];
    private $user = CONFIG['db_user'];
    private $pass = CONFIG['db_password'];

    public $dbh;

    public function __construct(){
    try{
      $this->dbh = new PDO($this->dbname, $this->user, $this->pass);
     }catch(PDOException $e){
    echo $e->getMessage();
     }
    }


  }