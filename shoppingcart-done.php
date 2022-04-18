<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
$login = "";
$dashboard = "";
    if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
        echo "Welcome, {$_SESSION["email"]} <br>";
        $login = "style='display:none;'";
        $dashboard = "style='display:inline;'";
    } else {
        $login = "style='display:inline;'";
        $dashboard = "style='display:none;'";
        // do something else
    }


    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Faqs</title>
    <link rel="shortcut icon" href="images/favicon.png"/>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="/images/favicon.png">




  </head>

  <body id="main">
    <?php include("./assets/php/header.php"); ?>

    <section class="shoppingcart-section">
      <div class="shoppingcart-container">
        <div class="shoppingcart-divider">
          <div class="shoppingcart-divider-section">
            <i class="fas fa-shopping-bag" style="opacity:50%;"></i>
            <span style="opacity:50%;">1. CART</span>
          </div>
          <div class="shoppingcart-divider-section">
            <i class="far fa-address-card" style="opacity:50%;"></i>
            <span style="opacity:50%;">2. SHIPPING & PAYMENT</span>
          </div>
          <div class="shoppingcart-divider-section">
            <i class="far fa-check-circle"></i>
            <span>3. DONE!</span>
          </div>
        </div>

        <section class="shoppingcart-done-section">
          <div class="shoppingcart-done">
            <h1 style="">THANK YOU!</h1>
            <p>Thanks for your purchase, and for supporting our business!</p>
            <i class="far fa-check-circle" style="margin-top:20px;"></i>
            <a href="homepage.php"><button type="button" name="button" class="button-done">BACK TO HOMEPAGE</button></a>
          </div>



        </section>

      </div>

    </section>

    <script src="javascript/script.js"></script>
    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
