<!-- abc.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/b7a08da434.js" crossorigin="anonymous"></script>
     <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      
        <!-- fonts style -->
        <link href="css/style.css" rel="stylesheet" />
       
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
            text-align: center;
            height: 100vh;
            display: flex;
            justify-content:center;
            align-items:center;
           
        }

        h2 {
            color: #333;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        img {
            max-width: 100%;
            height: 150px;
            width:150px;
            margin-top: 20px;
        }

        .user-details {
            font-family: serif;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 600px;
           
        }
    </style>
</head>
<body>

<?php
// Function to get the QR code filename for a user
function getQRCodeFilename($userid) {
    return 'qrcodes/qr_' . $userid . '.png';
}

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['login_status']) && $_SESSION['login_status'] === true) {
    // Get the logged-in user's userid
    $userid = $_SESSION['userid'];

    // Database connection
    require_once 'connect.php';

    // Fetch user details from the customers table
    $query = "SELECT username, email, transaction FROM customers WHERE userid = '$userid'";
    $result = $con->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display user details
        echo '<div class="user-details">';
        echo '<h2>Your Details</h2>';
        echo '<p><strong>Username:</strong> ' . $row['username'] . '</p>';
        echo '<p><strong>Email:</strong> ' . $row['email'] . '</p>';
        echo '<p><strong>Transaction ID:</strong> ' . $row['transaction'] . '</p>';

        // Fetch the QR code filename for the logged-in user
        $qrCodeFilename = getQRCodeFilename($userid);

        // Display the QR code image in a div
        echo '<div>';
        echo '<img src="' . $qrCodeFilename . '" alt="User QR Code">';
        echo '</div>';
        echo '<h4>Your Unique QR Code<h4>';
        echo '</div>';
    } else {
        echo 'User details not found.';
    }

    $con->close();
} else {
    // Redirect to the login page or handle the case where the user is not logged in
    header("Location: login.html");
    exit();
}
?>
 <nav class="navbar">
          <div class="logo">
             <img src="images/welcome1.png" alt="">
          </div>
          <div class="nav-link" >
              <ul id="myul" >
                  <li class="cc" ><a href="abc.php">HOME</a></li>
                 
                   
                  <a href="logout.php"> <button>LOG OUT</button></a>
              </ul>
          </div>
          <img class="menup" src="images/menu1.png" alt="sushi">
          </div>
            </div>
       
      </nav>

</body>
</html>
