<?php
session_start();
  include("config/config.php");
  include("config/functions.php");


  if ($_SERVER['REQUEST_METHOD'] == "POST") {

      //something was posted
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (!empty($email) && !empty($password)) {
          $user_id = random_num(20);
          $query = "insert into users (user_id,email,password) values ('$user_id','$email','$password')";

          mysqli_query($con, $query);

          header("Location: login.php");
          die;
      } else {
          echo "Please enter some valid information!";
      }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="shortcut icon" href="images/favicon.png"/>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="/images/favicon.png">




  </head>

  <body>
    <?php include("./assets/php/header.php"); ?>


    <div id="mylayout">
      <div class="container">
        <!-- <label for="show" class="close-btn fas fa-times" title="close" onclick="closeSearch()"></label> -->
        <div class="text">
          Sign up
        </div>
        <form method="post">

          <div class="data">
            <span>Email</span>
            <input id="text" type="text" name="email">
          </div>

  <div class="data">
  <span>Password</span>
            <input id="text" type="password" name="password">
          </div>
  <div class="forgot-pass">
  <a href="#" type="submit" name="signup">Forgotten your password?</a></div>
  <div class="btn">
            <div class="inner">
  </div>
  <button type="submit" value = "Signup" name="signup">sign up</button>
          </div>
  <div class="signup-link"><a href="#">Create an account</a></div>
  </form>
  </div>
</div>

</script>

<script src="javascript/script.js"></script>


    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
