<?php
include("connection.php");
?>
<?php
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
}
else {
	header("location: index.php");
}
$u_name = "";
$u_phone = "";
$u_email = "";
$u_pass = "";

if (isset($_POST['signup'])) {
//declere veriable
$u_name = $_POST['name'];
$u_phone = $_POST['phone'];
$u_email = $_POST['email'];
$u_pass = $_POST['password'];
//triming name
try {
	if(empty($_POST['name'])) {
		throw new Exception('Fullname can not be empty');
		
	}
	if(empty($_POST['phone'])) {
		throw new Exception('phone number can not be empty');
		
	}
	if(empty($_POST['email'])) {
		throw new Exception('email can not be empty');
		
	}
	if(empty($_POST['password'])) {
		throw new Exception('Password can not be empty');
		
	}

	$check = 0;
	$e_check = mysqli_query($db,"SELECT email FROM `log_in` WHERE email='$u_email'");
	$email_check = mysqli_num_rows($e_check);
	if (strlen($_POST['name']) >2 && strlen($_POST['name']) <16 ) {
		if ($check == 0 ) {
			if ($email_check == 0) {
				if (strlen($_POST['password']) >1 ) {
					$d = date("Y-m-d"); //Year - Month - Day
					$_POST['name'] = ucwords($_POST['name']);
					$_POST['email'] = mb_convert_case($u_email, MB_CASE_LOWER, "UTF-8");
					$_POST['password'] = ($_POST['password']);
					
					// send email
					
                        	{
							
	                      $result = mysqli_query($db,"INSERT INTO log_in (name,phone,email,password) VALUES ('$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[password]')");
						
						//success message
						$success_message = '
						<div class="signupform_content"><h2><font face="bookman">Registration successfull!</font></h2>
						<div class="signupform_text" style="font-size: 18px; text-align: center;">
						<font face="bookman">
							Email: '.$u_email.'<br>
							
						</font></div></div>';
						}
						
						
					}else {
						throw new Exception('Make strong password!');
					}
				}else {
					throw new Exception('Email already taken!');
				}
			}else {
				throw new Exception('Username already taken!');
			}
		}else {
			throw new Exception('Firstname must be 2-15 characters!');
		}

	}
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
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
		<?php 
			if(isset($success_message)) {echo $success_message;}
			else {
				echo '
								<div style="float: right; margin-right: 44%; padding-top: 26px;">
									<div class="container">
										
										
										<div>
											<form action="" method="POST" class="registration">
												<div style=" padding: 22px 43px 0 43px;">
												 <h2 style="margin-left: 26px; ">Sign Up Form!</h2>
													<div style="margin-top: 20px; ">
														<td>
															<input name="name" id="first_name" placeholder="First Name" required="required" class="btn btn-default" type="text" size="30" value="'.$u_name.'" >
														</td>
													</div>
										
													<div style="margin-top: 10px; ">
														<td>
															<input name="phone" placeholder="Enter Your phone" required="required" class="btn btn-default" type="text" size="30" value="'.$u_phone.'">
														</td
													</div>
													<div style="margin-top: 10px; ">
														<td>
															<input name="email" placeholder="Enter Your email" required="required" class="btn btn-default" type="email" size="30" value="'.$u_email.'">
														</td>
													</div>
												
													<div style="margin-top: 10px; ">
														<td>
															<input name="password" id="password-1" required="required"  placeholder="Enter New Password" class="btn btn-default" type="password" size="30" value="'.$u_pass.'">
														</td>
													</div>
													<div style="margin-top: 14px; padding-left: 68px;">
														<input name="signup" class="btn btn-info" type="submit" value="Sign Me Up!" style="  margin-right: 36px;">
														
													</div>
												
													<div class="signup_error_msg">';
														
															if (isset($error_message)) {echo $error_message;}
															
															echo'	
													</div>
												</div>
											</form>
											
										</div>
									</div>

					            </div>
				';
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