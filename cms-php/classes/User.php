<?php 

  class User {

  private  $connect = null;

  private $table = 'users';
    


   public  function __construct() {
   
      $database  = new Database();
      $this->connect = $database->getConnection();
    
   }

   public function createUser($username, $email,$password): bool{
    // we will create the user 
    $query = "INSERT INTO " .$this->table . " (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $this->connect->prepare($query);
    $hashedPassword = password_hash($password,PASSWORD_BCRYPT);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $results = $stmt->execute();
    //
    if($results){
        return true;
    }else {
        return false;
    }
   }

  }