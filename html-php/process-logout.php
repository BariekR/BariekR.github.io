<?php
  // initial
  session_start();
  
  // logic  
  unset($_SESSION['loggedInUser']);
  unset($_SESSION['loggedInEmail']);
  header("Location: ./index.php");

?>