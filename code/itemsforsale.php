<?php
session_start();

if(!isset($_SESSION['username'])){
	header('Location: login.php');	
}

include("conn.php");
$catnav1= "select * from itemsforsale where itemtype='Services' ";
$navresult1= $conn->query($catnav1);

$catnav2= "select * from itemsforsale where itemtype='electronics' ";
$navresult2= $conn->query($catnav2);

$catnav3= "select * from itemsforsale where itemtype='book' ";
$navresult3= $conn->query($catnav3);

$catnav4= "select * from itemsforsale where itemtype='Clothes' ";
$navresult4= $conn->query($catnav4);

?>


<!doctype html>

<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

	<title> Item's for Sale in Sean's SuperStore </title>

</head>

<body>
	

	
<?php require_once('navbar.php'); ?>

	<?php		
		echo "
		</br>
		</br>
		<h1 id='itemsforsaleheader'> full list of items for sale </h1>
		</br>
		</br>
		";
	
		
		$readAll= "SELECT * FROM users
						INNER JOIN
						itemsforsale
						ON
						users.id = itemsforsale.userid";
		
		$result=$conn->query($readAll);
		$i = 0;
		echo "<div class='container'>";
		while ($row=$result->fetch_assoc()) {
			
			$idnumber=$row['id'];
			$itemtype=$row['itemtype'];
			$itemdescription=$row['itemdescription'];
			$itemprice=$row['price'];
			$itemimage=$row['path'];
			$datelisted=$row['available'];
			$sellerphonenumber=$row['mobilenumber'];
			$uploadedby=$row['username'];

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
					<div class='column'>$uploadedby</div>
				
				
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