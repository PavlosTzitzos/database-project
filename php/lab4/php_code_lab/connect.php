<?php
$con = mysqli_connect("localhost","your_username","your_mysql_password","your_db_name");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>