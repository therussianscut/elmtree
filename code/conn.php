<?php

$host="smccann11.lampt.eeecs.qub.ac.uk";
$user="smccann11";
$pw="7txRJhC2DkxXKc7g";
$db="smccann11";

$conn= new mysqli($host, $user, $pw, $db);

if ($conn->connect_error) {
	
	$check ="not connected".$conn->connect_error;
	
	
} else {
	
	$check="connected to your MySQL database";
	
	
}


?>

