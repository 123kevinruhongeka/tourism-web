<?php
/*session_start();
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'tourwebsite';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
die("Cannot Connnect to Database".mysqli_connect_error());
} // Assuming your database connection setup is in this file

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: \login/dashborad.php'); // Redirect to login page if user is not logged in
    exit;
}

$user_id = $_SESSION['user_id'];
$tour_id = $_GET['tour_id'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$booking_date = $_POST['booking_date'];

// Insert booking details into the bookings table
$booking_sql = "INSERT INTO bookings (user_id, tour_id, adults, children, booking_date) VALUES (?, ?, ?, ?, ?)";
$booking_stmt = $con->prepare($booking_sql);
$booking_stmt->bind_param('iiiis', $user_id, $tour_id, $adults, $children, $booking_date);
$booking_stmt->execute();

// Get the last inserted booking_id
$booking_id = $con->insert_id;

// Check if the item already exists in the cart
$cart_check_sql = "SELECT * FROM cart WHERE user_id = ? AND tour_id = ?";
$cart_stmt = $con->prepare($cart_check_sql);
$cart_stmt->bind_param('ii', $user_id, $tour_id);
$cart_stmt->execute();
$cart_result = $cart_stmt->get_result();

if ($cart_result->num_rows > 0) {
    // Update the quantity if the item already exists in the cart
    $update_cart_sql = "UPDATE cart SET quantity = quantity + 1 WHERE user_id = ? AND tour_id = ?";
    $update_cart_stmt = $con->prepare($update_cart_sql);
    $update_cart_stmt->bind_param('ii', $user_id, $tour_id);
    $update_cart_stmt->execute();
} else {
    // Insert new item into the cart with reference to the booking
    $insert_cart_sql = "INSERT INTO cart (user_id, tour_id, booking_id, quantity) VALUES (?, ?, ?, 1)";
    $insert_cart_stmt = $con->prepare($insert_cart_sql);
    $insert_cart_stmt->bind_param('iii', $user_id, $tour_id, $booking_id);
    $insert_cart_stmt->execute();
}

// Redirect to the cart page after adding to cart
header("Location: cart.php");*/


// Include your database connection
session_start();
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'tourwebsite';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
die("Cannot Connnect to Database".mysqli_connect_error());
} // Assuming your database connection setup is in this file


if (!isset($_SESSION['user_id'])) {
    header('Location: Login\dashboard.php'); // Redirect to login page if user is not logged in
    exit;
}

// Get the logged-in user's ID from the session
$user_id = $_SESSION['user_id'];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $tour_id = mysqli_real_escape_string($con, $_POST['tour_id']);
    $booking_date = mysqli_real_escape_string($con, $_POST['Booking_date']);
    $custom_date = isset($_POST['custom_date']) ? mysqli_real_escape_string($con, $_POST['custom_date']) : null;
    $adults = mysqli_real_escape_string($con, $_POST['adults']);
    $children = mysqli_real_escape_string($con, $_POST['children']);
    $services = isset($_POST['services_list']) ? $_POST['services_list'] : [];
    $total_price = calculate_total_price($adults, $children, $services); // Custom function to calculate total
    $booking_status = 'Pending'; // You can change this based on your logic

    // Insert into the booking table
    $booking_query = "INSERT INTO bookings (user_id, tour_id, booking_date, custom_date, adults, children, total_price, booking_status) 
                      VALUES ('$user_id', '$tour_id', '$booking_date', '$custom_date', '$adults', '$children', '$total_price', '$booking_status')";

    if (mysqli_query($con, $booking_query)) {
        // Get the last inserted booking ID
        $booking_id = mysqli_insert_id($con);

        // Insert into the cart table
        $cart_query = "INSERT INTO cart (user_id, booking_id, tour_id, total_price) 
                       VALUES ('$user_id', '$booking_id', '$tour_id', '$total_price')";

        if (mysqli_query($con, $cart_query)) {
            // Redirect to a success page or show a success message
            header('Location: cart.php');
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Function to calculate total price
function calculate_total_price($adults, $children, $services) {
    $adult_price = 340; // Example price for adults
    $child_price = 20; // Example price for children
    $service_prices = [
        '0' => 10, // Home Pickup
        '1' => 15, // Night Food
        '2' => 20  // Seaplane Flying
    ];

    // Calculate total
    $total = ($adults * $adult_price) + ($children * $child_price);

    // Add extra services price if selected
    foreach ($services as $service) {
        if (isset($service_prices[$service])) {
            $total += $service_prices[$service];
        }
    }

    return $total;
}




?>

