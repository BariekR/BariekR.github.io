<?php
  // initial
  declare(strict_types = 1);

  // logic
  $inputSubscribeEmail = $_POST['subscribe-email'];
  addSubscribeEmailToDatabase($inputSubscribeEmail);
  
  // popup window  
  echo '<script type="text/javascript">
        alert("Thank you for subscribing to our newsletter.");
        window.location="index.php#get-special-price";
        </script>';

  // function
  function addSubscribeEmailToDatabase(string $email){
    require './connectToDatabase.php';

    $sql = $connection->prepare("INSERT INTO subscriptions (email) VALUES (?)");
    $sql->bind_param("s", $email);
    $sql->execute();

    $connection->close();
  }
?>