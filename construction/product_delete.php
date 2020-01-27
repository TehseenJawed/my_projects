<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
 $user = current_user(); 
  $aa=$user['user_level'];

  if ($aa==8) {
  	
  page_require_level(8);
  }
  else 
  {
  page_require_level(2);
  }
?>
<?php
$id=$_GET['id'];
  $query="DELETE from item_reg WHERE id='$id'";
  
  
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'location.href="manage_product.php"';
    echo '</script>';
  }
   

 

?>
