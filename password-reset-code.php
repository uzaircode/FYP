<?php

session_start();
include("config/config.php");


function send_password_reset($get_id, $get_email)
{
}

if (isset($_POST['password_reset_link'])) {
    $email = mysqli_real_escape_string("$con", $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {
        $row = mysqli_fetch_array(check_email_run);
        $get_id = $row['id'];
        $get_email = $row['email'];

        send_password_reset($get_id, $get_email);
        $_SESSION['status'] = "we e-mailed you a reset link";
        header("Location: password-reset.php");
        exit(0);
    } else {
        $_SESSION['status'] = "no Email Found";
        header("Location: password-reset.php");
        exit(0);
    }
}
