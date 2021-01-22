<?php
include 'config/setup.php';
session_start();



$fname = $_POST['name'];
$uname = $_POST['username'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$email = $_POST['email'];
$nat = $_POST['country'];
$dob = $_POST['birth'];
$gen = $_POST['gender'];



if (isset($_POST['submit'])) 
{
	if ($pass == $cpass) 

	{
		$q = " select * from user_table where uname = '$uname' ";

		$r = mysqli_query($con,$q);

		$num = mysqli_num_rows($r);

		if ($num >= 1) 
		{
			header("location:signup.php?text= oops sorry!! mentioned username already exists, Please choose a different one to sign up.");
		}
		else
		{
			$q = " select * from user_table where email = '$email' ";

			$r = mysqli_query($con,$q);

			$num = mysqli_num_rows($r);
			if ($num >= 1) {
				header("location:signup.php?text2= oops sorry!! mentioned email address already exists, Please choose a different one to sign up.");
			}
			else
			{

			$q = " insert into user_table (uname,upass,fname,email,nationality,gender,birthday) values ('$uname','$pass','$fname','$email','$nat','$gen','$dob') ";

			$r = mysqli_query($con,$q);


			header("location:index.php?success=Congratulations! You have successfully signed up.");
			}
		}
		
	}
	else
	{
		header("location:signup.php?Warning= Passwords do not match.");
	}

		
	
}
	





?>