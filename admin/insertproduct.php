<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "product";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['image']) && !empty($_POST['category']) && !empty($_POST['description']) && !empty($_POST['price'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $query = "insert into product(id,name,image,category,description,price) values ('$id', '$name', '$image', '$category', '$description', '$price')";

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));


        if ($run) {
            header('Location: viewproduct.php');
        } else {
            echo "not working!";
        }
    } else {
        echo "all fields required";
    }
}
