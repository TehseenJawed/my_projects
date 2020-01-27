<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(9);
?>
<?php
  $product = find_by_id('temp_sale',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Missing Vendor id.");
    redirect('newinvoice.php');
  }
?>
<?php
  $delete_id = delete_by_id('temp_sale',(int)$product['id']);
  if($delete_id){
      $session->msg("s","Vendor deleted.");
      redirect('newinvoice.php');
  } else {
      $session->msg("d","Vendor deletion failed.");
      redirect('newinvoice.php');
  }
?>
