<?php 
  

  
 class Database {

     private $connection;
     private $db_host = DB_HOST;
     private $db_name = DB_NAME;
     private $db_user = DB_USERNAME;
     private $db_password = DB_PASSWORD;


    public function __construct() {
        $this->connection = null;
        
        try {
          
            $this->connection = new PDO("mysql:host={$this->db_host};dbname={$this->db_name};charset=utf8mb4",$this->db_user, $this->db_password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //
        }catch(PDOException $error){
             echo "Connection failed : " . $error->getMessage();
        };
        
    }


    public function getConnection() {
        return $this->connection;
    }


 }