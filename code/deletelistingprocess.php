<?php
  include("conn.php");
  $deleteid = $conn->real_escape_string($_GET['deleteid']);
  
  $deleterow= "delete from itemsforsale where id='$deleteid'";
   
  echo $deleterow;
   
   
  $deleterowupdate=$conn->query($deleterow);
   

   
   if(!$deleterowupdate){
           echo $conn->error;
   } else {
	  
	 header('Location: membersarea.php');
	   
   }
   
?>