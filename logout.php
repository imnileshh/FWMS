<?php
// Include configuration file
require_once 'config.php';

// Remove token and user data from the session
unset($_SESSION['token']);
unset($_SESSION['userData']);


//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:donarLogin.php');

?>
?>