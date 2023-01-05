<?php

// Enter your Host, username, password, database below.

// I left password empty because i do not set password on localhost.

$con = mysqli_connect("localhost","root","","mmiti");
//$con = mysqli_connect("localhost","kaikotec_admin","Info@kkt.com","kaikotec_colony");


// Check connection

if (mysqli_connect_errno())

  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }

  else



  {

  	

  }

?>