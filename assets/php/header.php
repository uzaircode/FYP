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


<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<header>

  <link rel="stylesheet" href="fontawesome-free-4.5.0-web/css/all.css">

  <body>
    <a href="homepage.php"><h1 class="header-title">Paper Street</h1></a>

  <nav>
    <ul class="nav_links">
      <li><a href="aboutUs.php">ABOUT US</a></li>
      <li><a href="notebook-productlist.php">NOTEBOOKS</a></li>
      <li><a href="#">STATIONERY</a></li>
      <li><a href="#">WEDDING</a></li>
      <li><i class="fas fa-shopping-bag" style="font-size:25px;cursor:pointer" onclick="openNav()"></i></li>
      <li <?php echo $login;?>><a href="login.php"><i class="fas fa-user" style="font-size:25px;cursor:pointer" onclick="openNav()"></i></li></a>
      <li <?php echo $dashboard;?>><a href="dashboard.php"><i class="fa fa-user-check" style="font-size:25px;cursor:pointer" onclick="openNav()"></i></li></a>



    </ul>

  </nav>



  <div id="mySidenav" class="sidenav">
    <div class="percubaan">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <!-- <button type="button" name="button" class="cart-button">Keep Shopping</button> -->
    <div class="table-responsive">
         <table class="table-bordered">
              <tr>
                   <th width="40%">Item Name</th>
                   <th width="10%">Quantity</th>
                   <th width="20%">Price</th>
                   <th width="15%">Total</th>
                   <th width="5%">Action</th>
              </tr>
              <?php if (empty($_SESSION["shopping_cart"])): ?>
                <h2 id ="doThis" href="#" style="display:block">Your cart is empty</h2>
              <?php endif; ?>
              <?php
              if (!empty($_SESSION["shopping_cart"])) {
                  $total = 0;
                  foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                      ?>
                      <script>
                      document.getElementById("doThiss").style.display = "none";
                      </script>
                      <h2 id ="doThiss" href="#" style="display:block">Your shopping cart</h2>

              <tr>
                   <td><?php echo $values["item_name"]; ?></td>
                   <td><?php echo $values["item_quantity"]; ?></td>
                   <td>$ <?php echo $values["item_price"]; ?></td>
                   <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                   <td><a class="text-danger" href="notebook-productdetails.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span >Remove</span></a></td>
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

         <button onclick="shoppingCart()" type="button" name="button" class="checkout-shoppingcart">Go to cart</button>
  </div>

  <!-- <div>
    <hr id ="hr-shoppingcart" style="display:none">
    <h2 id ="doThisz" href="#" style="display:none"><?php echo $values["item_name"]; ?></h2>
    <div class="quantity-shoppingcart">
      <h2 id ="doThiszzd"style="display:none;">Quantity  : </h2>
      <a href="#" id="counter-label" style="display:none;">0</a>
    </div>
    <hr id ="doThiszz" style="display:none">
    <div class="subtotal-shoppingcart">
      <h2 id ="doThisze" href="#" style="display:none">Subtotal :</h2>
      <a id ="doThiszee" href="#" style="display:none;">RM29.90</a>
    </div>
    <hr id ="doThiszzz" style="display:none">
    <button onclick="shoppingCart()" id ="checkout-shoppingcart" type="button" name="button" style="display:none">Check Out</button>
    <button onclick="closeNav()" id ="keepshopping-shoppingcart" type="button" name="button" style="display:none">Keep Shopping</button>
  </div> -->
</div>



  <script src="javascript/script.js"></script>


</body>




</header>
