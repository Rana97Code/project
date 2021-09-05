<?php
include("connection.php");
?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$run = mysqli_query($db,"SELECT * FROM log_in WHERE id='$user'");
		$get_user_email = mysqli_fetch_assoc($run);
			$uname_db = $get_user_email['name'];
}
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
	

</head>
<body>
	<div id="full">
		<div style="background-image: url('img/b1.jpg'); width:100%;height: 600px; ">
		<div id="header" style="position: fixed;">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav1">
				<nav class="nav justify-content-center">
					<a class="nav-link" href="#">Home</a>
					<a class="nav-link" href="hotels.php">Hotels</a>
					<a class="nav-link" href="#">About us</a>
					<a class="nav-link" href="#">Help</a>
				</nav>
			</div>
			<div class="" style="margin-top: 20px;">
				<div class="btn btn-info" style="margin-right: 8px;">
				<?php 
						if ($user!="") {
							echo '<a style="" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="" href="signup.php">SIGN IN</a>';
						}
					 ?>
					
				</div>
				<div class="btn btn-info" style="">
					<?php 
						if ($user!="") {
							echo '<a style="" href="index.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
			</div>
		</div>
		<div id="banner" style="padding-top: 100px;">
		
		<center>
		   <div class="" style="position: relative; padding-top:200px; " >
		  		  <form action="search_result.php" method="post">
                    <div  >
					   <input type="text" name="search" class=" col-md-3 btn btn-default" placeholder=" Search Your Convinent Hotel" style="padding: 4px;" /><input type="SUBMIT" name="submit" value="search" class="btn btn-default" style="padding: 4px 10px; " />
					   
					</div>
				  </form>
		   </div>
		  
		</center>
		   <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
		   <?php 
		     ?>
		 
		 
		</div>
	  </div>
	
			<div id="f1">
				
							
				

			</div>


			
    </div>
  
  
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/JavaScript"></script>
  
</body>

</html>