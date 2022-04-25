<div class="cards">
    <div class="card-single">
        <div>
            <h1>
              <?php
              include("config_order.php");
              $sql = "select * from customer";



                    if ($result = mysqli_query($con, $sql)) {

                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );

                        // Display result
                        $rowcount;

                        echo $rowcount;
                     }
                ?>
              </h1>
            <span>Customers</span>
        </div>
        <div>
            <span class="las la-users"></span>
        </div>
        </div>
    <div class="card-single">
        <div>
          <h1>
            <?php
            include("config_order.php");
            $sql = "select * from product";



                  if ($result = mysqli_query($con, $sql)) {

                      // Return the number of rows in result set
                      $rowcount = mysqli_num_rows( $result );

                      // Display result
                      $rowcount;

                      echo $rowcount;
                   }
              ?>
          </h1>
            <span>Products</span>
        </div>
        <div>
            <span class="las la-book"></span>
        </div>
    </div>
        <div class="card-single card-highlight">
        <div>
          <h1>
            <?php
            include("config_order.php ");
            $sql = "select * from `order`";
            if ($result = mysqli_query($con, $sql)) {

                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result);

                // Display result
                $rowcount;

                echo $rowcount;
             }
              ?>
          </h1>
            <span>Orders</span>
        </div>
        <div>
            <span class="las la-shopping-bag"></span>
        </div>
        </div>
        <div class="card-single">
        <div>
           <h1>
             <?php
             include("config_order.php");
             $sql = "select * from staff";



                   if ($result = mysqli_query($con, $sql)) {

                       // Return the number of rows in result set
                       $rowcount = mysqli_num_rows( $result );

                       // Display result
                       $rowcount;

                       echo $rowcount;
                    }
               ?>
           </h1>
           <span>Staffs</span>
        </div>
        <div>
            <span class="las la-money-bill-wave"></span>
        </div>
        </div>
</div>
