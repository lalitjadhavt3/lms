<?php
// Initialize the session
@session_start();
 // Initialize the session

session_destroy();
 
// Redirect to login page
header("location: login.php");

exit;
?>