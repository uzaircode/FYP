<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "login_register";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "insert into staff(id,name,email,password) values ('$id', '$name', '$email', '$password')";

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));


        if ($run) {
            header('Location: viewstaff.php');
        } else {
            echo "not working!";
        }
    } else {
        echo "all fields required";
    }
}
