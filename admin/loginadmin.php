<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "mysql";
$database = "order";

$con = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");

function check_login($con)
{
    if (isset($_SESSION['staff_id'])) {
        $id = $_SESSION['staff_id'];
        $query = "select * from users where user_id = 'id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location:dashboard.php");
    die;
}

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

      //something was posted
      $email = $_POST['email'];

      $_SESSION["email"] = $email;



      if (!empty($email)) {

          //read from database
          $query = "select * from staff where staff_email = '$email' limit 1";
          $result = mysqli_query($con, $query);

          if ($result) {
              if ($result && mysqli_num_rows($result) > 0) {
                  $user_data = mysqli_fetch_assoc($result);

                  if ($user_data['staff_email'] === $email) {
                      $_SESSION['staff_id'] = $user_data['staff_id'];
                      header("Location: dashboard.php");
                      die;
                  }
              }else {
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
  <link rel="stylesheet" href="../css/styles.css">

</head>

<body style="background-color:#faf7f0;">
  <div id="mylayout">
    <div>
      <div class="container-admin" style="background-color:#f4eee0;">
        <div>
          <div class="text-sign">
            Log in Admin
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
        <div class="btn">
                  <div class="inner">
        </div>
        <button type="submit" value = "Signup" name="signup" class="button-sign">Log In</button>
                </div>
    </form>
        </div>
      </div>
    </div>
</div>

</script>

<script src="javascript/script.js"></script>


</body>

</html>
