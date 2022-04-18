<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Staffs Details | Siti Khadijah Online</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/cssfyp.css">
    <link rel="stylesheet" href="../css/add.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-user-circle"></span> <span>Siti Khadijah</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
                <li>
                    <a href="viewstaff.php" class="active"><span class="las la-heart"></span><span>Staffs</span></a>
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
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholeder="search here" />
            </div>

            <div class="user-wrapper">
              <img src="../admin/staff-image/uzair.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Nik Ahmad Uzair</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>0</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                    </div>
                <div class="card-single">
                    <div>
                        <h1>0</h1>
                        <span>Messages</span>
                    </div>
                    <div>
                        <span class="las la-envelope"></span>
                    </div>
                </div>
                    <div class="card-single">
                    <div>
                        <h1>0</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                    </div>
                    <div class="card-single card-highlight">
                    <div>
                        <h1>0</h1>
                        <span>Staffs</span>
                    </div>
                    <div>
                        <span class="las la-money-bill-wave"></span>
                    </div>
                    </div>
            </div>
            <div class="title-acc">
     <h1 style="text-align: center; font-size: 40px; padding-bottom:15px;"> Staff Details </h1>
 </div>

<div class="accountDetails">
    <div class="acc-detail">
        <form action="insert.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text"  name="name" required >
                </div>
                <div class="input-box">
                    <span class="details">Email Address*</span>
                    <input type="email"  name="email" required >
                </div>
                 <div class="input-box">
                    <span class="details">ID</span>
                    <input type="text"  name="id"  >
                </div>
                <div class="input-box">
                   <span class="details">pasword</span>
                   <input type="text"  name="password"  >
               </div>
               <div class="gender-details">
                    <input type="radio" name="stGender" id="dot-1">
                    <input type="radio" name="stGender" id="dot-2">
                    <span class="gender-title">Gender</span>
                            <div cLass="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                 <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Female</span>
                                </label>
                            </div>
                </div>
            </div>
            <div class="bttn">
                <input type="submit"/>
            </div>
        </form>
    </div>
        </div>
        </main>
</div>



</body>
</html>
