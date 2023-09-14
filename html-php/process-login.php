<?php
  // initial
  declare(strict_types = 1);
  session_start();
  
  // variables
  $inputLoginEmail = $_POST['form-email'];
  $inputLoginPassword = $_POST['form-pass'];
  $loginIsValid = isLoginValid($inputLoginEmail, $inputLoginPassword);

  // logic
  if($loginIsValid) {    
    header("Location: ./account-logged-in.php");
  }
  else {
    header("Location: ./account.php?invalidLoginInfo=The+e-mail+or+password+is+invalid");
  }












  // functions
  function isLoginValid(string $emailInput, string $passwordInput) : bool {
    require './connectToDatabase.php';
    $sql = $connection->prepare("SELECT * FROM customers WHERE email = ? AND pass = ?");
    $sql->bind_param("ss", $emailInput, $passwordInput);
    $sql->execute();
    $results = $sql->get_result();
    $connection->close();

    if($results->num_rows > 0) {
      $row = $results->fetch_assoc();
      $_SESSION['loggedInEmail'] = $row["email"];
      $_SESSION['loggedInUser'] = $row["fullName"];
      return true;
    }
    return false;

  }
?>