<?php


$hostname = "localhost";
$username = "root";
$password = "mysql";
$database = "product";

$con = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");
