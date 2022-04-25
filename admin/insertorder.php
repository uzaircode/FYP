<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "order";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['name'])) {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];


        $query = "insert into order(email, phone, name) values ('$email','$phone','$name')";

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if ($run) {
          header('Location: vieworder.php');
        } else {
            echo "not working!";
        }
    } else {
        echo "all fields required";
    }
}
