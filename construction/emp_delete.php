<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(7);
?>
<?php
$id=$_GET['id'];
  $query="DELETE from add_employee WHERE emp_id='$id'";
  
  
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'location.href="checkemployee.php"';
    echo '</script>';
  }
   

 

?>
