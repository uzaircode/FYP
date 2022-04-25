<?php
session_start();

if (empty($_SESSION["customer_email"])) {
  header("Location: login.php");
}else {
  header("Location: shoppingcart.php");
}

 ?>
