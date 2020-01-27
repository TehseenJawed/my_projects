
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
  $page_title = 'Voucher Transaction';
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
      <th>Voucher Name</th><td>
            <input type="text" class="form-control nam" name="voucher_name" placeholder="Voucher Name." required="required"></td>
        <th>Voucher Type</th>
        <td>
       
       

        <select name="voucher_type" class="form-control nam" required/>Voucher type
           <option value='1'>          <?php echo "Payment/Vendor";?> </option>
           <option value='2'>          <?php echo "Receipt/Customer";?> </option>
       </select>
     </td>
   </tr>

<tr>

    <th>
      Voucher Mode
    </th> 
 <td>
       <select name="voucher_mode" class="form-control nam">Voucher mode
           <option value='1'>          <?php echo "Bank";?> </option>
           <option value='2'>          <?php echo "Cash";?> </option>
       </select>
 </td>
 <th>
      Voucher Category
    </th>
 <td>
      <select name="voucher_cat" id="voucher_cat" class="form-control nam">
           <option value="0">Select vendor or customer</option>
           <option value="1"<?php echo ($vc==1)?'Selected':'' ?>><?php echo "Customer";?> </option>
           <option value="2" <?php echo ($vc==2)?'Selected':'' ?>><?php echo "Vendor";?> </option>

       </select>
     </td>
   </tr>
<tr>
  <th>
Vendor/Customer ID</th>
<td>
 <select name="ven_cus_id" class="form-control nam">
  <option value="">Vendor/Customer ID</option>
       <?php

       while($row1=mysqli_fetch_array($results)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

       <?php endwhile;?>

      </select>
    </td>
    <th>
       
        Amount</th>
        <td>
       <input type="text" class="form-control nam" name="amount" placeholder="Amount" required="required">
       </td>
       </tr>
       <tr>
         <th>
          Remarks
         </th>
         <td>
                <input type="text" class="form-control nam" name="remarks" placeholder="Remarks" required="required">
         </td>
         <td colspan="2">

         <button type="submit" name="customer"  class="btn btn-primary form-control">Add&nbsp;<span class="glyphicon glyphicon-plus"></span></button>
        </td>
    </tr>
  </table>

      </div>
            </div>
      </div>
      </div>
      </div>



<?php

 
 if(isset($_POST['customer'])){


$voucher_type = $_POST['voucher_type'];

$voucher_mode = $_POST['voucher_mode'];
$voucher_cat = $_POST['voucher_cat'];
$ven_cus_id= $_POST['ven_cus_id'];
$amount = $_POST['amount'];
$remarks = $_POST['remarks'];


$query="INSERT into voucher_transaction(voucher_type, voucher_mode, voucher_cat, ven_cus_id, amount, remarks) VALUES 
( '$voucher_type', '$voucher_mode', '$voucher_cat', '$ven_cus_id', '$amount', '$remarks')";


     if($db->query($query)){
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
  /*var myurl='http://localhost/MUNEEBsofty/voucher_trans1.php';
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



