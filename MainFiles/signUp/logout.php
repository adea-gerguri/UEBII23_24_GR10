<?php
// Start session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the homepage or any other desired page after logout
header("Location: ../HomePage/index.php");
exit();
?>
