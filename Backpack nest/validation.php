<?php  
include 'config/setup.php';
session_start();

$uname = $_POST['username'];
$upass = $_POST['password'];

if (!$con) {
	die();
}
else
{
	if (isset($_POST['login'])) 
	{
		if (empty($uname) || empty($upass)) 
		{
			header("location:index.php?Empty= Please enter username and password!");
		}
		else
		{
			$q = "select * from user_table where uname = '$uname' && upass = '$upass' ";

			$res = mysqli_query($con,$q);
			
			$num = mysqli_num_rows($res);

			if ($num >= 1) 
			{
				$_SESSION['user']= $uname;
				
				header("location:home.php");
			}

			else
			{
				header("location:index.php?signup=Please");
			}
		}
	}
}



?>