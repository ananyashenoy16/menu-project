<?php
require_once 'qrfiles/phpqrcode/qrlib.php';
require_once 'connect.php'; // Database configuration file

// Function to generate a unique QR code for a user ID
function generateQRCode($con, $userid) {
    $path = 'qrcodes/';
    $qrCodeValue = uniqid(); // You can customize the value as per your requirement
    $fileName = $path . 'qr_' . $userid . '.png';
    
    // Store the QR code value in the database
    $updateQuery = "UPDATE customers SET qrCodePath = '$qrCodeValue' WHERE userid = $userid";
    $con->query($updateQuery);
    
    QRcode::png($qrCodeValue, $fileName, 'H', 4, 4);
    return $qrCodeValue;
}

// Database connection
$con = mysqli_connect($hostname, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch user IDs from the customers table
$query = "SELECT userid FROM customers";
$result = $con->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userid = $row['userid'];

        // Generate QR code for each user ID
        generateQRCode($con, $userid);
        header('Location:abc.php');
    }
}

$con->close();
?>
