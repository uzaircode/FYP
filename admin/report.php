<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "order";
$conn = mysqli_connect($server, $username, $password, $dbname);

$id = isset($_GET['id']) ? $_GET['id'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$phone = isset($_GET['phone']) ? $_GET['phone'] : '';


$sql = "select * from `order` where id='$id'";
$result = $conn-> query($sql);

$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
     ?>



<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Invoices Details - Paper Street</title>
      <link rel="stylesheet" href="../css/report.css">
      <link rel="shortcut icon" href="../images/favicon/duck.ico"/>

  </head>
  <body>
    <div class="page" size="A4">
        <!--Top Section-->
        <div class="top-section">
            <div class="address">
               <div class="address-content">
                    <h2>Paper Street</h2>
                   <p>Paper Street Sdn Bhd </p>
               </div>
            </div>
            <div class="contact">
                <div class="contact-content">
                    <div class="email">Email :   <span class="span">PaperStreet@gmail.com</span> </div>
                    <div class="number">Number : <span class="span">018-900-2414</span>
                    </div>
                </div>
            </div>
        </div>
        <!--Invoice Ingoi-->
        <div class="billing-invoice">
            <div class="title">
                Billing Invoice
            </div>
        </div>

        <!--Billed to-->
        <div class="billing-to">
            <div class="title"> Billed to </div>
            <div class="billed-sec">
                <div class="name">
                  <?php echo $row["id"]; ?>
                </div>
                <p><?php echo $row["email"]; ?></p>
                <p>+60<?php echo $row["phone"]; ?></p>
            </div>


        <div class="billed-sec">
            <div class="sub-title">Shipping Address</div>
            <div class="ship-add">No 6 Jalan BF 11/11 Tamam Bangun Perdana, 40900</div>
        </div>
     </div>
         <!--Invoice Table-->
      <div class="table">
        <table>
          <thead>
            <tr>
                <th>No.</th>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Subtotal</th>
                <th>Shipping</th>
                <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $server = "localhost";
            $username = "root";
            $password = "mysql";
            $dbname = "order";
            $conn = mysqli_connect($server, $username, $password, $dbname);
            $sql = "select * from `order`";
            $result = $conn-> query($sql);


            if ($result->num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                  echo "</tr><td>" . $row["id"] . "</td><td>" . $row["product"] ?>
                  <?php
                }
            }
                $conn -> close();
                 ?>
          </tbody>
        </table>
      </div>
<!--Bottom Section-->
 <div class="bottom-section">
    <div class="status-content">
        <h4>Payment Status</h4>
        <p class="status paid"></p>
        <p class="tnx">Thank You for Shopping!</p>
    </div>
 </div>
 </div>





  </body>
</html>
