<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
?>
<?php
  $product = find_by_id('user_groups',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Missing Product id.");
    redirect('7_userroles.php');
  }
?>
<?php
  $delete_id = delete_by_id('user_groups',(int)$product['id']);
  if($delete_id){
      $session->msg("s","Product deleted.");
      redirect('7_userroles.php');
  } else {
      $session->msg("d","Product deletion failed.");
      redirect('7_userroles.php');
  }
?>
