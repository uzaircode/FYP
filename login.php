

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
        <form action="#">
          <div class="data">
            <span>Email</span>

            <input type="text" required id="email_field">
          </div>
  <div class="data">
  <span>Password</span>
            <input type="password" required id="password_field">
          </div>
  <div class="forgot-pass">
  <a href="#">Forgotten your password?</a></div>
  <div class="btn">
            <div class="inner">
  </div>
  <button onclick="login()" type="submit">log in</button>
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
