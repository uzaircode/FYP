<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Dashboard - Paper Street</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/cssfyp.css">
    <link rel="shortcut icon" href="../images/favicon/duck.ico"/>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <?php include("sidebar-dashboard.php"); ?>

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
          <?php include("card-header-none.php"); ?>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                        <h3>Recent Staff</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                            <thead>
                                <tr>
                                  <td>Staff ID</td>
                                  <td>Name</td>
                                  <td>Gender</td>
                                  <td>Phone</td>
                                  <td>Email</td>
                                  <td>Job Title</td>
                                  <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              include("config_order.php");

                              $sql = "select * from staff";
                              $result = $con-> query($sql);

                              if ($result->num_rows > 0) {
                                  while ($row = $result -> fetch_assoc()) {
                                    echo "</tr><td>" . $row["staff_id"] . "</td><td>"  . $row["staff_name"] . "</td><td>" . $row["staff_gender"] . "</td><td>"  . "0" . $row["staff_contact"] . "</td><td>"  . $row["staff_email"] . "</td><td>"  . $row["staff_job_title"] . "</td><td>". $row["staff_status"];
                                  }
                              } else {
                              }
                                  $con -> close();

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

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                        <h3>Recent Customer</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                            <thead>
                                <tr>
                                  <td>Customer ID</td>
                                  <td>Email</td>
                                  <td>Password</td>
                                  <td>Home Address</td>
                                  <td>City</td>
                                  <td>State</td>
                                  <td>Postcode</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php

                              $server = "localhost";
                              $username = "root";
                              $password = "mysql";
                              $dbname = "order";
                              $conn = mysqli_connect($server, $username, $password, $dbname);
                              $sql = "select * from customer";
                              $result = $conn-> query($sql);


                              if ($result->num_rows > 0) {
                                  while ($row = $result -> fetch_assoc()) {
                                    echo "</tr><td>" . $row["customer_id"] . "</td><td>" . $row["customer_email"] . "</td><td>" . $row["customer_password"] . "</td><td>" . $row["customer_address"] . "</td><td>" . $row["customer_city"] . "</td><td>" . $row["customer_state"] . "</td><td>" . $row["customer_postcode"];
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
            </div>


            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                        <h3>Recent Product</h3>

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
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                        <h3>Recent Order</h3>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                            <thead>
                                <tr>
                                    <td>Customer ID</td>
                                    <td>Email</td>
                                    <td>Phone Number</td>
                                    <td>Product Name</td>
                                    <td>Quantity</td>
                                    <td>Subtotal</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php

                              $hostname = "localhost";
                              $username = "root";
                              $password = "mysql";
                              $database = "order";
                              $con = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");

                              if(!$con){
                                  die('Error ' . mysqli_connect_error());
                              }

                              mysqli_select_db($con, 'order');
                              $sql = 'select * from product inner join `order` on product.product_id = order.product_id join customer on customer.customer_id = customer.customer_id';

                              $result = mysqli_query($con, $sql);
                              if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_array($result)) {
                                  echo "</tr><td>" . $row["order_id"] . "</td><td>" . $row["customer_email"] . "</td><td>" . $row["customer_contact"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["order_quantity"] . "</td><td>" . $row["order_subtotal"] . "</td><td>" . $row["order_status"] ;
                                }
                              } else {
                              }
                                  $con -> close();
                              ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

      </main>
    </div>
    </body>
</html>
