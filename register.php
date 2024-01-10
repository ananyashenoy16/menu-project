
<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpasssword=$_POST['cpassword'];
    $user_type=$_POST['user_type'];
    $email=$_POST['email'];


$sql="select * from `customers` where username='$username'";

$result=mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        //echo "user already exists";
        $user=1;
        if($user){
            echo "<script>

           window.onload=function(){
             alert(' oh- sorryy!username already exists,Try another');}
            </script>";
           
        }
      
    }
   

 else {
        
        if(($password==$cpasssword)){
        $hash= password_hash($password,PASSWORD_DEFAULT);
        $sql="insert into `customers`(`username`,`password`,`user_type`,`email`) values('$username','$hash','$user_type','$email')";
        $result=mysqli_query($con,$sql);
        if($result){
                   // echo "<br> sign up successfull";
                   $success=1;
                   if($success)
                   {
                  
                    header('location:login.html');
                    echo "<script>
        
                    window.onload=function(){
                      alert('Registered successfully!!');}
                     </script>";
                    
                  } 
                }
                else 
                {
                    die(mysqli_error($con));
                   
                }
    }
    else{
        echo "<script>
        
        window.onload=function(){
          alert('Password dont match');}
         </script>";
       
        
    }
}

}
}


?>


        