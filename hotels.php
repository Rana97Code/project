<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, 
    shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">

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
            
            <div class="nav2"  style="width: 70%; float: left;">
                <nav class="nav justify-content-center">
					<a class="nav-link" href="index.php">Home</a>
					<a class="nav-link" href="#">Hotels</a>
					<a class="nav-link" href="#">About us</a>
                    <a class="nav-link" href="#">Help</a>
                    
                </nav>
                
			</div>
			
           <div class=""  style="float: right; width: 20%; padding-top: 34px;">
               <form action="search_result.php" method="post">
                       
                    <input type="text" name="search" class="btn btn-default" /><input type="SUBMIT" name="submit" value="search" class="btn btn-default" />
                    
               </form>
            </div>
		</div>	

        <div class="banner1" >

            <div class="container" style="padding-top: 110px; ">

            <form action="hotels.php" method="GET">  
                

                        <?php
                                            
                            $q1="select * from ahotelupld";
                            $run=mysqli_query($db,$q1);
                            if (mysqli_num_rows($run)) {
                                echo '<ul id="recs">';
                            while($row=mysqli_fetch_array($run))
                            {
                            $id = $row['id'];
                            $hotel_name=$row['hotel_name'];
                            $loc=$row['loc'];
                            $city=$row['city'];
                            $price=$row['price'];
                            $image=$row['image'];
                           
                        ?>
                            <?php 
                                    echo '
                                    <table id="table">
                                          <div class="run shadow " style="  float: left; margin: 12px 8px; background: #228ae6; ">
                                               <div class="inner" style="overflow: hidden; "><a href="hoteldtil.php?pid='.$id.'">
                                                    <img src="Admin/images/hotel/'.$image.'" class="inner" style="width: 300px; height: 260px;  ">
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
                     }
                    ?>
               
            </form>

           
                  
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