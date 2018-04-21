<?php 
	include('connect.php');
	if (isset($_POST['submit'])) {
		$user=mysqli_real_escape_string($con,$_POST['user']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$pass1=mysqli_real_escape_string($con,$_POST['pass1']);
		$pass2=mysqli_real_escape_string($con,$_POST['pass2']);
		$security=mysqli_real_escape_string($con,$_POST['sec']);
		$spass=mysqli_real_escape_string($con,$_POST['spass']);

		if($pass1==$pass2){
			$z=mysqli_query($con,"SELECT * FROM info WHERE username='$user'");
			$z1=mysqli_num_rows($z);
			if($z1==0)
			{
		$res=mysqli_query($con,"INSERT INTO info(username,email,password,security,spassword) VALUES('$user','$email','$pass1','$security','$spass')");
		$_SESSION['message']=$user;
		header("location: registersuccess.php");
		# code...
		}
		else
		{
		//	echo "username already exists";
	echo '<script language="javascript"> alert("username already exists") </script>';
 	//echo 'alert("username already exists")';
	//echo '</script>';
		}
	}
		else{
			echo 'passwords doesnt match';
			mysqli_close($con);
		}
	}




 ?>



<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
	<h1>REGISTER</h1><br>
	<form method="POST" action="register.php">
		<tr>
			<td>USER ID</td>
			<td><input type="text"  name="user" placeholder="Usain Bolt"></td>
		</tr><br>
		<tr>
			<td>EMAIL</td>
			<td><input type="email" name="email" placeholder="idiot@gmail.com"></td>
		</tr><br>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password"  name="pass1" placeholder="Secret"></td>
		</tr><br>
		<tr>
			<td>CONFIRM</td>
			<td><input type="password"  name="pass2" placeholder="Again Secret"></td>
		</tr><br>
		<tr>
			<td>Security question</td> 
			<td><select name="sec" value="sec"><option value="q1">What is your Birth Place</option>
												<option value="q2">Who is your Best Friend?</option>
												<option value="q3">What is your favourite dish?</option>
												<option value="q4">What is your Pet name?</option>

			</select></td>
		</tr><br>
		<tr>
			<td>ANSWER</td>
			<td><input type="password" name="spass" placeholder="Secret"></td>
		</tr><br>
		<tr>
			
			<td></td>
			<td><input type="submit" name="submit" value="submit" ></td>
		</tr>

	</form>
</body>
</html>