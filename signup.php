<?php
session_start();

  include("config/config.php");
  include("config/functions.php");
  error_reporting(E_ALL ^ E_NOTICE);


  if ($_SERVER['REQUEST_METHOD'] == "POST") {


      //something was posted
      $customer_name = $_POST['customer_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $home_address = $_POST['home_address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $postcode = $_POST['postcode'];
      $phone = $_POST['phone'];

      $errors = 0;

      if (!empty($email) && !empty($password)) {

          //read from database
          $query = "select * from customer where customer_email = '$email' limit 1";
          $result = mysqli_query($con, $query);

          if ($result) {
              if ($result && mysqli_num_rows($result) > 0) {
                  $user_data = mysqli_fetch_assoc($result);

                  if ($user_data['email'] === $email) {
                      $errors = 1;
                  }
              } else {
                $user_id = random_num(3);
                $query = "insert into customer (backup_code, customer_name, customer_email,customer_password,customer_address,customer_city,customer_state,customer_postcode,customer_contact) values ('$user_id','$customer_name','$email','$password', '$home_address', '$city', '$state', '$postcode', '$phone')";

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

  <body id="main">
    <?php include("./assets/php/header.php"); ?>
    <div id="mylayout">
      <div class="container">
        <!-- <label for="show" class="close-btn fas fa-times" title="close" onclick="closeSearch()"></label> -->
        <div class="text-sign">
          Sign up
        </div>
        <form method="post">

          <div class="data">
            <span>Name</span>
            <input type="name" name="customer_name" required/>
                      </div>
          <div class="data">
            <span>Email</span>
            <input id="email_field" type="email" name="email" required/>
                      </div>

  <div class="data">
  <span>Password</span>
            <input id="text" type="password" name="password" required>
          </div>
          <div class="data">
            <label for="name" class="home_address"><span>Home Address</span></label> <br>
            <input type="text" name="home_address" size="50" class="field-input" style="padding-left:5px; margin-bottom:15px;" required> <br>
          </div>
                <div class="data">
                  <label for="name" class="username"><span>City</span></label> <br>
                  <input type="text" name="city" size="50" class="field-input" style="padding-left:5px; margin-bottom:15px;" required> <br>
                </div>
                <div class="data">
                  <label for="name" class="state"><span>State</span></label> <br>
                  <select name="state">
                      <option value="">State...</option>
                      <option value="Selangor">Selangor</option>
                      <option value="Terengganu">Terengganu</option>
                      <option value="Sabah">Sabah</option>
                      <option value="Sarawak">Sarawak</option>
                      <option value="Kuala Lumpur">Kuala Lumpur</option>
                      <option value="Labuan">Labuan</option>
                      <option value="Putrajaya">Putrajaya</option>
                      <option value="Johor">Johor</option>
                      <option value="Kedah">Kedah</option>
                      <option value="Kelantan">Kelantan</option>
                      <option value="Melaka">Melaka</option>
                      <option value="Negeri Sembilan">Negeri Sembilan</option>
                      <option value="Pahang">Pahang</option>
                      <option value="Penang">Penang</option>
                      <option value="Perak">Perak</option>
                      <option value="Perlis">Perlis</option>
                  </select>
                </div>
              <div class="data">
                <label for="name" class="postcode"><span>Postcode</span></label> <br>
                <input type="text" name="postcode" pattern="[0-9]{5}"  size="50" class="field-input" style="padding-left:5px; margin-bottom:15px;" required> <br>
              </div>
            <div class="data">
              <label for="phone" placeholder="Contact" required><span>Phone Number</span></label> <br>
              <input type="text" name="phone" size="50" placeholder="" pattern="[0-9]{10}" class="field-input" style="padding-left:5px; margin-bottom:15px;" required> <br>
            </div>

          <div class="forgot-pass">
          <a href="#" type="submit" name="signup"></a></div>
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
