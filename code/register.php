<?php

include("conn.php");


?>


<!doctype html>

<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
	
	<title> Register For Sean's SuperStore </title>
	
	</head>
	
	<body>
		<div class="wrapper">
		
		<header class="header" id="headingregister">
			<h1> Register to Buy/Sell stuff at Sean's SuperStore here! </h1>
			<h3> <a href="login.php"> Already registered? Login</a> </h3>
		</header>

		<main class="content">		
			<form method="post" action="process.php" enctype='multipart/form-data' id="registrationform">
				<div class="input">
					<label> Unique Username: </label>
					<input type="text" name="username" placeholder="enter your UserName" required>
					</div>
				<div class="input">	
					<label> University email address: </label>
					<input type="email" name="email" placeholder="enter your Uni email" required>
					</div>
				<div class="input">	
					<label> Contact Number: </label>
					<input type="number" name="MobileNumber" placeholder="enter mobile number" required>
					</div>
				<div class="input">	
			
				<div class="input">	
					<label> Profile Picture: </label>
					<input type="file" name="uploadimg" placeholder="attach file" required>
					</div>
				<div class="input">	
				
					<label> Password: </label>
					<input type="password" name="password1" placeholder="enter your password" required>
					</div>
					<div class="input">
					<label> Confirm Password: </label>
					<input type="password" name="password2" placeholder="confirm password" required>
					</div>
					<div class="input">
					<input type="submit" name="register" value="Register" class="btn" required>
					</div>
			
			</form>
		</main>
		
		<footer class="footer">
			Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
		</footer>

		</div>
	</body>
</html>
