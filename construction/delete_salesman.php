<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
?>
<?php
  $product = find_by_id('new_salesman',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Missing Salesman id.");
    redirect('m_edit_salesman.php');
  }
?>
<?php
  $delete_id = delete_by_id('new_salesman',(int)$product['id']);
  if($delete_id){
      $session->msg("s","Customer deleted.");
      redirect('m_edit_salesman.php');
  } else {
      $session->msg("d","Customer deletion failed.");
      redirect('m_edit_salesman.php');
  }
?>
