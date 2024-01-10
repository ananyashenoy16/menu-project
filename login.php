<?php
$login=0;
$invalid=0;
session_start();
$_SESSION['login_status']=false;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user_type=$_POST['user_type'];
    // $email=$_POST['email'];


// $sql="select * from `customers` where username='$username' and password='$password' and user_type='$user_type'";
$sql="select * from `customers` where username='$username'and user_type='$user_type' ";
$result=mysqli_query($con,$sql);
if($result){
$num=mysqli_num_rows($result);
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($password,$row['password'])){
              $login=1;
            //   echo "Login Success";
              $username=$row['username'];
              $user_type=$row['user_type'];
        
              if($user_type=="customer"){
                  $_SESSION['login_status']=true;
                  $_SESSION["username"]=$username;
                  $_SESSION["user_type"]=$user_type;
                  
                  ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>

                                window.location.href = "cancafe.php";
                        
                    
                    </script>
                    <?php
               }
              else if($user_type=="member"){
                  $_SESSION['login_status']=true;
                  $_SESSION["username"]=$username;
                  $_SESSION["user_type"]=$user_type;
          
                  ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>

                                window.location.href = "abc.php";
                        
                    
                    </script>
                    <?php
                }
                else if($user_type=="admin"){
                    $_SESSION['login_status']=true;
                    $_SESSION["username"]=$username;
                    $_SESSION["user_type"]=$user_type;
            
                    ?>
                      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                      <script>
  
                                  window.location.href = "admin.php";
                          
                      
                      </script>
                      <?php
                  }
           }
    else
    {
       $invalid=1;
   ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                title: "Oh no!",
                                text: "Password doesn't match",
                                icon: "error",
                                confirmButtonText: "OK"
                            }).then(function() {
                                window.location.href = "login.html";
                            });
                        });
                    </script>
                    <?php
    }
 }
}
    else
    {
       //echo "invalid credentials";
       $invalid=1;
      ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                // title: "!",
                                text: "Invalid Credentials",
                                icon: "error",
                                confirmButtonText: "OK"
                            }).then(function() {
                                window.location.href = "login.html";
                            });
                        });
                    </script>
                    <?php
    }
}
}

