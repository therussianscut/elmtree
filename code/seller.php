<?php
session_start();
include("conn.php");



$uname = $_SESSION['username'];
$getuserquery ="SELECT id FROM users WHERE users.username = '$uname'";
$ran= rand(0, 10000);
$result = $conn->query($getuserquery);

$count = $result->num_rows;
$user_id = "-1";
if ($count == 1){
	while ($row =  $result->fetch_assoc()){
		$user_id = $row['id'];
	}

}
$myDataitemtype= $conn->real_escape_string(trim($_POST["itemtype"]));
$myDataitemtype= htmlentities($myDataitemtype);
$myDataitemdescription= $conn->real_escape_string(trim($_POST["description"]));
$myDataitemdescription=htmlentities($myDataitemdescription);
$myDataprice= $conn->real_escape_string (trim($_POST["price"]));
$myDataprice=htmlentities($myDataprice);

$filename= $_FILES['uploadimg'] ['name'];
$filename= $ran.$filename;
$filetmp= $_FILES['uploadimg'] ['tmp_name'];
$filetype = $_FILES['uploadimg']['type'];

$finddate= date("Y-m-d");

move_uploaded_file($filetmp, "../webimg/$filename");

$insertquery ="INSERT INTO itemsforsale (id, userid, itemtype, itemdescription, price, path, available) values (null,  '$user_id', '$myDataitemtype', '$myDataitemdescription', '$myDataprice', '$filename', '$finddate')";
 

?>

<!doctype html>

<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
	
	<title> Successfully listed for sale </title>
	
	</head>
	
	<body>
		<div class="wrapper">

			<header class="header">
				<h1 style="text-align: center;">Listed for sale!</h1>
				<h3><a href="membersarea.php">Click to move back</a></h3>

			</header>
		
			<main class="content">
			<?php
		
				$result=$conn->query($insertquery);
			
				if (!$result) {
					echo $conn->error;				
				} else {
					echo "<h2  style='text-align: center;'>  Item successfully listed to database </h2>";
				}
		
				echo "<p> <img src='../webimg/$filename'> </p>";
	
		
			?>
			</main>
		
			<footer class="footer">
				Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
			</footer>

		</div>
		
		
	</body>
</html>
