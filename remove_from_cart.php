<?php
session_start();
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'tourwebsite';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
die("Cannot Connnect to Database".mysqli_connect_error());
} // Assuming your database connection setup is in this file
// Get the cart item ID
$id = intval($_GET['id']);

// Delete the item from the cart
$query = "DELETE FROM cart WHERE id = ? AND user_id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param('ii', $id, $_SESSION['user_id']);
$stmt->execute();

$stmt->close();
$con->close();

// Redirect back to cart.php
header('Location: cart.php');
exit;
?>
