<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

  include("config/config.php");
  include("config/functions.php");

  if (isset($_POST['Submit'])) {
      $email = $_POST['email'];
      $password = $_POST["password"];
      $npwd = $_POST['npwd'];

      $query = mysqli_query($con, "select customer_email, customer_password from customer where customer_email = '$email' AND customer_password ='$password'");
      $num = mysqli_fetch_array($query);

      if ($num>0) {
        echo '<script>alert("Password successfully reset.")</script>';
        $con = mysqli_query($con, "update customer set customer_password = '$npwd' where customer_email = '$email'");
        header("Location: dashboard.php");

      } else {
        echo '<script>alert("Wrong password!")</script>';
      }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset Password - Paper Street</title>
    <link rel="shortcut icon" href="images/favicon.png"/>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="images/favicon/duck.ico">




  </head>

  <body>
    <?php include("./assets/php/header.php"); ?>

    <div id="mylayout">
      <div class="container">
        <!-- <label for="show" class="close-btn fas fa-times" title="close" onclick="closeSearch()"></label> -->
        <div class="text-sign">
          Reset Password
        </div>
        <form method="post" >

          <div class="data">
            <span>Email</span>
            <input id="email" type="text" name="email" required>
          </div>
          <div class="data">
          <span>Old Password</span>
                    <input id="new_password" type="password" name="password" id="password" required>
                  </div>
          <div class="data">
          <span>New Password</span>
                    <input id="new_password" type="password" name="npwd" id="npwd" required>
                  </div>
  <div class="btn">
            <div class="inner">
  </div>
  <button type="submit" value = "Change Password" name="Submit" class="button-sign">Password Reset</button>
          </div>
  </form>
  </div>
</div>

</script>

<script src="javascript/script.js"></script>


    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
