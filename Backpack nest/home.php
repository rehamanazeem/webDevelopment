<?php 

include 'config/setup.php';
session_start();

//Selecting the current user in the database
$val= $_SESSION['user'];
 
$q = "select * from user_table where uname = '$val' ";
$r = mysqli_query($con,$q);

if (mysqli_num_rows($r)>0)
	{
		$row = mysqli_fetch_assoc($r);
	}

?>

<!DOCTYPE html>
<html>
<head>	
	<title>Home</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/home.css">

	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One|Shadows+Into+Light" rel="stylesheet">
</head>

<body>
	

	<?php  
	
	if (isset($_SESSION['user'])) 
	{
		
	?>
	
	<!-- heading -->
	<div class="cont">

		<a href="home.php"><h1>Backpack Nest~</h1></a>

	</div>

	<div class="page">
		
		<!-- logout button -->
		<div class="button">
		<a href="logout.php"><img src="img/exit.png"></a>
		</div>
		
	</div>
	

	<br>

	<!-- post maker and posts holder-->
	<div class="container">
		<div class="row">

			<div class="col-md-11">
				<div class="feed">
						
						<!-- post maker starts-->
						<div class="post">
							
							<?php 
								echo '<form action="upload.php" method="post">

								<input class="postbox form-control" type="text" name="postfield" 
								placeholder="';
								
								echo "Welcome ";
								echo $_SESSION['user'] ;
								echo '! share useful tips here.." required>';
							?> 

								<input class="place form-control" type="text" name="country" placeholder="Country" required>

								<input class="place form-control" type="text" name="city" placeholder="City">

								<input class="place form-control" type="text" name="landmark" placeholder="Landmark">

								<br><br>

								<button class="btn-success" type="submit" name="postbtn">POST</button>

							</form>	
						</div>

					<br>				
					<h2>Recently shared places:</h2>
					<br>

					<!-- DISPLAYING THE ADDED POSTS-->
					<?php 
						$qry = "select * from post_table order by id desc";
						$rslt = mysqli_query($con,$qry);
						if (mysqli_num_rows($rslt)>0) 
						{
							
						
							while ($data= mysqli_fetch_assoc($rslt)) 
							{
							
					?>
							<div class="card-post">
								 <h4><?php echo $data["uname"]; ?></h4>
								 <h6 class="loc">Shares about: <?php echo $data["country"].' '.' | Near: '. $data['landmark'].', '.$data["city"];  ?>.</h6>

								 <P>  <?php echo $data["text"]; ?> </P>
								 <h6><b>Posted on : <?php echo $data["date"]; ?></b></h6>
							</div>
					<?php
							}
						}
						else{
							echo "No posts to show";
						}

					?>
									
				</div>
				
			</div>
			<!-- SIDE CARD/PROFILE SHOWCASING-->
			<div class="col-md-1">
				
				<div class="feed2">
					<br>
					<div class="img m-auto">							
							<h6>image</h6>							
					</div>

					<div class="greet">
						<h5><?php echo $row["fname"]; ?> </h5>
						<h6>(<?php echo $row["uname"];  ?>)</h6>
					</div>

					<div class="menu1">
						<h6>From: <?php echo $row["nationality"]; ?></h6>
						<h6>Gender: <?php echo $row["gender"]; ?></h6>

					</div>

					<div class="menu2">
						<h6><a href="#">
							Post a Picture	
						</a></h6>						
					</div>										
				</div>				
			
			</div>
			
		</div>
		
	</div>

	<?php
	}

	else
	{
		header("location:index.php?login= You have to login first in order to access this page.");
	}
	?>
</body>
</html>