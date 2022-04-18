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
            // echo '<script>alert("Item Already Added")</script>';
            // echo '<script>window.location="notebook-productdetails.php"</script>';
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
                echo '<script>alert("Item Removded")</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Floral Burst - Paper Street</title>
    <link rel="shortcut icon" href="images/favicon/duck.ico"/>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="/images/favicon.png">
  </head>

  <body id="main">
    <?php include("./assets/php/header.php"); ?>



    <div class="productdetails-section">

        <div class="productdetails-box-left">
          <h1>Floral Burst Notebook by Micke Lindebergh for Wrap</h1>
          <h2>RM29.00</h2>
          <p>Illustrated by the wonderful Micke Lindebergh and produced by Wrap, this notebook, with its super bright abstract floral design is perfect for happy jottings.</p>
          <p>These beautiful stationery products are produced using fine quality paper stock, with a thread sewn spine and gold foiled 'Notes' detail to the front.</p>
          <p>Made in the MY using responsibly sourced paper</p>


          <div>
               <?php
               $query = "SELECT * FROM product where id= '1'";

               $result = mysqli_query($connect, $query);
               if ($result && mysqli_num_rows($result) > 0) {
                   while ($row = mysqli_fetch_array($result)) {
                       ?>


               <div class="col-md-4">
                    <form class="productdetails-php" method="post" action="notebook-productdetails.php?action=add&id=<?php echo $row["id"]; ?>">
                           <!-- <img  src="'.$row['image'].'" /> -->
                           <!-- <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />   -->
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                            <button onclick="help()" type="submit" name="add_to_cart" class="btn-success" value="Add to Cart">Add to Cart</button>
                            <input class="productdetails-quantity" type="text" name="quantity" value="1" />
                    </form>
               </div>
               <?php
                   }
               }
               ?>

          </div>

          <div class="faq" style="border-bottom: 2px solid #ffffff; margin-top:55px;">
            <div class="question-productdetails">
              <a href="#" onClick="return false;">Size</a>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="answer">
              <p>Size: 160 x 210mm</p>
            </div>
          </div>
          <div class="faq" style="border-bottom: 2px solid #ffffff;">
            <div class="question-productdetails">
              <a href="#" onClick="return false;">Paper quality</a>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="answer">
              <p>Pages: 64 smooth plain pages</p>
            </div>
          </div>
          <div class="faq" style="border-bottom: 2px solid #ffffff;">
            <div class="question-productdetails">
              <a href="#" onClick="return false;">What's inside?</a>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="answer">
              <p>7 lined sides at the back for notes.</p>
            </div>
          </div>
        </div>
        <div class="productdetails-box-right">
          <img src="images/floral-notebook.jpg" alt="">
        </div>

    </div>

    <div id="mySidenav" class="sidenav">


    </div>

    <script src="javascript/script.js"></script>

    <?php include("./assets/php/footer.php"); ?>


  </body>
</html>
