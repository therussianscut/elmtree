<?php

session_start();
include('conn.php');
 
$editid = $conn->real_escape_string($_GET['editid']);
 
$readrow = "SELECT * FROM itemsforsale WHERE id='$editid'";

 
$result = $conn->query($readrow);
 
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

		<div class="row">

			
			<form method="POST" action="editprocess.php">

				<?php
               

                        WHILE($row = $result->fetch_assoc()){
                       
                        $title = $row['itemtype'];
						$itemdescription= $row['itemdescription'];
						$price= $row['price'];
                        $myid = $row['id'];
                       
                        echo "<input value='$title' name='pasttitle' placeholder='enter new category'>
								<input value='$itemdescription' name='pastdescription' placeholder='enter new description'>
								<input value='$price' name='pastprice' placeholder='enter new price'>";
								
								
								
								echo "<input type='hidden' value='$myid' name='myeditid'>";
					
                       
                }

						
						
					
          
                ?>


				<input type="submit" class="siimple-btn" value="edit log" />
				<a class="button button-clear" style="color:#E91E63" href="deletelistingprocess.php?deleteid=<?php echo $editid;?>">Delete item</a>
			</form>


			




		</div>

		<div id='ftext'>
			Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
		</div>

</body>

</html>