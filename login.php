<?php
include("connection.php");
?>
<?php 

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

<body style="background-image: url('img/b1.jpg'); width:100%;height: 610px; " >
    
		<div style="margin-left: 82%; margin-top: 20px;">
		
		
			<div>
				<div>
					<form id="newsearch" method="get" action="http://www.google.com">
					        <input type="text" class="btn btn-default" name="q" size="21" maxlength="120"  placeholder="Search Here..."><input type="submit" value="search" class="btn btn-default" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
	
		   

			  
								<div style="float: right; margin-right: 44%; padding-top: 26px;">
									<div class="container">
										
										
										<div>
											<form action="" method="POST" class="registration">
												<div style=" padding: 22px 43px 0 43px;">
												 <h2 style="margin-left: 26px; ">Log In Form!</h2>
                                                    <div style="margin-top: 10px; ">
														<td>
															<input name="email" placeholder="Enter Your email" required="required" class="btn btn-default" type="email" size="30" >
														</td>
													</div>
												
													<div style="margin-top: 10px; ">
														<td>
															<input name="password" id="password-1" required="required"  placeholder="Enter New Password" class="btn btn-default" type="password" size="30" >
														</td>
													</div>
													<div style="margin-top: 14px; padding-left: 28px;">
														<input name="signup" class="btn btn-info" type="submit" value="Sign Me Up!" style="  margin-right: 36px;">
														<input style=""class="btn btn-info" type="submit" name="asubmit" value="Admin">
                                                    </div>
                                                    
                                                   <div>
                                                    <td></td>
                                                    </div>
													<div class="signup_error_msg">
													
													</div>
												</div>
											</form>
											
										</div>
									</div>

					            </div>
			<?php
						session_start();
						ob_start();
						if (!isset($_SESSION['user_login'])) {
						}
						else {
							header("location: index.php");
						}
								
                   if(isset($_POST['signup'])){
					   $user_login=$_POST['email'];
					   $password=$_POST['password'];
                       $q1="select * from log_in where email='$user_login' && password='$password'";
                       $run=mysqli_query($db,$q1);
					   $row=mysqli_num_rows($run);
					   $get_user_email = mysqli_fetch_assoc($run);
					   $email = $get_user_email['id'];
                       if($row == 1){
						   $_SESSION['user_login']=$email;
						   header("Location:index.php");
					   }
                       else
                       {
                           header("Location:login.php");
                       }

                   }
				
                        ?>	
			

	  
      <?php
                   
                   if(isset($_POST['asubmit']))
                   {
                       $email=$_POST['email'];
                       $password=$_POST['password'];
                       $q1="select * from admin_login";
                       $run=mysqli_query($db,$q1);
                       $row=mysqli_fetch_array($run);
                       $ur=$row['email'];
                       $pss=$row['password'];
                       if($email==$ur && $password==$pss)
                       {
                           header("Location:Admin/admin_home.php");
                       }
                       else
                       {
                           header("Location:index.php?Wrong User");
                       }

                   }

                        ?>
    </div>
  
  
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/JavaScript"></script>
  
</body>

</html>