<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
$id=$_GET['id'];
  $query="DELETE from add_flat_shop WHERE id='$id'";
  
  
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'location.href="manage_add_flat_shop.php"';
    echo '</script>';
  }
   

 

?>
