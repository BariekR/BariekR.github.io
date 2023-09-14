<?php 
  $username = "projectUser";
  $password = "Tennis23";
  $hostname = "localhost";
  $database = "projectDatabase";

  $connection = new mysqli($hostname, $username, $password, $database);

  if($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

?>