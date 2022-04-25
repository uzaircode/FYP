<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Staff Details - Paper Street</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/cssfyp.css">
    <link rel="stylesheet" href="../css/add.css">
    <link rel="shortcut icon" href="../images/favicon/duck.ico"/>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
          <h2><span class="las la-user-circle"></span> <span>Paper Street</span></h2>
        </div>
        <?php include("sidebar-staff.php"); ?>

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
     <h1 style="text-align: center; font-size: 40px; padding-bottom:15px;"> Staff Details </h1>
 </div>
<div class="accountDetails">
    <div class="acc-detail">
        <form action="insertstaff.php" method="post">
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
                    <span class="details">Phone Number</span>
                    <input type="phone"  name="phone" placeholder="" pattern="[0-9]{10}">
                </div>
                <div class="input-box">
                   <span class="details">Job Title</span>
                   <input type="text"  name="job_title" required >
               </div>
               <div class="input-box">
                  <span class="details">Status</span>
                  <input type="text"  name="status"required>
              </div>
               <div class="gender-details">
                    <input type="radio" name="gender" value="Male" id="dot-1"required>
                    <input type="radio" name="gender" value="Female" id="dot-2"required>
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
                <input type="submit" name="submit"/>
            </div>
        </form>
    </div>
        </div>
        </main>
</div>
</body>
</html>
