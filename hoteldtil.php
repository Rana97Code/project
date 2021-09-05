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
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
	
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
					<a class="nav-link" href="hotels.php">Hotels</a>
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

                            if (isset($_REQUEST['pid'])) {
                                
                                $pid = mysqli_real_escape_string($db,$_REQUEST['pid']);
                            }else {
                                header('location: index.php');
                            }
                                            
                            
                            $run=mysqli_query($db,"select * from ahotelupld where id ='$pid'");
                            if (mysqli_num_rows($run)) {
                            $row=mysqli_fetch_assoc($run);
                            $id = $row['id'];
                            $hotel_name=$row['hotel_name'];
                            $loc=$row['loc'];
                            $city=$row['city'];
                            $price=$row['price'];
                            $image=$row['image'];
                            $image1=$row['image1'];
                            $image2=$row['image2'];
                            }
                        ?>
                          <?php 
                                    echo '
                                    <table id="table">
                                          <div class="run shadow " style="  float: left; margin: 12px 8px; background: #228ae6; ">
                                               <div class="inner" style="overflow: hidden; "><a href="hoteldtil.php?pid='.$id.'">
                                                    <img src="Admin/images/hotel/'.$image.'" class="inner" style="width: 550px; height: 400px;  ">
                                                    </a>
                                               </div>
                                                
                                         </div>
                                    </table>
                                   

                                ';
                                ?>
                                
                        <?php 
                        
                        ?>
               
            </form>
            <h2 style="padding-left: 700px;"><?php echo $row['hotel_name']?></h2>
            <h5 style="padding-left: 700px;"><?php echo $row['loc'] ?> <?php echo $row['city']?></h5>
            <h5 style="padding-left: 700px;">BDT <?php echo  $row['price']?></h5>       
                 
            
            <div class="footer" style="position: fixed; width: 25%; height: 450px; background: gray; margin: 50px 700px; ">
                  <form action="roomdt.php" method="GET">
	        		
	        				<table>
	        					    <tr id="checkin">
                                    <th >City</th> 
	        						<th >Hotel</th>
									</tr>
									<tr>
	        						
	        						<td ><input type="text" name="city" id="city" value="<?php echo $row['city']?>"></td>
                                    <td ><input type="text" name="hotel" id="hotel_name" value="<?php echo $row['hotel_name']?>"></td>
									
                                   <tr> 
	        						<th style="padding-left: 50px;">Check-In Date</th>
	        						<th style="padding-left: 50px;">Check-Out Date</th>
								   </tr>
	        					
                                  
								  </tr>
								  <tr>
	        						<td ><input type="date" name="c_in"></td>
	        						<td><input type="date" name="c_out"></td>

                                 </tr>
                                 <tr>
                                     
                                 <th style="padding-left: 23px;" > <input type="checkbox" name="Dauble Bed"  > Dauble Bed</th>
                                 <th style="padding-left: 23px;"> <input type="checkbox" name="Dauble Bed" > Single Bed</th>
                                 </tr>
                                 <tr>
                                     <td><img src="Admin/images/room/<?php  echo $row['image1']; ?>"  style="width: 170px; height: 160px;"></td>
                                     <td><img src="Admin/images/room/<?php  echo $row['image2']; ?>"  style="width: 170px; height: 160px;"></td>
                                 </tr>
								<td rowspan="2" style="padding-left:140px;"><input type="submit" value="Go >>" name="sub"></td>
	        				</table>
	        		
	        		</form>

                </div>

                
                </div>
              

             <div style="font-size: 18px;  display: table; width: 98%;">
		        <h3 style="padding-bottom: 20px; margin-left: 300px;">Recommand Room For You:</h3>
		     <div>
 

             <div class="carousel" style="width:450px;  margin-left:330px;">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                 <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                 </ol>
                
                 <!-- Wrapper for slides -->
                 <?php echo '
                 <div class="carousel-inner" style="">
                     <div class="item active">
                     <img src="Admin/images/room/'.$image.'" style="width: 450px; height:250px;">
                     </div>
                
                     <div class="item">
                     <img src="Admin/images/room/'.$image2.'" alt="Dhaka" style="width:450px; height:250px;">
                     </div>
                 
                     <div class="item">
                     <img src="Admin/images/room/'.$image1.'" style="width:450px; height: 250px;">
                     </div>
                     
                 </div>
                 ';
                 ?>
                 <!-- Left and right controls -->
                 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                     <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control" href="#myCarousel" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                     <span class="sr-only">Next</span>
                 </a>
                 </div>
           </div>      

        </div>


    
    </div>
   
    <script>
        var table=document.getElementById('table'),rIndex;
        for(var i=0; i<table.rows.length; i++){
            table.rows[i].onclick=function(){
                rIndex=this.rowIndex;
                document.getElementById("city").value=this.cells[0].innerHTML;
                document.getElementById("hotel_name").value=this.cells[1].innerHTML;
            }
        }
     </script>
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/JavaScript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>

</html>