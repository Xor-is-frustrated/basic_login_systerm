<?php 
	include('connect.php');
	if(isset($_POST['submit'])){
		$user=mysqli_real_escape_string($con,$_POST['user']);

		$sql=mysqli_query($con,"SELECT * FROM info WHERE username='$user'");
		//$r=mysqli_fetch_array($sql,MY_ASSOC);
		$check=mysqli_num_rows($sql);
		if($check==1)
		{
			$_SESSION['message3']=$user;
			header("location: forgot1.php");
		}
		else
			{
				echo "username not found";
			}

	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>FORGOT PASSWORD</title>
</head>
<body>
	<form method="post" action="forgot.php">
		<tr>
			<td>Enter username</td>
			<td><input type="text" name="user" placeholder="Usain bolt"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</form>
</body>
</html>