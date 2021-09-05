<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	



	
	<title>Hotel BD</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript"></script>

</head>
<body>
	<div id="full">
		<div id="room1" style="background-image: url('img/room.jpg'); height: 1000px; ">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav1">
				<ul class="nav justify-content-center">
				  <li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="hotels.php">Hotels</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Contect Us</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Help</a>
				  </li>
				</ul>
			</div>
			
			
		</div>
			<div class="banner">
				<div id="form">
				  <form action="" method="post">
					<table style="color: blue;">
						<tr>
							<td>Status</td>
							<td><input type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
							<td>NID no.</td>
							<td><input type="text" name="n_id" placeholder="Enter ID" title="ID"></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
						</tr>
						
							<?php 
									
									$city=$_GET['city'];
									$hotel_name=$_GET['hotel'];
									$c_in=$_GET['c_in'];
									$c_out=$_GET['c_out'];
												
							?>

						<tr>
							<td>City</td>
							<td><input type="text" name="city" value="<?php echo $city; ?>">
								</td>
						</tr>
						<tr>
							<td>Hotel</td>
							<td><input type="text" name="hotel_name" value="<?php echo $hotel_name; ?>">
								</td>
						</tr>
						<?php 
								 		
						?>
						
						<tr>
							<td>Check in date</td>
							<td><input type="date" name="c_in" value="<?php echo $c_in; ?>"  title="Check in"></td>
							<td>Check out</td>
							<td><input type="date" name="c_out" value="<?php echo $c_out; ?>" title="Check out"></td>
						</tr>
						<tr>
							<td>Enter Members</td>
							<td><input type="text" name="members" placeholder="Enter Members" title="Members"></td>
						</tr>
						<td>
							<td><input style="width: 120px; height: 30px; border-radius: 15px; opacity: 0.7 " type="submit" name="submit" value="submit"></td>
						</td>
							
							
					</table>
				  </form>
				  <?php   
						 /*****roombooking to add mysql ***** */
						 if(isset($_POST['submit'])) {
		 
						$name=$_POST['name'];
						$n_id=$_POST['n_id'];
						$email=$_POST['email'];
						$division=$_POST['division'];
						$city=$_POST['city'];
						$hotel_name=$_POST['hotel_name'];
						$c_in=$_POST['c_in'];
						$c_out=$_POST['c_out'];
						$members=$_POST['members'];


							if(mysqli_query($db,"insert into book(name,n_id,email,division,city,hotel_name,c_in,c_out,members) value('$name','$n_id','$email','$division','$city','$hotel_name','$c_in','$c_out','$members')"))
							{
								echo "data Insert";
							}
							else
							{
								echo "data not Insert";
								
							}

				 }

					   
                   ?>
				  
				  
				</div>
			</div>
		  
	  </div>
	</div>
  
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
  
</body>

</html>