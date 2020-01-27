<?php
  require_once('includes/load.php');
  $session->logout();
//   if(!$session->logout()) {redirect("index.php");}
  echo '<script>window.location.href="index.php"</script>';
?>
