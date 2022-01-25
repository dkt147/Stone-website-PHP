<?php include 'config.php'?>
<?php
//   session_start();
//   if(!isset($_SESSION['username']))
//   { 
//     header("Location: login.php");
//   }
  
if ($con) {
    
echo $email         = $_POST['email'];
echo $subject          = $_POST['subject'];
echo $message       = $_POST['message'];

echo $sql = "INSERT INTO `contact_us`(`contact_email`, `contact_heading`, `contact_desc`) VALUES ('{$email}','{$subject}','{$message}')";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:index.php");
	
}
else{
    echo "<script>alert('Contact failed')</script>";
	
}

}
?>