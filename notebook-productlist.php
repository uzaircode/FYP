

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
      $database = "product";

      $connect = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");
      // $user_data = check_login($con);

    ?>
    <section class="notebook-section">
      <div class="product-list-title">
        <h1>Notebooks & Postcards</h1>
        <p>Pages of potential. Our notebooks are yours to fill with whatever you fancy, from little to-dos to big dreams. How it looks is up to you – pick your print, then choose from lined, dotted or plain paper. Personalise the cover with your name or any words that inspire.</p>
      </div>
      <div class="product-list">

    <?php
    $query = "SELECT * FROM product where id= '1'";

    $result = mysqli_query($connect, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="product-list-box">
              <a href="notebook-productdetails.php?action=add&id=<?php echo $row["id"]; ?>">
              <div class="product-list-details">
                <?php
                $server = "localhost";
                $username = "root";
                $password = "mysql";
                $dbname = "product";
                $conn = mysqli_connect($server, $username, $password, $dbname);
                $sql = "select * from product";
                $result = $conn-> query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result -> fetch_assoc()) {
                      echo "<img src='images/product_images/".$row['image']."' >";
                    }
                } else {
                }
                    $conn -> close();
                ?>
                <div class="overlay" style="background-color:#ff9678">
                  <div class="text-price">
                    <?php
                    $server = "localhost";
                    $username = "root";
                    $password = "mysql";
                    $dbname = "product";
                    $conn = mysqli_connect($server, $username, $password, $dbname);
                    $sql = "select * from product";
                    $result = $conn-> query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                          echo $row["price"];
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
                    $sql = "select * from product";
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
                </div>
              </div>
              </a>
            </div>
    <?php
        }
    }
    ?>







        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/floral-notebook.jpg" alt="">
            <a href="notebook-productdetails.php">
            <div class="overlay" style="background-color:#00ba6d">
              <div class="text-price">RM29.90</div>
              <div class="text">Floral Burst Notebook</div>
            </div>
            </a>
          </div>
        </div>

        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/oranges-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#192878">
              <div class="text-price">RM29.90</div>
              <div class="text">Oranges Notebook</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/mirror2-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#ff9678">
              <div class="text-price">RM29.90</div>
              <div class="text">The Completist - Mirrors Notebook</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/mirror-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#192878">
              <div class="text-price">RM29.90</div>
              <div class="text">The Completist - Mirrors Notebook</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/memphis-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#ff9678">
              <div class="text-price">RM29.90</div>
              <div class="text">The Completist - Memphis Brush</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/brush-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#dc9b14">
              <div class="text-price">RM29.90</div>
              <div class="text">The Completist - Giant Brush Notebook</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/pinkcut-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#fd8899">
              <div class="text-price">RM29.90</div>
              <div class="text">The Completist - Pink Cut Notebook</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/vintage-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#dc9b14">
              <div class="text-price">RM29.90</div>
              <div class="text">Stalogy 016 Vintage Notebook</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/lavender-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#192878">
              <div class="text-price">RM29.90</div>
              <div class="text">Lavender Notebook</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/yellow-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#dc9b14">
              <div class="text-price">RM29.90</div>
              <div class="text">Yellow Notebook</div>
            </div>
          </div>
        </div>
        <div class="product-list-box">
          <div class="product-list-details">
            <img src="images/bluelines-notebook.jpg" alt="">
            <div class="overlay" style="background-color:#00ba6d">
              <div class="text-price">RM29.90</div>
              <div class="text">Blue Lines Notebook</div>
            </div>
          </div>
        </div>

      </section>

      <script src="javascript/script.js"></script>

      <?php include("./assets/php/footer.php"); ?>
    </body>


  </html>
