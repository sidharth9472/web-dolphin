<?php
if (isset($_POST['send'])){
 include "config.php";
	
}
   $fullname=mysqli_real_escape_string($conn, $_POST['fullname']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$mobile=mysqli_real_escape_string($conn, $_POST['mobile']);
	$message=mysqli_real_escape_string($conn, $_POST['message']);

	$sql="INSERT INTO `contact`(`fullname`, `email`, `mobile`, `message`) VALUES ('{$fullname}','{$email}','{$mobile}','{$message}')";

if(mysqli_query($conn ,$sql)){
    header("location:{$hostname}/contact.php");
}else{
         echo "<div class='alert alert-danger'>Query Failed.</div>";

}

?>