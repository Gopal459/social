<?php

session_start();

include('config.php');

?>

<?php 

	$email=$_POST['email'];
	$num = mt_rand(100000,999999); 

	$query="select * from user_reg_ludo where email='$email'";
	$result=mysqli_query($conn,$query) or die('Error: Cannot connect to db' );
	if(mysqli_num_rows($result))
	{   
		$subject="Forget Password | tirupatigaminghub.com"; 
		$message="Your New Password is: ".$num;
		
		$query1 = "update user_reg_ludo set password='$num' where email='$email'";
		mysqli_query($conn,$query1);
		
		mail($email, $subject, $message);
		echo '<script type="text/javascript">'; 
		echo 'alert("Mail Send Done New Passowrd ");'; 
		echo 'window.location.href = "http://tirupatigaminghub.com";';
		echo '</script>';
	}
	else
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("No user exist with this email id");'; 
		echo 'window.location.href = "http://tirupatigaminghub.com";';
		echo '</script>';
	}
			
?>