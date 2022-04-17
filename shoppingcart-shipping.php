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
        <i class="far fa-address-card"></i>
        <span>2. SHIPPING & PAYMENT</span>
      </div>
      <div class="shoppingcart-divider-section">
        <i class="far fa-check-circle" style="opacity:50%;"></i>
        <span style="opacity:50%;">3. DONE!</span>
      </div>
    </div>

    <section class="shoppingcart-shipping-container">


      <div class="shoppingcart-shipping">
        <div>
          <div style="width:100%;">
            <label for="name" class="username">FIRST NAME</label> <br>
            <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>
          </div>
        </div>
        <label for="name" class="username" style="margin-top:10px;">COMPANY NAME (OPTIONAL)</label> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>

        <label for="name" class="username">COUNTRY / REGION </label> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>

        <label for="name" class="username">STREET ADDRESS</label> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>

        <label for="name" class="username">CITY</label> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>

        <label for="name" class="username">STATE</label> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>

        <label for="name" class="username">POSTCODE</label> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>

        <label for="name" class="username">PHONE</label> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>

        <label for="name" class="username">EMAIL ADDRESS</label> <br>
        <input type="text" name="name" size="50" class="field-input" style="padding-left:5px; margin-bottom:10px;"> <br>

      </div>
      <div class="container-shipping">
        <h1>Confirm Your Payment</h1>
        <div class="first-row-shipping">
          <div class="owner">
            <h3>Owner</h3>
            <div class="input-field-shipping">
              <input type="text">
            </div>
          </div>
          <div class="cvv">
            <h3>CVV</h3>
            <div class="input-field-shipping">
              <input type="password">
            </div>
          </div>
        </div>
        <div class="second-row">
          <div class="card-number">
            <h3>Card Number</h3>
            <div class="input-field-shipping">
              <input type="text">
            </div>
          </div>
        </div>
        <div class="third-row">
          <h3>Card Number</h3>
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
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
              </select>
            </div>
            <div class="cards-shipping">
              <img src="images/mc.png" alt="">
              <img src="images/vi.png" alt="">
              <img src="images/pp.png" alt="">
            </div>
          </div>
        </div>
        <a href="shoppingcart-done.php" class="button-shipping"><button type="button" name="button" >CONFIRM PAYMENT</button></a>
      </div>
    </section>
</section>

    <script src="javascript/script.js"></script>
    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
