<?php 
	include('connect.php');
	if(isset($_POST['submit']))
	{
		$user=mysqli_real_escape_string($con,$_POST['luser']);
		$pass=mysqli_real_escape_string($con,$_POST['lpass']);

		$sql=mysqli_query($con,"SELECT * FROM info WHERE username='$user'and password='$pass'");
		//$res=mysqli_fetch_array($sql,MYSQLI_ASSOC);
		$check=mysqli_num_rows($sql);
		if($check==1)
		{
			$_SESSION['message1']=$user;
			header("location: loginsuccess.php");
		}
		else
		{
			echo "wrong username or password";
		}



	}




 ?>



<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
		<form method="POST" action="login.php">
		<tr>
			<td>USER ID</td>
			<td><input type="text" value="Usain Bolt" name="luser" placeholder="Usain Bolt"></td>
		</tr><br>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password"  name="lpass" placeholder="Don't tell me"></td>
		</tr><br>
		<tr>
			<tr>
			
			<td></td>
			<td><input type="submit" name="submit" value="submit" ></td>
		</tr>
		</form>	
		<p><a href="forgot.php">Forgot Password</a></p>
</body>
</html>