<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Products - Paper Street</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="cssiwp.css">
    <link rel="shortcut icon" href="../images/favicon/duck.ico"/>

        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
          <h2><span class="las la-user-circle"></span> <span>Paper Street</span></h2>
        </div>
        <?php include("sidebar-product.php"); ?>

    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>

            <!-- <div class="user-wrapper">
              <img src="../admin/staff-image/uzair.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Nik Ahmad Uzair</h4>
                    <small>Super admin</small>
                </div>
            </div> -->
        </header>
        <main>
          <?php include("card-header-product.php"); ?>


            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                        <h3>Recent Product</h3>
                        <div>
                          <a href="editproduct.php">Edit/Delete Product <span class="las la-arrow-right"></span></a>
                          <a href="addproduct.php">Add Product <span class="las la-arrow-right"></span></a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                            <thead>
                                <tr>
                                    <td>Product ID</td>
                                    <td>Product Name</td>
                                    <td>Product Image</td>
                                    <td>Category</td>
                                    <td>Description</td>
                                    <td>Price</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php

                              $server = "localhost";
                              $username = "root";
                              $password = "mysql";
                              $dbname = "order";
                              $conn = mysqli_connect($server, $username, $password, $dbname);
                              $sql = "select * from product";
                              $result = $conn-> query($sql);

                              if ($result->num_rows > 0) {
                                  while ($row = $result -> fetch_assoc()) {
                                      echo "</tr><td>" . $row["product_id"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["product_image"] . "</td><td>" . $row["product_category"] . "</td><td>" . $row["product_description"] . "</td><td>" . "RM" .$row["product_price"];
                                  }
                              } else {
                              }
                                  $conn -> close();
                              ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                    <div class="card-header">
                        <h3>Staffs</h3>

                    </div>

                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                              <img src="../admin/staff-image/paiz.jpg" width="40px" height="40px" alt="">
                            <div>
                                <h4>Engku Faiz Naqiuddin</h4>
                                <small>Founder</small>
                            </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>

                        <div class="customer">
                            <div class="info">
                              <img src="../admin/staff-image/uzair.jpg" width="40px" height="40px" alt="">
                            <div>
                                <h4>Nik Ahmad Uzair</h4>
                                <small>Co-founder</small>
                            </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="../admin/staff-image/lissao.jpg" width="40px" height="40px" alt="">
                            <div>
                                <h4>Nurlisa Safiah</h4>
                                <small>Designer</small>
                            </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

      </main>
    </div>
    </body>
</html>
