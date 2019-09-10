<?php
  include("conn.php");
  $username = $conn->real_escape_string($_POST['pastusername']);
  $email= $conn->real_escape_string($_POST['pastemail']);
  $mobilenumber= $conn->real_escape_string($_POST['pastmobilenumber']);
  $id = $conn->real_escape_string($_POST['myeditid']);
  
  
 
  $update = "UPDATE users SET username = '$username', email= '$email', mobilenumber='$mobilenumber'  WHERE id = $id ";
   
   echo $update;
   
   $resultupdate = $conn->query($update);
   
   if(!$resultupdate){
           echo $conn->error;
   } else {
	   
	   header('Location: membersarea.php');
	   
   }
   
?>