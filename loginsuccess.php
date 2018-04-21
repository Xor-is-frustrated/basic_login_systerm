<?php
		include('connect.php');
		$x=$_SESSION['message1'];
		$sql=mysqli_query($con,"SELECT * FROM info WHERE username='$x'");
		$sq=mysqli_fetch_array($sql);
		$u=$sq['username'];
		$v=$sq['email'];


  ?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN SUCCESS</title>
</head>
<body>
		<h1> WELCOME <?php echo $u; ?>  <?php echo $v; ?> </h1>
		<h6><a href="index.php">HOME</a></h6>

</body>
</html>