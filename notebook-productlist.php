

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Notebooks & Postcards - Paper Street</title>
    <link rel="shortcut icon" href="images/favicon/duck.ico"/>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="/images/favicon.png">




  </head>

  <body id="main">
    <?php include("./assets/php/header.php"); ?>
    <?php
      include("config/config.php");
      include("config/functions.php");
      $hostname = "localhost";
      $username = "root";
      $password = "mysql";
      $database = "order";


      // $user_data = check_login($con);

    ?>
    <section class="notebook-section">
      <div class="product-list-title">
        <h1>Notebooks & Postcards</h1>
        <p>Pages of potential. Our notebooks are yours to fill with whatever you fancy, from little to-dos to big dreams. How it looks is up to you – pick your print, then choose from lined, dotted or plain paper. Personalise the cover with your name or any words that inspire.</p>
      </div>
      <div class="product-list">


    <?php

    $query = "select * from product order by product_id ASC";
    $connect = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");
    $result = mysqli_query($connect, $query);

    $numResults = mysqli_num_rows($result);
    $counter = 0;
    while ($row = mysqli_fetch_array($result))
    {
        $product_id = $row["product_id"];
          for ($i=0; $i < $numResults; $i++) {
            ?>
            <div class="product-list-box">
              <a href="notebook-productdetails.php?action=add&product_id=<?php echo $product_id; ?>">
              <div class="product-list-details">
                <?php
                $server = "localhost";
                $username = "root";
                $password = "mysql";
                $dbname = "order";
                $conn = mysqli_connect($server, $username, $password, $dbname);
                $sql = "select * from product where product_id = '$product_id'";
                $result = $conn-> query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result -> fetch_assoc()) {
                      echo "<img src='images/product_images/".$row['product_image']."' >";
                    }
                } else {
                }
                $conn -> close();
                ?>
              </div>
              </a>
            </div>
    <?php
    ++$product_id;
        }
  }
    ?>



      </section>

      <script src="javascript/script.js"></script>

      <?php include("./assets/php/footer.php"); ?>
    </body>


  </html>

  <!-- <div class="overlay" style="background-color:#fd8899">
    <div class="text-price">
      <?php
      $server = "localhost";
      $username = "root";
      $password = "mysql";
      $dbname = "product";
      $conn = mysqli_connect($server, $username, $password, $dbname);

      $sql = "select * from product where name = 'Floral Burst Notebook'";
      $result = $conn-> query($sql);

      if ($result->num_rows > 0) {
          while ($row = $result -> fetch_assoc()) {
            echo "RM", $row["price"];
          }
      } else {
      }
          $conn -> close();
      ?>
    </div>
    <div class="text">
      <?php
      $server = "localhost";
      $username = "root";
      $password = "mysql";
      $dbname = "product";
      $conn = mysqli_connect($server, $username, $password, $dbname);
      $sql = "select * from product where name = 'Floral Burst Notebook'";
      $result = $conn-> query($sql);

      if ($result->num_rows > 0) {
          while ($row = $result -> fetch_assoc()) {
            echo $row["name"];
          }
      } else {
      }
          $conn -> close();
      ?>
    </div>
  </div> -->
