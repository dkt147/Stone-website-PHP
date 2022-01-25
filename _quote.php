<?php include 'config.php'?>
<?php
//   session_start();
//   if(!isset($_SESSION['username']))
//   { 
//     header("Location: login.php");
//   }
  
if ($con) {
    
$product         = $_POST['product'];
$code            = $_POST['code'];
$name       = $_POST['name'];
$company         = $_POST['company'];
$email            = $_POST['email'];
$country       = $_POST['country'];
$whatsapp       = $_POST['whatsapp'];
$phone         = $_POST['phone'];
$terms            = $_POST['terms'];
$ship       = $_POST['ship'];

echo $sql = "INSERT INTO `quote`(`name`, `product`, `email`, `code`, `country`, `company`, `whatsapp`, `phone`, `terms`, `ship`) VALUES
 ('{$name}','{$product}','{$email}','{$code}','{$country}','{$company}','{$whatsapp}','{$phone}','{$terms}','{$ship}')";

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