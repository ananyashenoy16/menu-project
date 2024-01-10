<?php

$token = $_POST["token"];

$token_hash = hash("sha256", $token);

// Include the connection file
$con = require __DIR__ . "/connect.php";

$sql = "SELECT * FROM customers
        WHERE reset_token_hash = ?";

$stmt = $con->prepare($sql);

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

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password = password_hash($_POST["password"],PASSWORD_DEFAULT);

$sql = "UPDATE customers
        SET password = ?,
        reset_token_hash = NULL,
            reset_token_expires_at= NULL
        WHERE userid = ?";

$stmt = $con->prepare($sql);

$stmt->bind_param("ss", $password, $user["userid"]);

$stmt->execute();

header("Location:/menu-project/login.html");
exit;
?>