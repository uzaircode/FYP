<?php
session_start();



$login = "";
$dashboard = "";

    if (!empty($_SESSION["customer_email"])) {
        $login = "style='display:none;'";
        $dashboard = "style='display:inline;'";
    } else {
        $login = "style='display:inline;'";
        $dashboard = "style='display:none;'";
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
              <?php endif; ?>
              <?php
              if (!empty($_SESSION["shopping_cart"])) {
                  $total = 0;
                  foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                      ?>
              <tr>
                   <td><?php echo $values["item_name"]; ?></td>
                   <td><?php echo $values["item_quantity"]; ?></td>
                   <td>$ <?php echo $values["item_price"]; ?></td>
                   <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                   <td><a class="text-danger" href="notebook-productdetails.php?action=delete&product_id=<?php echo $values["item_id"]; ?>"><i class="far fa-times-circle" style="font-size:26px; margin:auto;"></i></a></td>
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

         <button type="button" name="button" class="checkout-shoppingcart"><a href="empty.php" style="color:white;">Go to cart</a></button>
  </div>
</div>



  <script src="javascript/script.js"></script>


</body>




</header>
