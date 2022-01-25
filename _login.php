<?php
//   session_start();
//   if(!isset($_SESSION['username']))
//   { 
//     header("Location: login.php");
//   }
  
include 'config.php';

$email      = $_POST['singin-email'];
$pass      = $_POST['singin-password'];


  echo  $checkUserquery="SELECT * FROM customers WHERE customer_email='{$email}' and customer_pass='{$pass}'";
   $resultant=mysqli_query($con,$checkUserquery);



    if(mysqli_num_rows($resultant)>0){
      $output = mysqli_fetch_assoc($resultant);
      Session_start();
      echo $_SESSION['email'] = $email;
      echo $_SESSION['id'] = $output['customer_id'];
     header("Location:index.php");
      //echo "<script>alert('$email')</script>";	
    }
    else{
        echo "<script>alert('Login failed')</script>";	
    }
   

    
?>

