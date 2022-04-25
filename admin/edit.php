<?php


$hostname = "localhost";
$username = "root";
$password = "mysql";
$database = "order";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");


if (isset($_POST['submit_update'])) {
    if (!empty($_POST['product_name'])) {
        $id=$_POST['product_id'];
        $name=$_POST['product_name'];


        $run = mysqli_query($conn,"update `product` set product_name = '$name' where product_id = '$id'") or die(mysqli_error($conn));


        if ($run) {
            header('Location: viewproduct.php');
        } else {
            echo "not working!";
        }
    } else {
        echo "all fields required";
    }
}else if (isset($_POST['submit_delete'])) {
    if (!empty($_POST['product_id'])) {
        $id=$_POST['product_id'];

        $run = mysqli_query($conn,"delete from `product` where product_id = '$id'") or die(mysqli_error($conn));

        if ($run) {
            header('Location: viewproduct.php');
        } else {
            echo "not working!";
        }
    } else {
        echo "all fields required";
    }
    mysqli_close($conn);

}
