<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    // Retrieve the decoded text from the AJAX request
    $decodedText = $_POST['decodeText'];

    // Assuming you want to compare with the qrCodePath in the customers table
    $sql = "SELECT COUNT(*) as count FROM `customers` WHERE qrCodePath = '$decodedText'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];

        echo ($count > 0) ? 'true' : 'false';
    } else {
        echo 'false';
    }
}
?>