<?php
include_once 'dbconfig.php';

$fname = "";
$lname = "";
$email = "";
$address = "";
$password = "";
$cpassword = "";
$error_array = array();

if (isset($_POST['reg_user'])) {

    //First Name
    $fname = strip_tags($_POST['first_name']);
    $fname = str_replace(' ', '', $fname);
    $fname = ucfirst(strtolower($fname));
    $_SESSION['first_name'] = $fname;

    //Last Name
    $lname = strip_tags($_POST['last_name']);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($lname));
    $_SESSION['last_name'] = $lname;

    //Address
    $address = strip_tags($_POST['address']);
    $_SESSION['address'] = $address;

    //Email
    $email = strip_tags($_POST['email']);
    $email = str_replace(' ', '', $email);
    $email = strtolower($email);
    $_SESSION['email'] = $email;

    //Password
    $password = strip_tags($_POST['password']);
    $password = str_replace(' ', '', $password);
    $password = ucfirst(strtolower($password));
    $_SESSION['password'] = $password;

    //Confirm Password
    $cpassword = strip_tags($_POST['password_confirm']);
    $cpassword = str_replace(' ', '', $cpassword);
    $cpassword = ucfirst(strtolower($cpassword));
    $_SESSION['password_confirm'] = $cpassword;

    $date = date("Y-m-d hh:mm");

    //Validation for Email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        $email = strtolower($email);

        $e_check = mysqli_query($conn, "SELECT email from users WHERE email='$email'");

        $num_rows = mysqli_num_rows($e_check);

        if ($num_rows > 0) {
            array_push($error_array, "Email already in use");
        }
    }

    //Validation for Password
    if ($password != $cpassword) {
        array_push($error_array, "Your password doesn't match");
    } else {
        if (preg_match('/[^A-Za-z0-9]/', $password)) {
            array_push($error_array, "Your password can only contain english characters or numbers.");
        }
    }


    if (empty($error_array)) {
        $query = "INSERT INTO users (first_name, last_name, email, address, password) VALUES ('$fname', '$lname', '$email','$address', '$password');";

        mysqli_query($conn, $query);
        $_SESSION['alert'] = "You are succesfully registerd.";
        header('location: login.php', $fname);
    }
}
