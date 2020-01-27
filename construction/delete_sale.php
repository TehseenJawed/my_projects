<?php
  require_once('includes/load.php');
  include 'config.php' ;
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
 
    if(isset($_GET['id']))
    {


  $id = $_GET['id'] ;
$query = "delete from bill where bill_id = '$id'" ;

if($result = $conn->query($query))
{

  redirect('sales.php');
}

    
    }
  
?>
