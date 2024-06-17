<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$login = 0;
$invalid = 0;
session_start();
$_SESSION['login_status'] = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    // $package=$_POST['package'];
    $sql = "SELECT * FROM `customers` WHERE username='$username' AND user_type='$user_type'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($password, $row['password'])) {
            $login = 1;

            // ... (your existing code)

            if ($user_type == "member" && $row['status'] == "approved") {
                $_SESSION['login_status'] = true;
                $_SESSION["username"] = $username;
                $_SESSION["user_type"] = $user_type;
                $_SESSION["userid"] = $row['userid']; // Set the user ID in the session
                header('Location:qrcode.php');
                exit();
            

            } else if ($user_type == "member" && $row['status'] == "pending") {
                echo '<script type="text/javascript">';
                echo 'alert("Your account is still pending for approval!")';
                echo 'window.location.href = "login.html"';
                echo '</script>';
            } else if ($user_type == "admin") {
                $_SESSION['login_status'] = true;
                $_SESSION["username"] = $username;
                $_SESSION["user_type"] = $user_type;
                header('location:admin.php');
                exit(); // Ensure that the script stops after the header redirection
            }
        } else {
            $invalid = 1;
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>';
            echo 'document.addEventListener("DOMContentLoaded", function() {';
            echo 'Swal.fire({';
            echo 'title: "Oh no!",';
            echo 'text: "Password doesn\'t match",';
            echo 'icon: "error",';
            echo 'confirmButtonText: "OK"';
            echo '}).then(function() {';
            echo 'window.location.href = "login.html";';
            echo '});';
            echo '});';
            echo '</script>';
        }
    } else {
        $invalid = 1;
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo 'Swal.fire({';
        echo 'text: "Invalid Credentials",';
        echo 'icon: "error",';
        echo 'confirmButtonText: "OK"';
        echo '}).then(function() {';
        echo 'window.location.href = "login.html";';
        echo '});';
        echo '});';
        echo '</script>';
    }
}
?>
