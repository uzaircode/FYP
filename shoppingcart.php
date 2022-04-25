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
    <title>Cart - Paper Street</title>
    <link rel="icon" href="images/favicon/duck.ico"/>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




  </head>

  <body id="main">
    <?php include("./assets/php/header.php"); ?>

    <section class="shoppingcart-section">
    <div class="shoppingcart-container">
      <div class="shoppingcart-divider">
        <div class="shoppingcart-divider-section">
          <i class="fas fa-shopping-bag"></i>
          <span>1. CART</span>
        </div>
        <div class="shoppingcart-divider-section">
          <i class="far fa-address-card" style="opacity:50%;"></i>
          <span style="opacity:50%;">2. SHIPPING & PAYMENT</span>
        </div>
        <div class="shoppingcart-divider-section">
          <i class="far fa-check-circle" style="opacity:50%;"></i>
          <span style="opacity:50%;">3. DONE!</span>
        </div>
      </div>
      <div class="table-responsive">
           <table class="table-bordered">
                <tr>
                <th width="5%">Action</th>
                 <th width="40%">Product</th>
                 <th width="20%">Price</th>
                 <th width="10%">Quantity</th>
                 <th width="15%">Subtotal</th>
                 <br>
                </tr>
                <?php if (empty($_SESSION["shopping_cart"])): ?>
                  <!-- <h2 id ="doThis" href="#" style="display:block">Your cart is empty</h2> -->
                <?php endif; ?>
                <?php
                if (!empty($_SESSION["shopping_cart"])) {
                    $total = 0;
                    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                        ?>
                        <!-- <h2 id ="doThis" href="#" style="display:block">Your shopping cart</h2> -->
                <tr>

                  <td><a class="text-danger" href="notebook-productdetails.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span ><i class="far fa-times-circle" style="font-size:26px; margin:auto;"></i></span></a></td>
                  <td><?php echo $values["item_name"]; ?></td>
                  <td>$ <?php echo $values["item_price"]; ?></td>
                  <td><?php echo $values["item_quantity"]; ?></td>
                  <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                </tr>
                <?php
                          $total = $total + ($values["item_quantity"] * $values["item_price"]);
                    } ?>
                <tr>
                     <td colspan="3" align="right">Total</td>
                     <td align="right">$ <?php echo number_format($total, 2); ?></td>
                     <td></td>
                </tr>
                <h2 id ="doThis" href="#" style="display:none">Bag</h2>
                <?php
                }
                ?>
           </table>
    </div>
      <div class="shoppingcart-cart">
        <div class="shoppingcart-cart-left">
          <div style="display: flex; column-gap: 10px; margin-top:6px; margin-bottom:6px;">
          </div>
          <a href="shoppingcart-shipping.php"><button type="button" name="button">Checkout</button></a>
        </div>
        <div style="margin-top:30px;">
          <img src="images/gift.jpeg" alt="" style="height:329px; width:329px;">
          <p style="text-align:center; margin-top:10px;"><a href="productlist-neqah.html">Need some gifting ideas?</a></p>
        </div>
      </div>
      <div class="icon-shoppingcart">
        <div class="icon-shoppingcart-sec1">
          <i class="fas fa-money-check-alt"></i>
          <p>Fast & secured online banking payment.</p>
        </div>
        <div class="icon-shoppingcart-sec1">
          <i class="fas fa-shipping-fast"></i>
          <p>Fast shipment within 3 working days.</p>
        </div>
        <div class="icon-shoppingcart-sec1">
          <i class="fas fa-user-tag"></i>
          <p>30 days warranty, money back guarantee.</p>
        </div>

      </div>
      <div style="text-align:center; margin-top:40px;">
        <img src="images/payment-method.jpeg" alt="" style="width:888px;">
      </div>

    </div>
  </section>

    <script src="javascript/script.js"></script>
    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
