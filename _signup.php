<?php include 'config.php'?>
<?php
//   session_start();
//   if(!isset($_SESSION['username']))
//   { 
//     header("Location: login.php");
//   }
  
if ($con) {
    
echo $name          = $_POST['register-name'];
echo $email         = $_POST['register-email'];
echo $contact          = $_POST['register-phone'];
echo $pass       = $_POST['register-password'];

	echo $sql = "INSERT INTO `customers`(`customer_name`, `customer_email`, `customer_pass`, `customer_contact`) VALUES ('{$name}','{$email}','{$pass}','{$contact}')";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:index.php");
	
}
else{
    echo "<script>alert('Registration failed')</script>";
	
}

}
?>