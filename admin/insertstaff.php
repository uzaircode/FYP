<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "order";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']))
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $job_title = $_POST['job_title'];
        $status = $_POST['status'];


        $query = "insert into staff(staff_name,staff_gender,staff_email,staff_contact,staff_job_title,staff_status) values ('$name', '$gender','$email','$phone','$job_title','$status')";

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
