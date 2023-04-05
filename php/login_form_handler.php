<?php
require 'php/dbconfig.php';

$email = "";
$password = "";
$error_array = array();

if (isset($_POST['log_button'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $_SESSION['email'] = $email;

    $password = $_POST['log_password'];

    $check_db_query = mysqli_query($conn, "SELECT * from users WHERE email='$email'");
    $check_login_query = mysqli_num_rows($check_db_query);

    if ($check_login_query == 1) {
        $row = mysqli_fetch_array($check_db_query);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $_SESSION['is_login'] = true;
    }
    $_SESSION['user_first_name'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['alert'] = " You Are now logged in !";
    header('location: userdash.php');
    exit();
} else {
    array_push($error_array, "Email or password was incorrect");
}
