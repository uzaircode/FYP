<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
$login = "";
$dashboard = "";
    if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
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
    <title>Shipping & Payment - Paper Street</title>
    <link rel="icon" href="images/favicon/duck.ico"/>

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
        <i class="far fa-address-card"></i>
        <span>2. SHIPPING & PAYMENT</span>
      </div>
      <div class="shoppingcart-divider-section">
        <i class="far fa-check-circle" style="opacity:50%;"></i>
        <span style="opacity:50%;">3. DONE!</span>
      </div>
    </div>

    <section class="shoppingcart-shipping-container">

      <div class="container-shipping">
        <h1>Confirm Your Payment</h1>
        <form action="insertorder.php" method="post" class="shoppingcart-shipping-form">
        <div class="first-row-shipping">
          <div class="owner">
            <h3>Owner</h3>
            <div class="input-field-shipping">
              <input type="text" title="email"  pattern="[a-zA-Z]*"  >
            </div>
          </div>
          <div class="cvv">
            <h3>CVV</h3>
            <div class="input-field-shipping">
              <input type="phone" pattern="[0-9]{3}" >
            </div>
            <br>
          </div>
        </div>
        <div class="second-row">
          <div class="card-number">
            <h3>Card Number</h3>
            <div class="input-field-shipping">
              <input type="phone" pattern="[0-9]{12}" >
            </div>
          </div>
        </div>
        <br>
        <div class="third-row">
          <div class="selection">
            <div class="date">
              <select name="months" id="months">
                <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="Jun">Jun</option>
                <option value="Jul">Jul</option>
                <option value="Aug">Aug</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
              </select>
              <select name="years" id="years">
                <option value="2020">2023</option>
                <option value="2019">2022</option>
                <option value="2018">2021</option>
                <option value="2017">2020</option>
                <option value="2016">2019</option>
                <option value="2015">2018</option>
              </select>
            </div>
            <div class="cards-shipping" style="margin-right:120px;">
              <img src="images/mc.png" alt="">
              <img src="images/vi.png" alt="">
            </div>
          </div>
        </div>
        <br>
        <a class="button-shipping"><button type="submit" name="submit">CONFIRM PAYMENT</button></a>
      </div>
    </form>
    </section>
</section>

    <script src="javascript/script.js"></script>
    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
