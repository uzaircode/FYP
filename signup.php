<?php
session_start();

  include("config/config.php");
  include("config/functions.php");
  error_reporting(E_ALL ^ E_NOTICE);


  if ($_SERVER['REQUEST_METHOD'] == "POST") {


      //something was posted
      $email = $_POST['email'];
      $password = $_POST['password'];

      $errors = 0;

      if (!empty($email) && !empty($password)) {

          //read from database
          $query = "select * from users where email = '$email' limit 1";
          $result = mysqli_query($con, $query);

          if ($result) {
              if ($result && mysqli_num_rows($result) > 0) {
                  $user_data = mysqli_fetch_assoc($result);

                  if ($user_data['email'] === $email) {
                      $errors = 1;
                  }
              } else {
                  $user_id = random_num(20);
                  $query = "insert into users (user_id,email,password) values ('$user_id','$email','$password')";

                  mysqli_query($con, $query);

                  header("Location: login.php");
                  die;
              }
          }
      } else {
          echo "Please enter some valid information!";
      }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up - Paper Street</title>
    <link rel="shortcut icon" href="images/favicon/duck.ico"/>

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
        <div class="text-sign">
          Sign up
        </div>
        <form method="post">

          <div class="data">
            <span>Email</span>
            <input id="email_field" type="text" name="email" required <?php      $errors = 0;
 if ($errors == "1") {
     echo 'style="border:1px solid red;"';
 } ?> />
          </div>

  <div class="data">
  <span>Password</span>
            <input id="text" type="password" name="password" required>
          </div>
  <div class="forgot-pass">
  <a href="#" type="submit" name="signup">Forgotten your password?</a></div>
  <div class="btn">
            <div class="inner">
  </div>
  <button type="submit" value = "Signup" name="signup" class="button-sign">Sign Up</button>
          </div>
  <div class="signup-link"><a href="login.php">Already have an account?</a></div>

  </form>
  </div>
</div>

</script>

<script src="javascript/script.js"></script>


    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
