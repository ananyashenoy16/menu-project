<!-- <?php
// session_start();
// if(!isset($_SESSION['username'])){
//   header('location:login.html');
// }

 ?>  -->

  
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/b7a08da434.js" crossorigin="anonymous"></script>
     <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      
        <!-- fonts style -->
        <link href="css/style.css" rel="stylesheet" />
       
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
<style>
  
body {
  /* background-image: url("https://cdn.pixabay.com/photo/2022/05/05/14/51/mutton-fry-7176341_1280.jpg"); /* Replace with your image path */
  background-size: cover; */
  
  font-family: sans-serif;
  text-align: center;
  color: white;
}

.center-div {

}
.left-side{
  position: relative;
  left: 0;
}
.left-side,
.right-side {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 50%;
  vertical-align: top;
  padding: 10px;
}
.right-side{
  position: relative;
  float: right;
  right: 0;
 
}
.left-side input {
  margin-bottom: 10px;
  padding: 10px;
  border: 1px solid white;
  border-radius: 5px;
  background-color: rgba(255, 255, 255, 0.2);
  color: white;
  width: 200px;
}
.full{
  display: flex;
  justify-content: center;

}
.qr{
  width: 200px;
  height: 200px;
}
.full1{
  display: flex;
  flex-direction: column;
  position: absolute;
  justify-content:center;
  align-items:center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25%;
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
  padding: 20px;
  border-radius: 10px;
}
</style>
</head>
<body>
<?php
session_start();
 if(!isset($_SESSION['username'])){
   header('location:login.html');
  exit(); //It's good practice to add an exit after a header redirect
}
?>


<nav class="navbar">
          <div class="logo">
             <img src="images/welcome1.png" alt="">
          </div>
          <div class="nav-link" >
              <ul id="myul" >
                  <li class="cc" ><a href="abc.php">HOME</a></li>
                  <!-- <li class="cc" ><a href="menu.php">MENU</a></li>
                  <li class="cc" ><a href="smem.html">MEMBERSHIP</a></li>
                  <li class="cc" ><a href="">ABOUT</a> -->
                   <ul>
                    <!-- <li><a href="">Personal ID</a></li> -->
                    <li><a href="map.html
                    ">Get Directions</a></li>
                    <li><a href="about.html">About Us</a></li>
                   </ul></li>
                   
                  <a href="logout.php"> <button>LOG OUT</button></a>
              </ul>
          </div>
          <img class="menup" src="images/menu1.png" alt="sushi">
          </div>
            </div>
       
      </nav>

  
<div class="full1">
  <div class="right-side">
    <h2>Your Unique QR Code</h2>
    <img src="https://imgs.search.brave.com/Tk-itLh4Avazn0HqXlOK2ALBDTFO3ZUvMGab4VWD_L4/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1waG90/by9xci1jb2RlXzg2/OTQyMy0xMDc3Lmpw/Zz9zaXplPTYyNiZl/eHQ9anBn" alt="QR Code" class="qr">
    <h1>
    <?php 
      // Check if the 'username' key is set in $_SESSION before echoing
      if(isset($_SESSION['username'])){
        echo $_SESSION['username'];
      }
    ?>
    </h1>
  </div>
</div>

</body>
</html>


</body>
</html>
