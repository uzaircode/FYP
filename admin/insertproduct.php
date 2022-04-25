<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "order";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['product_name']) && !empty($_POST['image']) && !empty($_POST['category']) && !empty($_POST['description']) && !empty($_POST['price'])) {
        $product_name = $_POST['product_name'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $query = "insert into product(product_name,product_image,product_category,product_description,product_price) values ('$product_name', '$image', '$category', '$description', '$price')";

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
