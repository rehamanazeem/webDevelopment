
<!DOCTYPE html>
<html>
<head>
	<title>Sign up Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One|Shadows+Into+Light" rel="stylesheet">
</head>
<body>
	<div class="cont">
		<a href="index.php"><h1>Backpack Nest~</h1></a>
	</div>
	
	<?php
	if (@$_GET['Warning'] == true) 
	{
	?>

	<div class="alert-dark">
		<?php echo $_GET['Warning']; ?>	
	</div>

	<?php
	}
	?>

	<?php
	if (@$_GET['text'] == true) 
	{
	?>

	<div class="alert-dark">
		<?php echo $_GET['text']; ?>	
	</div>

	<?php
	}
	?>

	<?php
	if (@$_GET['text2'] == true) 
	{
	?>

	<div class="alert-dark">
		<?php echo $_GET['text2']; ?>	
	</div>

	<?php
	}
	?>

	<br><h4>Please fill up your Information.</h4> <br>
	<div class="container">
		<div class="row">
			
				<div class="col-lg-6">
					<form action="reg.php" method="post">
				
						<label for="name">Full name</label>
						<input class="form-control" type="text" name="name" required><br>

						<label for="username">Username</label>
						<input class="form-control" type="text" name="username" required><br>

						<label for="password">Set password</label>
						<input class="form-control" type="text" name="password" required><br>

						<label for="cpassword">Confirm password</label>
						<input class="form-control" type="text" name="cpassword" required><br>
						<br>
						<button class="btn btn-success" name="submit">Submit</button> <br><br>
						<h5><b>Or go back to the <a href="index.php">login page</a>.</b></h5>
				</div>
				<div class="col-lg-6">
					
						<label for="email">Email</label>
						<input class="form-control" type="text" name="email" required><br>

						<label for="country">Country</label>
						<input class="form-control" type="text" name="country" required><br>

						<label for="birth">Birthday</label>
						<input class="form-control" type="date" name="birth" required><br>
						
						<label for="gender">Gender</label><br>
						<input type="radio" name="gender" value="male" checked> Male
  						<input type="radio" name="gender" value="female"> Female<br> 
				</div>
						
					</form>

		</div>
		
	</div>
	
</body>
</html>