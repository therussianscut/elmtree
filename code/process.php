<?php
session_start();
include("conn.php");



$myDatausername= $conn->real_escape_string(trim($_POST["username"]));
$myDatausername=htmlentities($myDatausername);
$_SESSION['username'] = $myDatausername;
$myDataemail= $conn->real_escape_string(trim($_POST["email"]));
$myDataemail=htmlentities($myDataemail);
$myDatmobilenumber= $conn->real_escape_string(trim($_POST["MobileNumber"]));
$myDatmobilenumber=htmlentities($myDatmobilenumber);
$myDatapassword= $conn->real_escape_string(trim($_POST["password1"]));
$myDatapassword=htmlentities($myDatapassword);
$myDatapassword2= $conn->real_escape_string(trim($_POST["password2"]));
$myDatapassword2=htmlentities($myDatapassword2);
$ran= rand(0, 10000);

$filename= $_FILES['uploadimg'] ['name'];
$filename= $ran.$filename;
$filetmp= $_FILES['uploadimg'] ['tmp_name'];
$filetype = $_FILES['uploadimg']['type'];

move_uploaded_file($filetmp, "../webimg/".$filename);

$insertquery ="INSERT INTO users (id, username, email, mobilenumber, password, path) values (null, '$myDatausername', '$myDataemail', '$myDatmobilenumber', MD5('$myDatapassword'), '$filename')";

$checkuser = "select * from users where (username='$myDatausername' or email='$myDataemail');";
 
$result = $conn->query($checkuser);
 
$num = $result -> num_rows;
 
if($num > 0 ) {
	
header('location: registerretry.php');
exit();
       
}else if ($num=0){
       
$result=$conn->query($insertquery);
       
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
	
	<title> Registration Successful </title>
	
	</head>
	
	<body>
	<div class="wrapper">

		<header class="header">
			<h3> Registration Outcome: </h3>
		</header>
		
		<main class="content">		
		<?php
			$password1=$_POST['password1'];
			$password2=$_POST['password2'];
			$username=$_POST['username'];
			$email=$_POST['email'];
				
			if ($password1 != $password2) {		
				echo("Error... Passwords do not match");
				echo "<p> click <a href='register.php'> here </a> to retry registration</p>";
				exit;			
	                }else{
				$result=$conn->query($insertquery);
					
				if (!$result){
					echo $conn->error;
				} else {
			                echo "<p>$myDatausername has been succesfully registered to Sean's superstore. Now you can buy and sell stuff..</p>";
					echo "<p> click <a href='register.php'> here </a> to return to registration page</p>";
					echo "<p> click <a href='login.php'> here </a> to immediately login</p>";

					echo "<p> <img src='../webimg/$filename'> </p>";
				}
					
       			}
					
		
		?>
		</main>
		
		<footer class="footer">
			Sean's SuperStore | &copy; <?php echo date("Y"); ?> Copyright.
		</footer>

	</div>		
	</body>
</html>




