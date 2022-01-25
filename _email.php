<?php include 'config.php'?>
<?php
//   session_start();
//   if(!isset($_SESSION['username']))
//   { 
//     header("Location: login.php");
//   }
  
if ($con) {
    
echo $email         = $_POST['email'];

	echo $sql = "INSERT INTO `email`(`email`) VALUES ('{$email}')";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:index.php");
	
}
else{
    echo "<script>alert('Email send failed')</script>";
	
}

}
?>