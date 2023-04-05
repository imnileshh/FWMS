<?php
require_once 'dbconfig.php';
$final_email = $_SESSION['email'];
$query = "SELECT * from users WHERE email='$final_email'";
$result = $conn->query($query);
if ($result == true) {
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        $msg = "No Data Found";
    }
}

$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

