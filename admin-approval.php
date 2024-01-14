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
          <div class="nav-link" >
              <ul id="myul" >
              <li><a href="admin.php
                  ">Scanner</a></li>
                  <li><a href="admin-approval.php">Member Approval</a></li>
                </li>
                   
                  <a href="logout.php"> <button>LOG OUT</button></a>
              </ul>
          </div>
          <img class="menup" src="images/menu1.png" alt="sushi">
          </div>
            </div>
       
      </nav>
    <div class="center">
        <table id="users">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Transaction Id</th>
                <th>Action</th>
            </tr>

            <?php
        $query = "SELECT * FROM customers WHERE status = 'pending' ORDER BY userid ASC";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['userid']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['transaction']; ?></td>
                <td>
                    <form action="admin-approval.php" method="POST">
                        <input type="hidden" name="userid" value="<?php echo $row['userid']; ?>"/>
                        <input type="submit" name="approve" style="background:green" value="Approve"/>
                        <input type="submit" name="deny" style="background:red"  value="Deny"/>
                    </form>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

    <?php

    if(isset($_POST['approve'])){
        $userid = $_POST['userid'];

        $select = "UPDATE customers SET status = 'approved' WHERE userid = '$userid'";

        $result = mysqli_query($con, $select);

        echo '<script type = "text/javascript">';
        echo 'alert("User Approved!");';
        echo 'window.location.href = "admin-approval.php"';
        echo '</script>';
    }

    if(isset($_POST['deny'])){
        $userid = $_POST['userid'];

        $select = "DELETE FROM customers WHERE userid = '$userid'";
        $result = mysqli_query($con, $select);

        echo '<script type = "text/javascript">';
        echo 'alert("User Denied!");';
        echo 'window.location.href = "admin-approval.php"';
        echo '</script>';
    }

    ?>
</body>
</html>