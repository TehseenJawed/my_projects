<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
?>
<?php
  $product = find_by_id('newitem_reg',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Missing Product id.");
    redirect('m_edit_itemmreg.php');
  }
?>
<?php
  $delete_id = delete_by_id('newitem_reg',(int)$product['id']);
  if($delete_id){
      $session->msg("s","Product deleted.");
      redirect('m_edit_itemreg.php');
  } else {
      $session->msg("d","Product deletion failed.");
      redirect('m_edit_itemreg.php');
  }
?>
