<?php 
  $numberOfItemsInCart;

  if(!isset($_COOKIE['cart-cookie'])) {
    $numberOfItemsInCart = 1;
  }
  else {
    $numberOfItemsInCart = $_COOKIE['cart-cookie'] + 1;
  }

  setcookie("cart-cookie", $numberOfItemsInCart, 0, "/");
  header("Location: ./index.php#recommended");
?>