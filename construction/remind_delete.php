<?php

$id=$_GET['id'];

$index=1;


  $page_title = 'ALL Reminders';
  require_once('includes/load.php');

 
  // Checkin What level user has permission to view this page
   page_require_level(3);
 
 include_once('layouts/header.php'); 
 
  


  
  
  
  

  /*****************************************/
    
 
	
		

	$querydd="DELETE from reminder WHERE id='$id'";
	
 include('config.php');
 
 
 if($db->query($querydd))
  {
   echo '<script language="javascript">';
    echo 'location.href="all_remind.php"';
    echo '</script>';
  }
   
 
 
 
 
 
 ?>

