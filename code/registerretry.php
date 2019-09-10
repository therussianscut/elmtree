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
		<div class="container">
		
		<div class="header" id="headingregister">
			<h3> Register to Sell your stuff at Sean's SuperStore here! </h3>
			<h1> <?php echo "<p> Invalid username and/or email. Please try and register again</p>"; ?> </h1>
		</div>
		
	
		
		<form method="post" action="process.php" enctype='multipart/form-data' id="registrationform">
			<div class="input">
				<label> Select a Unique Username: </label>
				<input type="text" name="username" placeholder="enter your UserName" required>
				</div>
			<div class="input">	
				<label> Enter Your QUB or UU email address: </label>
				<input type="email" name="email" placeholder="enter your Uni email" required>
				</div>
			<div class="input">	
				<label> Enter Your Mobile Number: </label>
				<input type="number" name="MobileNumber" placeholder="enter mobile number" required>
				</div>
			<div class="input">	
			
			<div class="input">	
				<label> Provide Facial Picture: </label>
				<input type="file" name="uploadimg" placeholder="attach file" required>
				</div>
			<div class="input">	
				
				<label> Enter Your Password: </label>
				<input type="password" name="password1" placeholder="enter your password" required>
				</div>
				<div class="input">
				<label> Confirm Password: </label>
				<input type="password" name="password2" placeholder="confirm password" required>
				</div>
				<div class="input">
				<input type="submit" name="register" value="Register" class="btn" required>
				</div>
				
				
				
			<p>
			<a href="login.php"> Click to Login </a>
			</p>		
		
		
			
		</form>
		</div>
		
		<div id='ftext'> 
		Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
		</div>
	</body>
</html>