<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
?>
<?php
  $product = find_by_id('newvendor_reg',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Missing Vendor id.");
    redirect('m_edit_supplierreg.php');
  }
?>
<?php
  $delete_id = delete_by_id('newvendor_reg',(int)$product['id']);
  if($delete_id){
      $session->msg("s","Vendor deleted.");
      redirect('m_edit_supplierreg.php');
  } else {
      $session->msg("d","Vendor deletion failed.");
      redirect('m_edit_supplierreg.php');
  }
?>
