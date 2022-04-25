<?php


$hostname = "localhost";
$username = "root";
$password = "mysql";
$database = "order";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");


if (isset($_POST['submit_update'])) {
    if (!empty($_POST['name'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $job_title = $_POST['job_title'];
      $status = $_POST['status'];


      $run = mysqli_query($conn,"update staff set staff_name = '$name', staff_gender = '$gender', staff_email = '$email', staff_contact = '$phone', staff_job_title = '$job_title', staff_status = '$status' where staff_id='$id'") or die(mysqli_error($conn));


        if ($run) {
            header('Location: viewstaff.php');
        } else {
            echo "not working!";
        }
    }
    else {
        echo "all fields required";
    }
} else if (isset($_POST['submit_delete'])) {
    if (!empty($_POST['id'])) {
        $id=$_POST['id'];

        $run = mysqli_query($conn,"delete from staff where staff_id='$id'") or die(mysqli_error($conn));

        if ($run) {
            header('Location: viewstaff.php');
        } else {
            echo "not working!";
        }
    }
    else {
        echo "all fields required";
    }
    mysqli_close($conn);

}
