<?php
session_start();
include('conn.php');



$username = $_SESSION['username'];
$read = "SELECT itemsforsale.* FROM itemsforsale, users WHERE itemsforsale.userid = users.id AND users.username = '$username' ORDER BY available ASC";
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

	<title> Edit Listing </title>

</head>

<body>


	<?php require_once('navbar.php'); ?>

	<div class="container">


			<h1> <?php //echo $username; ?> </h1>
			<?php
							 
			$i = 0;
			while($row = $result->fetch_assoc()){

                       $titletext = $row["itemtype"];
					   $itemdescription=$row['itemdescription'];
                        $datetext = $row["available"];
						$idrow= $row['id'];
				 
					if($i == 0){
						echo "
						<div class='row' id='sellerbox' style='font-weight:bold;padding:10px 0;'>
							<div class='column'>Title</div>
							<div class='column'>Description</div>
							<div class='column'>Date</div>
							<div class='column'>ID</div>
							<div class='column'></div>
						</div>
						";
					}
      ?> 
				<?php echo $idrow; ?>
				<div class='row' id="sellerbox" >
							
					<div class='column'> <?php echo $titletext ?> </div>
					<div class='column'> <?php echo $itemdescription ?> </div>
					<div class='column'> <?php echo $datetext ?> </div>
					<div class='column'> <?php echo $idrow ?> </div>
					<div class='column'> <a href='editrow.php?editid=<?php echo $idrow; ?>'>Edit</a>  </div>
							
							
				
							
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