
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #41b9dc;
    box-shadow: 10px 10px 5px #8080805c;
}
</style>

<?php
  $page_title = 'Invoice Report';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(11);
  
$vc= @$_GET["vc_id"];
echo '<h1>'.$vc.'</h1>';
if ($vc==2) {
    $query="SELECT * from newvendor_reg";
   $results= $db->query($query);
}
 if($vc==1)
{
  $query="SELECT * from customer_reg";
  $results= $db->query($query);
}

    $query="SELECT * from addbank";
  $result4= $db->query($query);
    $query1="SELECT * from customer_reg";

  $result1= $db->query($query);
  $result2= $db->query($query1);
  
?>

<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
      <!-- <?php echo display_msg($msg); ?>-->
     </div>
  </div>
   <div class="div_1">
   <div class="col-md-11">
      <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;  text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Voucher Transaction</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="voucher_trans.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">    
                <tr>
      <th> <a href="sea_by_inv.php">Search By Purchase Invoice</a> </th>
    </tr>
    <tr>
      <th> <a href="sea_by_inv_1.php">Search By Sales Invoice</a> </th>
    </tr>
    <tr>
      <th> <a href="sea_by_vou.php">Customer Recipt Report</a> </th>
    </tr>
    <tr>
      <th> <a href="sea_by_vou1.php">Supplier Payment Report</a> </th>
    </tr>
  </table>

      </div>
            </div>
      </div>
      </div>
      </div>



<?php

 
 if(isset($_POST['customer'])){

$voucher_name = $_POST['voucher_name'];
$voucher_type = $_POST['voucher_type'];

$voucher_mode = $_POST['voucher_mode'];
$voucher_cat = $_POST['voucher_cat'];
$ven_cus_id= $_POST['ven_cus_id'];
$amount = $_POST['amount'];
$remarks = $_POST['remarks'];
$dates=date('y-m-d');


$query="INSERT into voucher_transaction(voucher_name, voucher_type, voucher_mode, voucher_cat, ven_cus_id, amount, remarks, dates) VALUES 
('$voucher_name', '$voucher_type', '$voucher_mode', '$voucher_cat', '$ven_cus_id', '$amount', '$remarks', '$dates')";


if ($voucher_cat==2) {
     $query1="UPDATE purchase_pay SET payment_paid= payment_paid+'$amount',payment_remaining= payment_remaining-'$amount' WHERE vendor_id='$ven_cus_id'";

    $results= $db->query($query1);
}
 if($voucher_cat==1)
{
  $query2="UPDATE invoice_pay SET payment_paid= payment_paid+'$amount',payment_remaining= payment_remaining-'$amount' WHERE custom_id='$ven_cus_id'";
  $results= $db->query($query2);
}

     if($db->query($query) ){
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="voucher_trans.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="voucher_trans.php"';
    echo '</script>';
     }

   

   

 }

?>
      
      
       
<script>



$(document).ready(function() {

$('#voucher_cat').change(function(){
   //$('#select_2').show();
  
var myName=$('#voucher_cat').val();
window.location.href="voucher_trans.php?vc_id="+myName;
/*  console.log('myname'+myName);
  alert('Thank you! MR  '+myName);
*/ 
  /*var myurl='http://localhost/MUNEEBSOFT/voucher_trans1.php';
    $.ajax({
      url: myurl,
          method:'POST',
      data: 'id='+myName,
      success: function(result){
        
      }
    });*/

});
});



  
</script>



