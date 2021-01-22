<?php 
	include 'config/setup.php';
	session_start();

	if (isset($_POST['postbtn'])) 
	{
		$uname = $_SESSION['user'];
		$land = $_POST['landmark'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$datatime = date("H:i d-F-y");
		
		$post = $_POST['postfield'];


		$query = "insert into post_table(uname,date,text,landmark,city,country) values('$uname','$datatime','$post','$land','$city','$country')";

		$result = mysqli_query($con,$query);
		if ($result) 
		{
			header("location:home.php");		
		}
	}
?>