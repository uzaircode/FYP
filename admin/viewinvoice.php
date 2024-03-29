



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Invoices - Paper Street</title>
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
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
                <li>
                    <a href="viewstaff.php"><span class="las la-heart"></span><span>Staffs</span></a>
                </li>
                <li>
                  <a href="viewcustomer.php"><span class="las la-users"></span><span>Customers</span></a>
               </li>
                <li>
                  <a href="viewproduct.php"><span class="las la-book"></span><span>Products</span></a>
                </li>
                <li>
                    <a href="vieworder.php"><span class="las la-shopping-bag"></span><span>Orders</span></a>
                </li>
                <li>
                    <a href="viewinvoice.php" class="active"><span class="las la-receipt"></span><span>Invoices</span></a>
                </li>
                <li>
                    <a href="loginadmin.php"><span class="las la-lock"></span><span>Log Out</span></a>
                </li>
            </ul>
        </div>
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
          <?php include("card-header-none.php"); ?>


            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                        <h3>Recent Invoice</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                            <thead>
                                <tr>
                                  <td>Invoice ID</td>
                                  <td>email</td>
                                  <td>Product</td>
                                  <td>Invoice</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $server = "localhost";
                              $username = "root";
                              $password = "mysql";
                              $dbname = "order";
                              $con = mysqli_connect($server, $username, $password, $dbname);
                              if(!$con){
                                  die('Error ' . mysqli_connect_error());
                              }

                              $sql = 'select * from ((invoice inner join customer on invoice.customer_id = customer.customer_id) inner join product on invoice.product_id = product.product_id)';

                              $result = mysqli_query($con, $sql);
                              if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_array($result)) {
                                  echo "</tr><td>" . $row["invoice_id"] . "</td><td>" . $row["customer_email"] . "</td><td>" . $row["product_name"];
                                  ?> <td><a href="report.php?action=add&id=<?php echo $row["invoice_id"]; ?>"><i class='bx bxs-report'></i></a></td>
                                  <?php
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
