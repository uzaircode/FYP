<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "mysql";
$database = "product";

$connect = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");
if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                    'item_id'               =>     $_GET["id"],
                    'item_name'               =>     $_POST["hidden_name"],
                    'item_price'          =>     $_POST["hidden_price"],
                    'item_quantity'          =>     $_POST["quantity"]
               );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    } else {
        $item_array = array(
               'item_id'               =>     $_GET["id"],
               'item_name'               =>     $_POST["hidden_name"],
               'item_price'          =>     $_POST["hidden_price"],
               'item_quantity'          =>     $_POST["quantity"]
          );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Floral Burst - Paper Street</title>
      <link rel="shortcut icon" href="images/favicon/duck.ico"/>

      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <link rel="icon" href="/images/favicon.png">

  </head>
     <body>
       <?php include("./assets/php/header.php"); ?>

          <br />
          <div class="container" style="width:700px;">
               <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />
               <?php
               $query = "select * from product order by id ASC";

               $result = mysqli_query($connect, $query);
               if ($result && mysqli_num_rows($result) > 0) {
                   while ($row = mysqli_fetch_array($result)) {
                       ?>
               <div class="col-md-4">
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                         <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                              <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                              <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                              <input type="text" name="quantity" class="form-control" value="1" />
                              <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                              <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                         </div>
                    </form>
               </div>
               <?php
                   }
               }
               ?>
               <div style="clear:both"></div>
               <br />
               <h3>Order Details</h3>
               <div class="table-responsive">
                    <table class="table table-bordered">
                         <tr>
                              <th width="40%">Item Name</th>
                              <th width="10%">Quantity</th>
                              <th width="20%">Price</th>
                              <th width="15%">Total</th>
                              <th width="5%">Action</th>
                         </tr>
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
                              <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                         </tr>
                         <?php
                                   $total = $total + ($values["item_quantity"] * $values["item_price"]);
                             } ?>
                         <tr>
                              <td colspan="3" align="right">Total</td>
                              <td align="right">$ <?php echo number_format($total, 2); ?></td>
                              <td></td>
                         </tr>
                         <?php
                         }
                         ?>
                    </table>
               </div>
          </div>

          <div id="mySidenav" class="sidenav">
            <div class="percubaan">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <h2 id ="doThis" href="#">Your bag is empty</h2>
            <!-- <button type="button" name="button" class="cart-button">Keep Shopping</button> -->

            <div>
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
            </div>

          </div>
          <script src="javascript/script.js"></script>

     </body>
</html>
