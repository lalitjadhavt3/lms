<?php
    include 'core/Dbconfig.php';
    @session_start();
    ///print_r($_SESSION);
    //exit;
    if(isset($_SESSION["user_name"]) && isset($_SESSION["mmitibackend"]) && isset($_SESSION["user_type"]))
      {
        
      }
      else{
            echo" you are not recognized"; 
            echo '<script>window.location.replace("'.SITE_URL.'login.php");</script>';
            exit;
      }
?>