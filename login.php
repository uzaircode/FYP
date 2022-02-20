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
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBxZCCgm-ZfZLeyvtoVjJUHdYyXFE0OtcM",
    authDomain: "fyp-stationery.firebaseapp.com",
    projectId: "fyp-stationery",
    storageBucket: "fyp-stationery.appspot.com",
    messagingSenderId: "87101177493",
    appId: "1:87101177493:web:62b01a275589deca65e59c"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
</script>
<script src="javascript/script.js"></script>


    <?php include("./assets/php/footer.php"); ?>


  </body>

</html>
