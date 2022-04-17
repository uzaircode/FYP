<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Paper Street</title>
    <link rel="shortcut icon" href="images/favicon/duck.ico"/>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="/images/favicon.png">

  </head>

  <body>
    <?php include("./assets/php/header.php"); ?>

    <div class="tab-section">

    <div class="tab-section-details">
    <div class="tab">
      <h2>My Account</h2>
      <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Profile</button>
      <button class="tablinks" onclick="openCity(event, 'Orders')">Orders</button>
      <button class="tablinks" onclick="openCity(event, 'Address')">Home Address</button>
      <button class="tablinks" onclick="openCity(event, 'Log-out')">Log out</button>
    </div>


    <div id="Profile" class="tabcontent">
      <h2>Personal Info</h2>
      <p>Name</p>
      <p>Nik Uzair</p>

      <p>Email</p>
      <p>nikuzairsc@gmail.com</p>

      <p>Password</p>
      <p>********</p>

      <button type="button" name="button">Edit Password</button>
    </div>

    <div id="Orders" class="tabcontent">
      <h2>Orders</h2>
      <p>Here’s your order history. You can re-order any previous purchases by clicking ‘Create again’.</p>
    </div>

    <div id="Address" class="tabcontent">
      <h2>Home Address</h2>
      <p>Store your shipping addresses here to refer back to - only recently used addresses will appear at checkout. Please note, you cannot add address lists for envelope addressing here. Please ensure you add these on the envelope page of the appropriate product.</p>
      <button type="button" name="button">Add Home Address</button>
    </div>
    <div id="Log-out" class="tabcontent">
    </div>
    </div>
  </div>


  <?php include("./assets/php/footer.php"); ?>

    <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>




    </body>

    </html>
