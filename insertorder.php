<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "order";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['name'])) {
        $email = $_POST['name'];

        $query = "insert into `order` (email) values ('$email')";

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
        if ($run) {
            header('Location: shoppingcart-done.php');
        } else {
            echo "not working!";
        }
    } else {
        echo "all fields required";
    }
}
