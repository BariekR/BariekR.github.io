<?php
  // initial
  declare(strict_types = 1);
  session_start();
  
  // variables
  $inputRegName = $_POST['reg-name'];
  $inputRegEmail = $_POST['reg-email'];
  $inputRegPass = $_POST['reg-pass'];

  $user = new User($inputRegName, $inputRegEmail, $inputRegPass);
  addUserToDatabase($user);

  $_SESSION['loggedInUser'] = $user->fullName;
  $_SESSION['loggedInEmail'] = $user->email;
  header("Location: ./account-logged-in.php");












  // function
  function addUserToDatabase(User $user) {
    require './connectToDatabase.php';

    $sql = $connection->prepare("INSERT INTO customers (fullName, email, pass) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $user->fullName, $user->email, $user->password);
    $sql->execute();

    $connection->close();
  }

  // class
  class User 
  {
    public string $fullName;
    public string $email;
    public string $password;

    function __construct($fullName, $email, $password)
    {
      $this->fullName = $fullName;
      $this->email = $email;
      $this->password = $password;
    }
  }
?>