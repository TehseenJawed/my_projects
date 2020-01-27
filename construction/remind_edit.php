<?php

$id=$_GET['id'];

/*$ww=mysqli_fetch_array($result22);*/
$index=1;


  $page_title = 'ALL Reminders';
  require_once('includes/load.php');
$q="SELECT * FROM reminder WHERE id=$id";
$result22 = $db->query($q);
$row=$result22->fetch_array(MYSQLI_NUM);
$email=$row[1];
$c_name=$row[2];
$cnic=$row[3];
$sub=$row[4];
$message=$row[5];
$datee=$row[6];
echo $email.'<br>'.$c_name.'<br>'.$cnic.'<br>'.$sub.'<br>'.$message.'<br>'.$datee;

 
  // Checkin What level user has permission to view this page
   page_require_level(3);
 
 include_once('layouts/header.php'); 
 
  

 
 $to      = $email;
$subject = $sub;
$message = $message;
$headers = 'From: abdulmalikmajidawan@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
  
  
  
  
  
  

  /*****************************************/
    
 
	
		
    $query="INSERT INTO email(email,c_name,cnic,subject,message,created_on)VALUES('$email','$c_name','$cnic','$sub','$message','$datee')";
	$querydd="DELETE from reminder WHERE id='$id'";
	
 include('config.php');
 if($db->query($querydd))
  {
  }
 
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Send"); location.href="all_remind.php"';
    echo '</script>';
  }
   
 
 
 
 
 
 ?>



