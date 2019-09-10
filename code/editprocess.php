<?php
  include("conn.php");
  $title_data = $conn->real_escape_string($_POST['pasttitle']);
  $itemdescription= $conn->real_escape_string($_POST['pastdescription']);
  $price= $conn->real_escape_string($_POST['pastprice']);
  $id = $conn->real_escape_string($_POST['myeditid']);
  
  
 
  $update = "UPDATE itemsforsale SET itemtype = '$title_data', itemdescription= '$itemdescription', price='$price'  WHERE id = $id ";
   
   echo $update;
   
   $resultupdate = $conn->query($update);
   
   if(!$resultupdate){
           echo $conn->error;
   } else {
	   
	   header('Location: membersarea.php');
	   
   }
   
?>