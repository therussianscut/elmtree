<?php

session_start();
include("conn.php");

$userId = "";
if(!empty($_GET['userid'])){
	$userId = $_GET['userid'];
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
	<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>

	<?php require_once('navbar.php'); ?>
	<div class="container" style="text-align:center;">
		<?php 
		
		$readAll= "SELECT * FROM users WHERE id = $userId";
				
		$result=$conn->query($readAll);
		while ($row = $result->fetch_assoc()) {

		
			$uploadedby=$row['username'];
			$email = $row['email'];
		?>
			<h3 style="clear:both;">  Contact Deatils for <?php echo $uploadedby?></h3>
			<ul style="clear:both;">
				
				<li><b>Email:</b> <?php echo $email; ?></li>
			</ul>
		<?php
		}
		?>

	</div>
</body>
</html>