<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

// Include the connection file
require _DIR_ . "/connect.php";

// Check if the connection is successful
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM customers
        WHERE reset_token_hash = ?";

$stmt = $con->prepare($sql);
if (!$stmt) {
    die('Error in prepare statements' . $con->error);
}

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("Token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("Token has expired");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        * {
             margin: 0; padding: 0;
        }
        body{
            height: 100vh;
            background-color:  #2AAFB6;
        }
        .headersection {
            padding: 10px;
            text-align: center;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.5);        
            font-size: 30px;
        }
        section{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            width:400px;
            height:fit-content;
            padding:20px;
            background-color:white;
            margin:50px auto;
            border-radius: 10px;
            font-size:20px;
        }
        section header{
            margin-bottom:40px;
            font-weight:bold;
        }
        form{
            font-size:15px;
        }
        form .field.input input{
            margin-bottom:10px;
            width:95%;
            padding:5px;
            border-radius: 5px;
            border:2px solid grey;
        }
        .field.button input{
            width:100%;
            background-color:black;
            color:white;
            border:none;
            padding: 10px;
            border-radius: 5px;
        }
        form{
            display:flex;
            flex-direction:column;
            justify-content:center;
        }
        @media(max-width:480px){
            .headersection{
                font-size:15px;
            }
            section{
                width:250px;
            }
        }
    </style>
</head>

<body>
<div class="headersection">
            <h1>Online Voting System</h1>
        </div>
    <div class="wrapper">
        <section class="form login">
            <header>Enter New Password</header>
            <form action="./process-reset-password.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                <div class="field input">
                    <label for="password">New Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter New Password" required>
                </div>
                <div class="field input">
                    <label for="password_confirmation">Re-Type Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Reset Password">
                </div>
            </form>
        </section>
    </div>
</body>
<script src="../javascript/pass-show-hide.js"></script>
</html>