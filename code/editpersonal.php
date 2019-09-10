<?php
session_start();
include('conn.php');



$username = $_SESSION['username'];
$read = "SELECT * FROM users where username ='$username' ORDER BY username ASC";
$result = $conn->query($read);

if(!$result){
  echo $conn->error;	
}

?>


<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

	<title> Change Personal Details </title>

</head>

<body>


	<?php require_once('navbar.php'); ?>

	<div class="container">

			


			<?php

	 $i = 0;
	while($row = $result->fetch_assoc()){

		if($i == 0){
			echo "
			<div class='row' id='sellerbox' style='font-weight:bold;padding:10px 0;'>
				<div class='column'>Username</div>
				<div class='column'>Email</div>
				<div class='column'>Mobile Number</div>
				<div class='column'>ID</div>
				<div class='column'></div>
			</div>
			";
		}

		$uername = $row["username"];
		$email=$row['email'];
		$mobilenumber = $row["mobilenumber"];
		$idrow= $row['id'];
                       
		?>
			<div class='row' id='sellerbox'>
				<div class='column'> <?php echo $username ?> </div>
				<div class='column'> <?php echo $email ?> </div>
				<div class='column'> <?php echo $mobilenumber ?> </div>
				<div class='column'> <?php echo $idrow ?> </div>
				<div class='column'> <a href='editrowpersonal.php?editid=<?php echo $idrow; ?>'>Edit</a> </div>
			</div>

			<?php
				$i++;
			}
			?>

		</div>

		
		<div id='ftext'> 
			Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
		</div>

</body>

</html>