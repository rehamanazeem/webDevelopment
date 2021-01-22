<!DOCTYPE html>
<html>
<head>
	<title>
	Login page
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/custom.css">

	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One|Shadows+Into+Light" rel="stylesheet">

</head>

<body>

	<!-- login/logout warning starts -->
	<?php

	if (@$_GET['login'] == true) 
	{
	?>
	<div class="alert alert-dark" > 
		<?php echo $_GET['login'] ?> 
	</div>

	<?php
	}
	?>

	<?php

	if (@$_GET['logout'] == true) 
	{
	?>
	<div class="alert alert-dark" > 
		<?php echo $_GET['logout'] ?> 
	</div>

	<?php
	}
	?>
	<!-- login/logout warning ends -->

	<!-- heading  -->
	<a href="index.php"><h1> Backpack nest~</h1></a>

	

	<div class="container">

		<div class="row">

			<!-- login card starts here -->
			<div class="col-lg-6 m-auto" id="head">
				<div class="card mt-5">
					<div class="card-title">
						<br>
						<h2> Please Login </h2>
					</div>

					<!-- warning starts -->
					<?php
					if (@$_GET['Empty'] == true)
					{
					?>

					<div class="alert-dark"> 
						<?php echo $_GET['Empty'] ?> 
					 </div>

					<?php
					}
					?>

					<?php
					if (@$_GET['signup'] == true)
					{
					?>

					<div class="alert-dark"> 
						User not found. <br> <?php echo $_GET['signup'] ?>  <a href="signup.php"> Sign up</a> first!
					 </div>

					<?php
					}
					?>

					<?php
					if (@$_GET['success'] == true)
					{
					?>

					<div class="alert-dark"> 
						<?php echo $_GET['success'] ?> 
					 </div>

					<?php
					}
					?>
					<!-- Warning ends -->

					<!-- Input fields starts  -->
					<div class="card-body">
						<form action="validation.php" method="post">

							<input type="text" name="username" class="form-control" 
							placeholder="User name">
							
							<br>
							
							<input type="password" name="password" class="form-control" placeholder="Password">

							<br>

							<button class="btn btn-success" name="login">Login</button>
	
						</form>	
					</div>
					<!-- Input fields ends  -->

					<h6><b> Or <a href="signup.php"> Sign up! </a></b></h6>

				</div>	
			</div>
			<!-- Login card ends here  -->
		
		</div>
		
	</div>

</body>
</html>