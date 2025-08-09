<?php 
 require_once __DIR__ . "/autoloader/autoloader.php";
// session
  session_start();
  //includ database congi 
 

  require_once __DIR__ . "/config/config.php";

  // load dataabse
  // require_once __DIR__ . "/classes/Database.php";

  //helper fucntions
  require_once __DIR__ . "/helper/helper.php";



  //define constants 
  define("APP_NAME", "CMS PDO SYSTEM");
     
  ?>