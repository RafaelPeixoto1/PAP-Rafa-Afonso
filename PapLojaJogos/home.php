<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">

		<nav class="navtop">
			<div>
				<a href="home.php">
				<img src="logoVP.png" ></a>
				<br>

<form action="" method="post">
	<br>
	<input type="text" size="40"  name="term" required="required"></input>
	 <input type="submit" name="submit" value="search" ></input><br/>
         
        
</form>

				<a  href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a  href="index.html"><i class="fas fa-user-circle"></i>Login</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>

			</div>
		</nav>

		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>