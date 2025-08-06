<?php 
  

  
 class Database {

     public $connection;
     private $db_host = DB_HOST;
     private $db_name = DB_NAME;
     private $db_user = DB_USERNAME;
     private $db_password = DB_PASSWORD;


    public function __construct() {
        $this->connection = null;

        
        
    }


 }