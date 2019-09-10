<?php

session_start();

?>

<!doctype html>

<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
	
	<title> Members Area </title>
	
	</head>
	
	<body>

	<?php require_once('navbar.php'); ?>
				
	<div class="wrapper">		

		<header class='header' id='headingregister'>
		
			<?php
				$username = $_SESSION['username'];
				echo "<h1> Welcome $username </h1>";
			?>


			<nav>
				<ul>
					<li><a href="edit.php">Manage my listings</a></li>
					<li><a href="editpersonal.php">Manage my Personal Account</a></li>
				</ul>
			</nav>
		</header>

		<main class="content">
	
			<form method="post" action="seller.php" enctype='multipart/form-data' id='uploaditem'>
			<div class="input">
			<label> Select Item Type </label>
				<select name="itemtype">
					  <option value="book">Book</option>
					  <option value="electronics">Electronics</option>
					  <option value="Services">Services</option>
					  <option value="Clothes">Clothes</option>
				</select>
				</div>
			<div class="input">	
				<label> Item Description </label>
				<textarea type="test" name="description" placeholder="Describe your items" required>
				</textarea>
				</div>
			<div class="input">	
				<label> Price </label>
				<input type="number" name="price" placeholder="enter price" step=".01" required>
				</div>
			<div class="input">	
				<label> Item Picture: </label>
				<input type="file" name="uploadimg" placeholder="attach file" required>
				</div>
			
		
				<div class="input">
				<input type="submit" name="Submit" value="Upload item for Sale" class="btn" required>
				</div>
						
			</form>
 
		</main>
		
		<footer class="footer">
			Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
		</footer>
	
	</body>
</html>
