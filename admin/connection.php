<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "login_register";


$conn = mysqli_connect($server, $username, $password, $dbname);
$query = "select * from staff";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
