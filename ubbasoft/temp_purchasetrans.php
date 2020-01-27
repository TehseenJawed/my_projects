<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(12);
?>
<?php
  $product = find_by_id('temp_sales',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Missing Vendor id.");
    redirect('purchase_trans.php');
  }
?>
<?php
  $delete_id = delete_by_id('temp_sales',(int)$product['id']);
  if($delete_id){
      $session->msg("s","item deleted.");
      redirect('purchase_trans.php');
  } else {
      $session->msg("d","item deletion failed.");
      redirect('purchase_trans.php');
  }
?>
