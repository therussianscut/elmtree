<?php

session_start();
include("conn.php");

$getcat = $conn->real_escape_string($_GET['filter']);

$read="select * from itemsforsale where itemtype= '$getcat' ";
	
$result= $conn->query($read);
		
if (!$result) {
		
echo $conn->error;
		
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
	
	<title> What Category of product are you interested in? </title>
	
	</head>
	
	<body>

	
	<?php require_once('navbar.php'); ?>

<?php

$title = '';
	if(!empty($_GET['filter'])){
		$title = $_GET['filter'];
	}
?>
	
	<h2 style="text-align: center; margin-top:20px; clear:both;"><?php echo $title; ?></h2>

	<?php
	
	echo "<div class='container' style='margin-top:20px;'>";
	$i = 0;
	while ($row=$result->fetch_assoc()) {
		
		$idnumber=$row['id'];
		$itemtype=$row['itemtype'];
		$itemdescription=$row['itemdescription'];
		$itemprice=$row['price'];
		$itemimage=$row['path'];
		$datelisted=$row['available'];
		$userId = $row['userid'];
		
		if($i == 0){
			echo "
			<div class='row' id='sellerbox' style='font-weight:bold;padding:10px 0;'>
				<div class='column'>ID</div>
				<div class='column'>Item Type</div>
				<div class='column'>Description</div>
				<div class='column'>Price</div>
				<div class='column'>Date listed</div>
				<div class='column'>Photo of Item</div>
				<div class='column'>Listed By</div>

			</div>
			";
		}
			
			echo "
			

  <div class='row' id= 'sellerbox'>
    <div class='column'> $idnumber</div>
    <div class='column'>$itemtype</div>
    <div class='column'>$itemdescription</div>
		<div class='column'>$itemprice</div>
    <div class='column'>$datelisted</div>
		<div class='column'><img src='../webimg/$itemimage'/></div>
		<div class='column'><a href='contact.php?userid=$userId'> click here to contact  </a></div>

  </div>
			
			";

			$i++;
	}
	echo "</div>";
	
	
	
	?>
	
	
	
	
	
	<div id='ftext'> 
		Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
	</div>
	
	
	
	</body>
</html>