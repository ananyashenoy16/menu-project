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



// $sql="select * from `customers` where username='$username' and password='$password' and user_type='$user_type'";
$sql="select * from `customers` where username='$username'and user_type='$user_type' ";
$result=mysqli_query($con,$sql);
if($result){
$num=mysqli_num_rows($result);
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($password,$row['password'])){
              $login=1;
              echo "Login Success";
              $username=$row['username'];
              $user_type=$row['user_type'];
        
              if($user_type=="student"){
                  $_SESSION['login_status']=true;
                  $_SESSION["username"]=$username;
                  $_SESSION["user_type"]=$user_type;
          
                  header("location:cancafe.php");
               }
              else if($user_type=="teacher"){
                  $_SESSION['login_status']=true;
                  $_SESSION["username"]=$username;
                  $_SESSION["user_type"]=$user_type;
          
                  header("location:teacher.php");
                }
           }
    else
    {
       $invalid=1;
    //    header('location:login.html');
       echo "<script>
        
                   window.onload=function(){
                     alert('password doesnt match');}
                    </script>";
                   
    }
 }
}
    else
    {
       //echo "invalid credentials";
       $invalid=1;
       echo "<script>
        
                   window.onload=function(){
                     alert('invalid credentials');}
                    </script>";
    }
}
}

