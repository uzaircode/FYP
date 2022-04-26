
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Orders - Paper Street</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/cssfyp.css">
    <link rel="shortcut icon" href="../images/favicon/duck.ico"/>

        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
          <h2><span class="las la-user-circle"></span> <span>Paper Street</span></h2>
        </div>
        <?php include("sidebar-order.php"); ?>

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
          <?php include("card-header-order.php"); ?>


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
                                  <td>Order ID</td>
                                  <td>Email</td>
                                  <td>Phone Number</td>
                                  <td>Product Name</td>
                                  <td>Quantity</td>
                                  <td>Subtotal</td>
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
                              // $sql = 'select * from `order`';

                              $sql = 'select * from ((`order` inner join customer on order.customer_id = customer.customer_id) inner join product on order.product_id = product.product_id)';

                              $result = mysqli_query($con, $sql);
                              if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_array($result)) {
                                  echo "</tr><td>" . $row["order_id"] . "</td><td>" . $row["customer_email"] . "</td><td>" . "0" . $row["customer_contact"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["order_quantity"] . "</td><td>" . $row["product_price"] . "</td><td>";
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

                <!-- <div class="customers">
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
                </div> -->
            </div>
      </main>
    </div>
    </body>
</html>


<!-- <?php
    if($fetch_payment['payment_status'] == 'pending'){
      $image_src = 'images/invisible.gif';

      $payment_text = 'Pending';
    }else{
      $image_src = 'images/visible.gif';
      $payment_text = 'Completed';
    }

    ?> -->
