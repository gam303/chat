<?php
  $hostname = "localhost";
  $username = "id17087810_gchatapps";
  $password = "Gmgmgm330033@";
  $dbname = "id17087810_gchatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
