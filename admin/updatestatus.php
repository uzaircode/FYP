<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Status Details - Paper Street</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/cssfyp.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="shortcut icon" href="../images/favicon/duck.ico"/>
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
            <!-- <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholeder="search here" />
            </div> -->
            <!-- <div class="user-wrapper">
              <img src="../admin/staff-image/uzair.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Nik Ahmad Uzair</h4>
                    <small>Super admin</small>
                </div>
            </div> -->
        </header>
        <main>
          <?php include("card-header-staff.php"); ?>

            <div class="title-acc">
     <h1 style="text-align: center; font-size: 40px; padding-bottom:15px;"> Order Details </h1>
 </div>
 <div class="accountDetails">
     <div class="acc-detail">
         <form action="edit1.php" method="post">
           <div class="user-details">
              <div class="input-box">
                 <span class="details">Status</span>
                 <input type="text"  name="status" >
             </div>
           </div>
           <div class="bttn">
               <input type="submit" name="submit_update" value="UPDATE"/>
           </div>
           <div class="bttn1">
               <input type="submit" name="submit_delete" value="DELETE"/>
           </div>


         </form>
     </div>
 </div>

        </main>
</div>
</body>
</html>
