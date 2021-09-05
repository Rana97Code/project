<?php
include("connection.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_home.php">Admin </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="roomupld.php"><i class="fa fa-desktop"></i> Hotel Upload</a>
                    </li>
					<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Room Booking </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
				<?php
						
						
									
									

						
				?>

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<button class="btn btn-default" type="button">
												 New Hotel Insert  <span class="badge"><?php ?></span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">

                                          
                        
                        <div class="panel-body" >
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th >Hotel Name</th>
                                            <th>Location</th>
                                            <th>City</th>
											<th>Price</th>
											<th>Image</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th colspan="2">Action</th>
											
											
                                        </tr>
                                        <form action="roomupld.php" method="post" enctype="multipart/form-data">
                                        
                                        <tr>
                                            
                                            <td ><input type="text" name="hotel_name" size="15"></td>
                                            <td><input type="text" name="loc" size="15"></td>
                                            <td><input type="text" name="city" size="15"></td>
                                            <td><input type="text" name="price" size="10"></td>
                                            <td ><input type="file" name="image" ><input type="file" name="image1" >
                                            <input type="file" name="image2" ></td>
                                            
                                            <td><input type="submit" name="submit" value="submit"></td>
                                        
                        
                                        </tr>
                                        </form>
                                            <?php   
                                                /*****roombooking to add mysql ***** */
                                                if(isset($_POST['submit'])) {
                                
                                                    $hotel_name=$_POST['hotel_name'];
                                                    $loc=$_POST['loc'];
                                                    $city=$_POST['city'];
                                                    $price=$_POST['price'];
                                                    /**image upload  */
                                                    $image=$_FILES['image']['name'];
                                                    $target="images/hotel/".basename($_FILES['image']['name']);
                                                    $image1=$_FILES['image1']['name'];
                                                    $target="images/room/".basename($_FILES['image1']['name']);
                                                    $image2=$_FILES['image2']['name'];
                                                    $target="images/room/".basename($_FILES['image2']['name']);
                                                   

                                                    if(mysqli_query($db,"insert into ahotelupld(hotel_name,loc,city,price,image,image1,image2) value('$hotel_name','$loc','$city','$price','$image','$image1','$image2')"))
                                                    {
                                                        echo "data Insert";
                                                    }
                                                    else
                                                    {
                                                        echo "data not Insert";
                                                        
                                                    }

                                                                    //images insert into folder
                                                    if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                                                        $msg="image uploaded successfully";
                                                    }
                                                    else{
                                                        $msg="There was a problem uploading image";
                                                    }
                                                    if (move_uploaded_file($_FILES['image1']['tmp_name'],$target)){
                                                        $msg="image uploaded successfully";
                                                    }
                                                    else{
                                                        $msg="There was a problem uploading image";
                                                    }
                                                    if (move_uploaded_file($_FILES['image2']['tmp_name'],$target)){
                                                        $msg="image uploaded successfully";
                                                    }
                                                    else{
                                                        $msg="There was a problem uploading image";
                                                    }
                                                    
                                                }

					   
                                            ?>

                                            <?php
                                        
                                                    $q1="select * from ahotelupld";
                                                    $run=mysqli_query($db,$q1);
                                                    while($row=mysqli_fetch_array($run))
                                                    {
                                                      $hotel_name=$row['hotel_name'];
                                                      $loc=$row['loc'];
                                                      $city=$row['city'];
                                                      $price=$row['price'];
                                                      $image=$row['image'];
                                                      $image1=$row['image1'];
                                                      $image2=$row['image2'];
                                                      //delete button

                                                      if(isset($_GET['del'])){
                                                          $id = $_GET['del'];
                                                          mysqli_query($db,"DELETE FROM ahotelupld WHERE id=$id");
                                                      }
                                                 ?>


                                        <tr>
                                            <td><?php echo $hotel_name ?></td>
                                            <td><?php echo $loc ?></td>
                                            <td><?php echo $city ?></td>
                                            <td><?php echo $price ?></td>
                                            <td> <img src="images/hotel/<?php  echo $row['image']; ?>" style="width: 60px; height: 60px;"> </td>
                                            <td> <img src="images/room/<?php  echo $row['image1']; ?>" style="width: 60px; height: 60px;"> </td>
                                            <td> <img src="images/room/<?php  echo $row['image2']; ?>" style="width: 60px; height: 60px;"> </td>

                                            <td><a href="roomupld.php?del=<?php echo $row['id']; ?>" >Delete</a></td>

                                            <?php
                                                }
									        ?>
                                        </tr>

                                    </thead>
                                    
                                </table>
								
                            </div>
                        </div>
                      
                    </div>
                      
			
				<!-- DEOMO-->
				
				
				<!--DEMO END-->
				
										
                    

                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>