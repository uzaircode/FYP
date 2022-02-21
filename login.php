<?php
session_start();

  include("config/config.php");
  include("config/functions.php");

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

      //something was posted
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (!empty($email) && !empty($password)) {

          //read from database
          $query = "select * from users where email = '$email' limit 1";
          $result = mysqli_query($con, $query);

          if ($result) {
              if ($result && mysqli_num_rows($result) > 0) {
                  $user_data = mysqli_fetch_assoc($result);

                  if ($user_data['password'] === $password) {
                      $_SESSION['user_id'] = $user_data['user_id'];
                      header("Location: aboutUs.php");
                      die;
                  }
              }
          }
      } else {
          echo "string";
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
          Log in
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
  <a href="signup.php" type="submit" name="signup">Forgotten your password?</a></div>
  <div class="btn">
            <div class="inner">
  </div>
  <button type="submit" value = "Signup" name="signup">log in</button>
          </div>
  <div class="signup-link"><a href="signup.php">Create an account</a></div>
  </form>
  </div>
</div>

</script>

<script src="javascript/script.js"></script>


    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
