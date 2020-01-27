<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
$id=$_GET['id'];
$emp_id=1;

  $query="UPDATE 7_newpayroll SET status='$emp_id'  WHERE payroll_id='$id'";
  
  
 include('config.php');
 if($db->query($query))
  {

   echo '<script language="javascript">';
    echo 'location.href="aprrove_7_newpayroll.php"';
    echo '</script>';
  }
   

 

?>
