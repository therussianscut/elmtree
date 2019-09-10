<?php
session_start();
include('conn.php');



$username = $_SESSION['username'];
 
$row = $conn->real_escape_string($_GET['editid']);
 
$readrow = "SELECT * FROM users WHERE id='$row'";

 
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
  
  
 <form method="POST" action="editprocesspersonal.php">

	 <?php
               

                        WHILE($row = $result->fetch_assoc()){
                       
                        $username = $row['username'];
						$email= $row['email'];
						$mobilenumber= $row['mobilenumber'];
                        $myid = $row['id'];
                       
                        echo "<input value='$username' name='pastusername' >
								<input value='$email' name='pastemail' >
								<input value='$mobilenumber' name='pastmobilenumber' >";
								
								
						
						
						
                 
                        echo "<input type='hidden' value='$myid' name='myeditid'>";
                       
                }
						
						
						
					
          
                ?>
				
				
				<input type="submit" class="siimple-btn" value="edit log"/>
				<input type="submit" class="siimple-btn" value="Delete Account"/>
    </form>
 
		</div>
		<div id='ftext'> 
		Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
		</div>
	
	</body>
</html>