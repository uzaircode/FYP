<?php
session_start();
  include("config.php");
  include("function.php");

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

      //something was posted
      $email = $_POST['email'];
      $password = $_POST['password'];

      $_SESSION["email"] = $email;


      if (!empty($email) && !empty($password)) {

          //read from database
          $query = "select * from staff where email = '$email' limit 1";
          $result = mysqli_query($con, $query);

          if ($result) {
              if ($result && mysqli_num_rows($result) > 0) {
                  $user_data = mysqli_fetch_assoc($result);

                  if ($user_data['password'] === $password) {
                      $_SESSION['id'] = $user_data['id'];
                      header("Location: dashboard.php");
                      die;
                  }
              }
          }
      } else {
          header("Location: homepage.php");
      }
  }

?>

<!DOCTYPE html>
<html>

<head>
  <title>Admin Account - Paper Street</title>
  <link rel="stylesheet" href="../css/loginadmin.css">
  <meta charset="UTF=8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="shortcut icon" href="../images/favicon/duck.ico"/>
</head>

<body>
  <!--logo-->
  <h2>Paper Street</h2>
  <!--Login-->
  <div id="mylayout">
    <div class="container">
      <!-- <label for="show" class="close-btn fas fa-times" title="close" onclick="closeSearch()"></label> -->
      <div class="text-sign">
        Log in
      </div>
      <form method="post">

        <div class="data">
          <span>Email</span>
          <input id="text" type="text" name="email" required>
        </div>

    <div class="data">
    <span>Password</span>
              <input id="text" type="password" name="password" required>
            </div>
    <div class="forgot-pass">
    <a href="password-reset.php" type="submit" name="signup">Forgotten your password?</a></div>
    <div class="btn">
              <div class="inner">
    </div>
    <button type="submit" value = "Signup" name="signup" class="button-sign">Log In</button>
            </div>
    <div class="signup-link"><a href="signup.php">Create an account</a></div>
    </form>
    </div>
    </div>
</body>

</html>
