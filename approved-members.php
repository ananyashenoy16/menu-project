<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Approval</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      
    <!-- fonts style -->
    <link href="css/style.css" rel="stylesheet" />
   
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
        table{
            /* border:1px solid #ff4b2b; */
            border-collapse:collapse;
           
        }
        td{
            background:#fff;
            border:1px solid #ff4b2b;
        }
        td,th{
            /* border:0.2px solid black; */
            padding: 3px;
          
            /* border-radius:20px; */
            text-align:center;
            width: 192px;
            /* height: 70px; */
        }
        th{
            background:#ff4b2b;
            color:#fff;
            height: 50px;
            border:1px solid #fff;
        }
        
        .center{
            margin: 20px;
            height: 100vh;
            display: flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
       
    </style>
</head>
<body>

<nav class="navbar">
    <div class="logo">
        <img src="images/navlogo.png" alt="">
    </div>
    <div class="nav-link">
        <ul id="myul">
            <li><a href="admin.php">Scanner</a></li>
            <li><a href="admin-approval.php">Give Approval</a></li>
            <li><a href="approved-members.php">Approved Members</a></li>
            <li><a href="logout.php"><button>LOG OUT</button></a></li>
        </ul>
    </div>
</nav>

<div class="center">
    <h2>Approved Members</h2>

    <?php
    // Query to fetch approved members grouped by package
    $query = "SELECT * FROM customers WHERE status = 'approved' ORDER BY package ASC";
    $result = mysqli_query($con, $query);

    $packages = [2199, 4099, 10099]; // Assuming these are the package names

    // Loop through each package
    foreach ($packages as $package) {
        // Display a heading for each package
        echo "<h4>$package Package</h4>";

        // Display table for members in this package
        echo '<table>';
        echo '<tr><th>ID</th><th>Username</th><th>Email</th><th>Transaction ID</th></tr>';

        // Fetch and display members for the current package
        while ($row = mysqli_fetch_array($result)) {
            if ($row['package'] == $package) {
                echo "<tr>";
                echo "<td>{$row['userid']}</td>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['transaction']}</td>";
                echo "</tr>";
            }
        }

        echo '</table>';
        // Rewind the result set pointer back to the beginning for the next package
        mysqli_data_seek($result, 0);
    }
    ?>
</div>

</body>
</html>
