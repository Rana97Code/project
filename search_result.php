<?php 
$output= NULL;

if(isset($_POST['submit'])){
	$mysqli=NEW MySQLi("localhost","root","","project");
	$search =$mysqli->real_escape_string($_POST['search']);
	
	$resultSet=$mysqli->query("SELECT * FROM ahotelupld WHERE hotel_name LIKE '$search%' OR loc LIKE '$search%' OR city LIKE '$search%' OR price LIKE '$search%'  ");
	if($resultSet->num_rows > 0){
        
		while($rows= $resultSet->fetch_assoc())
		{
            $id = $rows['id'];
            $hotel_name=$rows['hotel_name'];
            $loc=$rows['loc'];
            $city= $rows['city'];
            $price=$rows['price'];
            $image=$rows['image'];

		}
	}
    else{
       output: "No result found";
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
    <div class="full">
		
		<div id="header" style=" width:100%; height: auto; position: fixed;">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
            </div>
            
            <div class="nav2"  style="width: 60%; float: left;">
                <nav class="nav justify-content-center">
					<a class="nav-link" href="index.php">Home</a>
					<a class="nav-link" href="hotels.php">Hotels</a>
					<a class="nav-link" href="#">About us</a>
                    <a class="nav-link" href="#">Help</a>
                    
                </nav>
                
			</div>
			
           <div class=" col-md-2"  style="float: right; padding-top: 35px; position: relative;">
               <form action="search_result.php" method="post">
                       <div class="input-group1">
                           <input type="text" name="search" />
                           <input type="SUBMIT" name="submit" value="search" />
                       </div>
               </form>
            </div>
		</div>	

        <div class="banner1" >
         <div class="container" style="padding-top: 110px; ">
            <?php 
                                    echo '
                                    <table id="table" >
                                          <div class="run shadow " style="  float: left; margin: 12px 8px; background: #228ae6; ">
                                               <div class="inner" style="overflow: hidden; "><a href="hoteldtil.php?pid='.$id.'">
                                                    <img src="Admin/images/'.$image.'" class="inner" style="width: 300px; height: 260px;  ">
                                                    </a>
                                               </div>
                                                <p><a href="hoteldtil.php?pid='.$id.'" >'.$hotel_name.'</a></p>
                                                
                                                <span style="color:white;" > '.$loc.'  '.$city.'</span>    
                                                <h3 style="color: white; ">BDT '.$price.'</h3>

                                         </div>
                                    </table>
                                ';
                                ?>
                    
            <?php
               
            }
            ?>	

         </div>    
                   

        </div>


        <div class="footer" style="position: fixed; width: 100%; background: gray; margin-top: 640px;">
            <form action="roomdt.php" method="GET">
				<center>
					<table>
						<tr id="checkin">
                            <th width="20%" height="50px">City</th>
							<th width="20%" height="50px">Hotel</th>
							<th width="20%" height="50px">Check-In Date</th>
							<th width="20%" height="50px">Check-Out Date</th>
							
							<td rowspan="2"><input type="submit" value="Go >>" name="sub"></td>
						</tr>
						<tr>
							<td width="20%" height="50px"><center>
							<input type="text" name="city" value=""></center></td>
                            <td width="20%" height="50px"><center>
                            <input type="text" name="hotel_name" value=""></center></td>
							<td width="20%" height="50px"><center><input type="date" name="c_in"></center></td>
							<td width="20%" height="50px"><center><input type="date" name="c_out"></center></td>
							
						</tr>
					</table>
				</center>
			</form>

        </div>

    
    </div>
  
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/JavaScript"></script>

</body>

</html>