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
	

</head>
<body>
	<div id="full">
		<div style="background-image: url('img/b1.jpg'); width:100%;height: 850px; ">
		   <div id="sign-btn ">
				
			   <div class="container col-md-2">
                 <table>
                    <form action="#" method="post" >
                    <br> <br><br><br>
                    <h5>Name</h5>
                    <input type="email" name="email">
                    <h5>Password</h5>
                    <input type="password" name="password">
                    <br><br>
                    <td>
					<td><input style="width: 80px; height: 30px; border-radius: 15px; opacity: 0.9 " type="submit" name="asubmit" value="Log in"></td>
					</td>
                    </form>
                 </table>
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
                           header("Location:admin_home.php");
                       }
                       else
                       {
                           header("Location:index.php?Wrong User");
                       }

                   }

                        ?>
			  </div>
	    </div>
	  
    </div>
  
  
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/JavaScript"></script>
  
</body>

</html>