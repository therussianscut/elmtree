<?php
session_start();
include("conn.php");


	if (isset($_POST['username']) and isset($_POST['password'])){

	$username = $_POST['username'];
	$password = $_POST['password'];



	$query = "SELECT * FROM `users` WHERE username='$username' and password=MD5('$password')";
	 
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($result);

	

	if ($count == 1){
		
		$userData = [];

		while ($row=$result->fetch_assoc()) {
			$userData = $row;
		}
		
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userData['id'];
		$_SESSION['email'] = $userData['email'];
		$_SESSION['mobilenumber'] = $userData['mobilenumber'];
		$_SESSION['path'] = $userData['path'];
		
		header('Location: membersarea.php');
		
	}else{

		header('location:login.php');

	}

}

?>

<!doctype html>

<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
	
	<title> Login to Sean's SuperStore </title>
	
	</head>
	
	<body>

	<div class="wrapper">

		<header class="header" id="loginheader">
			<h1> Login here to access a great world of commerce. </h1>
			<h3> <a href="register.php"> Registration page</a> </h3>
		</header>
		
		<main class="content">
		
			<form method="post" action="" enctype='multipart/form-data' id="loginform">
			<div class="input">
				<label> Username: </label>
				<input type="text" name="username" placeholder="enter username" required>
				</div>
		
			<div class="input">	
				
				<label> Password: </label>
				<input type="password" name="password" placeholder="enter password" required>
				</div>
				
				<div class="input">
				<input type="submit" name="register" value="Login to Sean's superstore" class="btn" required>
				</div>
			</form>
		</main>
		
		<footer class="footer">
			Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
		</footer>
		
		
	</body>
</html>
