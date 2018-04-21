<?php 
	include('connect.php');
	$x=$_SESSION['message3'];
	$y=mysqli_query($con,"SELECT * FROM info WHERE username='$x'");
	$z=mysqli_fetch_array($y,MYSQLI_ASSOC);
	$z1=$z['security'];
	$y1=mysqli_query($con,"SELECT * FROM info1 WHERE security1='$z1'");
	$z3=mysqli_fetch_array($y1,MYSQLI_ASSOC);
	$l1=$z['spassword'];
	$l=$z3['question'];
	if (isset($_POST['submit'])) {
		# code...
		$value=mysqli_real_escape_string($con,$_POST['ans']);
		if($l1==$value)
		{
			$_SESSION['message4']=$x;
			header("location: password.php");
		}
		else
		{
			echo "wrong password";
		}
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>SECURITY QUESTION</title>
</head>
<body>
	<h1><?php echo $l; ?> </h1>
	<form method="post" action="forgot1.php">
		<tr>
			<td><input type="text" name="ans"></td>
		</tr><br>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</form>
</body>
</html>