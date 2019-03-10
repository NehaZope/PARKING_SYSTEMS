<?php
include("auth.php");  ?>
<!Doctype html>
 <html  lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Easy_Parking</title>
  <meta name="description" content="This is the home page a parking guide website that lets you find the ideal parking spot easily" />
  <link rel="shortcut icon" href=".../img/Icon.PNG" type="image/x-icon" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"> 		
  <link rel="stylesheet" href="css/style.css">
   </head>


<body>
	<div class="cbp-af-header">
		<nav>
				 <div id="logo">
				 
                     <a href="#"><img alt="Logo" src="img/Icon.PNG"></a>
                     <a href="#">Welcome <?php echo $_SESSION['username']; ?>
				 	
				 </div>
				 <ul id="nav" >
				 
					 <li><a href="two_wheeler.php">TWO WHEELER</a></li>
					 					 
                     <li><a href="four_wheeler.php">FOUR WHEELER</a></li>
                     
                     <li> <a href="logout.php">Logout</a></li>
				 </ul>		 	 
			</nav>	
		</div> 
<section class="page1">
		      
		        <div class="huge-title centered">  
		        
		          <div class="logo-phone centered"><img alt="YOURLOGO" src="img/Icon.jpg"></div>  
		      
		          <h1>"YOU ARE ALL SET!!"<br>CHOOSE AN APT FREE SPOT<br> HASSLE FREE PARKING!! </h1>
		          
				  <div class="space"></div>
		  	    </div>
</section>
<center>
<div>
                  <div class="box">
					  <h2>TWO WHEELER PARKING SLOT DASHBOARD</h2>
					  <?php 
					  $servername = "localhost";
					  $username = "root";
					  $password = '';
					  $dbname = "register";
					  
					  // Create connection
					  $conn = new mysqli($servername, $username, $password, $dbname);
					  // Check connection
					  if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
					  } 
                       $result=mysqli_query($conn,"SELECT count(booking) as total from space_allocated2 WHERE booking='FREE' ");
                       $data=mysqli_fetch_assoc($result);
                       echo "<h4> FREE :".$data['total'];
                       $booked=60-$data['total'];                       
                      echo "<h4> BOOKED :".$booked; 
                      $result2=mysqli_query($conn,"SELECT count(booking) as f_book from space_allocated2 where slot_id like 'F%'");
                      $data2=mysqli_fetch_assoc($result2);                       
                       echo "<h4> FACULTY :".$data2;
                    $result3=mysqli_query($conn,"SELECT count(booking)as h_book from space_allocated2 where slot_id like 'H%'");
                      $data3=mysqli_fetch_assoc($result3);                       
                        echo "<h4> FACULTY :".$data3;
					   ?>
				  </div>
                  <div class="box">
					  <h2>FOUR WHEELER PARKING SLOT DASHBOARD</h2>
					  <?php 
					  $servername = "localhost";
					  $username = "root";
					  $password = '';
					  $dbname = "register";
					  
					  // Create connection
					  $conn = new mysqli($servername, $username, $password, $dbname);
					  // Check connection
					  if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
                      }
                      
                      $result=mysqli_query($conn,"SELECT count(booking) as total from space_allocated2 WHERE booking='FREE' ");
                      $data=mysqli_fetch_assoc($result);                      
                      echo "<h4> FREE :".$data['total'];
                      $booked=60-$data['total'];
                      echo "<h4> BOOKED :".$booked; 
                      $result2=mysqli_query($conn,"SELECT count(booking) as f_book from space_allocated2 where slot_id like 'F%'");
                      $data2=mysqli_fetch_assoc($result2);                       
                       echo "<h4> FACULTY :".$data2;
                    $result3=mysqli_query($conn,"SELECT count(booking)as h_book from space_allocated2 where slot_id like 'H%'");
                      $data3=mysqli_fetch_assoc($result3);                       
                        echo "<h4> FACULTY :".$data3;
					   ?>
				  </div>
                  </div>
                  </center>
  </body>
  
</html>