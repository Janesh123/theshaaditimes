<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url(https://png.pngtree.com/thumb_back/fw800/back_pic/03/92/71/0657e3ca1771417.jpg);">
	<div id="main-wrapper">
		<center><h2>Logout</h2></center>
		<center><h3>Thank you for visiting our Website <?php echo $_SESSION['username']; ?></h3></center>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
				<img src="header.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<button class="logout_button" type="submit">Log Out</button>	
			</div>
		</form>
	</div>
</body>
</html>