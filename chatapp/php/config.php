<?php
  $hostname = "localhost";
  $username = "###";
  $password = "###";
  $dbname = "###";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
  $conn->set_charset('utf8mb4');
?>