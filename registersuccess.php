<?php 
	include('connect.php');
	$a=$_SESSION['message'];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>SUCCESS</title>
 </head>
 <body>
 		<h1>welcome Mr. <?php echo $a ?>
 			
 		</h1>
 		<h6><a href="index.php">HOME</a></h6>
 </body>
 </html>