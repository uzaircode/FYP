<?php
session_start();

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "order";
$sql = "select * from `order`";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {

  $customer_id = $_SESSION['id'];

    foreach ($_SESSION["shopping_cart"] as $keys => $values)
    {
      $count = $count + 1;
      for ($i=0; $i <$count ; $i++) {
        $product_id = $values["item_id"];


        $query = "insert into invoice (customer_id,product_id) values ('$customer_id','$product_id')";

      }
      $run = mysqli_multi_query($conn, $query) or die(mysqli_error($conn));
    }


  if ($run) {
  } else {
      echo "not working!";
  }
}

?>


<?php
session_start();

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "order";
$sql = "select * from `order`";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {


  $customer_id = $_SESSION['id'];



    foreach ($_SESSION["shopping_cart"] as $keys => $values)
    {
      $count = $count + 1;
      for ($i=0; $i <$count ; $i++) {
        $total = 0;
        $product = $values["item_name"];
        $product_id = $values["item_id"];
        $item_price = $values["item_price"];
        $quantity = $values['item_quantity'];

        $total = $total + ($quantity * $item_price);
        $subtotal = $values[$total];

        $query = "insert into `order` (customer_id,product_id,order_quantity,order_subtotal,order_status) values ('$customer_id','$product_id','$quantity',$total,'Pending')";

      }
      $run = mysqli_multi_query($conn, $query) or die(mysqli_error($conn));
    }


  if ($run) {

    header("Location:shoppingcart-done.php");
  } else {
      echo "not working!";
  }
}

?>
