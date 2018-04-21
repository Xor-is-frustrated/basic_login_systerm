<?php 
	include('connect.php');
	$x=$_SESSION['message4'];
	if(isset($_POST['submit'])){
$pass=mysqli_real_escape_string($con,$_POST['pass1']);
		$pass3=mysqli_real_escape_string($con,$_POST['pass2']);
		if($pass==$pass3)
		{
			$s="UPDATE info SET password='$pass' WHERE username='$x'";
			if(mysqli_query($con,$s))
			//$sql1=mysqli_fetch_array($sql,MYSQLI_ASSOC);
			header("location: password1.php");
		else
			echo "fucked up";
		}
		else
		{
			echo "passwords did not match";
		}
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>PASSWORD</title>
</head>
<body>
	<form method="POST" action="password.php">
		<tr>
			<td>Change password <?php echo $x; ?></td>
			<td><input type="password" name="pass1"></td>
		</tr><br>
		<tr>
			<td>Confirm password</td>
			<td><input type="password" name="pass2"></td>
		</tr><br>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</form>
</body>
</html>