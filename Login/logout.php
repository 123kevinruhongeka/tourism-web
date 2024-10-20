<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: my-account.php"); // Redirect to login page
exit();
?>
