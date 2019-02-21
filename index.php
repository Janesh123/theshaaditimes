<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="styled.css">
</head>
<body style="background-color:#bdc3c7">
	<!DOCTYPE html>
<html>
<head>
	<title>Inktop Home</title>
	<link rel="stylesheet" type="text/css" href="styled.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="container">
  <span class="text1">Welcome to</span>
  <span class="text2">Inktop Publishers</span>
 </div>

<img src="http://builderindia.in/images/inktop_logo.jpg" class="logo">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr size="3" class="line">
<br>
	<div id="main-wrapper">
	<center><h2>Login Form</h2></center>
			<div class="imgcontainer">
				<img src="header.png" alt="Avatar" class="avatar">
			</div>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="register_btn">Register</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from user where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: home.html");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>