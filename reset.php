<!DOCTYPE html>
<html lang="en">

<head>
    </head>

<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the connection file
include __DIR__ . "/connect.php";

if (isset($_POST["email"])) {
    $email = $_POST["email"];

    // Check if email exists in the database
    $checkEmailStmt = $con->prepare("SELECT * FROM `customers` WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailResult = $checkEmailStmt->get_result();
    $userExists = $checkEmailResult->fetch_assoc();
    $checkEmailStmt->close();

    if (!$userExists) {
        // Display error message
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
            Swal.fire({
                icon: "error",
                title: "Email not found",
                showConfirmButton: true
            }).then(function () {
                window.location.href = "./forgot.php";
            });
        </script>
        <?php
    } else {
        // Generate token and update the database
        $token = bin2hex(random_bytes(16));
        $token_hash = hash("sha256", $token);
        $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

        $updateTokenStmt = $con->prepare("UPDATE customers SET reset_token_hash = ?, reset_token_expires_at = ? WHERE email = ?");
        $updateTokenStmt->bind_param("sss", $token_hash, $expiry, $email);
        $updateTokenStmt->execute();

        if ($updateTokenStmt->affected_rows) {
            $mail = require __DIR__ . "/mailer.php";

            $mail->setFrom("noreply@example.com");
            $mail->addAddress($email);
            $mail->Subject = "Password Reset Request";

            // Email Body
            // ... (your email body content)

            try {
                $mail->send();
                ?>
                <script>
                    Swal.fire({
                        title: "Success!",
                        text: "Email sent successfully!",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(function () {
                        window.location.href = "./reset.php"; // Redirect to the admin dashboard
                    });
                </script>
                <?php
            } catch (Exception $e) {
                // Log the detailed error for debugging
                error_log("Email sending failed: {$mail->ErrorInfo}");

                // Display a user-friendly error message
                echo "An error occurred while sending the email. Please try again later.";
            }
        }
        $updateTokenStmt->close();
    }
}
?>
<p>Check your mail for reset link (if email sent successfully)</p>
<?php
$con->close();
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    </head>

<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the connection file
include __DIR__ . "/connect.php";

if (isset($_POST["email"])) {
    $email = $_POST["email"];

    // Check if email exists in the database
    $checkEmailStmt = $con->prepare("SELECT * FROM `customers` WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailResult = $checkEmailStmt->get_result();
    $userExists = $checkEmailResult->fetch_assoc();
    $checkEmailStmt->close();

    if (!$userExists) {
        // Display error message
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
            Swal.fire({
                icon: "error",
                title: "Email not found",
                showConfirmButton: true
            }).then(function () {
                window.location.href = "./forgot.php";
            });
        </script>
        <?php
    } else {
        // Generate token and update the database
        $token = bin2hex(random_bytes(16));
        $token_hash = hash("sha256", $token);
        $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

        $updateTokenStmt = $con->prepare("UPDATE customers SET reset_token_hash = ?, reset_token_expires_at = ? WHERE email = ?");
        $updateTokenStmt->bind_param("sss", $token_hash, $expiry, $email);
        $updateTokenStmt->execute();

        if ($updateTokenStmt->affected_rows) {
            $mail = require __DIR__ . "/mailer.php";

            $mail->setFrom("noreply@example.com");
            $mail->addAddress($email);
            $mail->Subject = "Password Reset Request";

            // Email Body
            // ... (your email body content)

            try {
                $mail->send();
                ?>
                <script>
                    Swal.fire({
                        title: "Success!",
                        text: "Email sent successfully!",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(function () {
                        window.location.href = "./reset.php"; // Redirect to the admin dashboard
                    });
                </script>
                <?php
            } catch (Exception $e) {
                // Log the detailed error for debugging
                error_log("Email sending failed: {$mail->ErrorInfo}");

                // Display a user-friendly error message
                echo "An error occurred while sending the email. Please try again later.";
            }
        }
        $updateTokenStmt->close();
    }
}
?>
<p>Check your mail for reset link (if email sent successfully)</p>
<?php
$con->close();
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
