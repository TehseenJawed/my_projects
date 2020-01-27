
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
  $page_title = 'Supplier Payment';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(11);
  

    $query="SELECT * from newvendor_reg";
   $results= $db->query($query);

  $query1="SELECT * from customer_reg";
  $results1= $db->query($query1);


    $query2="SELECT * from addbank";
  $result2= $db->query($query2);
    $query3="SELECT * from customer_reg";

  $result3= $db->query($query3);
  
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
            <h1 style="text-align: center; color: #c4cfe4;  text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Supplier Payment</h1>
         </strong>
        </div>
       
    <script>document.writeln("  <br> ");</script>
    <div class="panel-body">
          <form action="payment_to_vendor.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">    
           <tr>     <th>
       
        Voucher No.</th>
        <td colspan="3">
       <input type="text" class="form-control nam" name="vouchernoo"  placeholder="Voucher No">
       </td>
</tr>
                <tr>
      
        <th>
          
Vendor Name</th>
<td>
 <select name="ven_cus_id" class="form-control nam">
  <option value="">Vendor Name</option>
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
      Voucher Mode
    </th> 
 <td>
       <select id="show" name="voucher_mode" class="form-control nam" onchange="change(this)">Voucher mode
           <option value='1' >          <?php echo "Bank";?> </option>
           <option value='2' >          <?php echo "Cash";?> </option>
       </select>
 </td>
 <th>
          Remarks
         </th>
         <td>
                <input type="text" class="form-control nam" name="remarks" placeholder="Remarks" required="required">
         </td></tr>
         
     
   <script> function change(obj) {


    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var textarea = document.getElementById("text_area");

    if(selected === '1'){
        textarea.style.display = "block";
    }
    else{
        textarea.style.display = "none";
    }
}</script>

  
    
         <table class="table   table-condensed table-striped  table-hover table-bordered">
         <tr id="text_area">
         
         <th>
          Bank Name
         </th>
         <td>
                <select name="banks" class="form-control nam">
  <option value="">Bank Name</option>
       <?php

       while($row1=mysqli_fetch_array($result2)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

       <?php endwhile;?>

      </select>

         </td>
         <th>
          Account No
         </th>
         <td>
                <input type="text" class="form-control nam" name="acc" placeholder="Account No" >
         </td>
         
             <th>
          Check No.
         </th>
         <td>
                <input type="text" class="form-control nam" name="check" placeholder="Check No." >
         </td>
         </tr>
         <tr>
         <td colspan="6">
             
             

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

$vouchernoo = $_POST['vouchernoo'];
//$voucher_type = $_POST['voucher_type'];

$voucher_mode = $_POST['voucher_mode'];
$voucher_cat = $_POST['voucher_cat'];
$ven_cus_id= $_POST['ven_cus_id'];
$amount = $_POST['amount'];
$remarks = $_POST['remarks'];
$dates=date('y-m-d');
$bank_name= $_POST['banks'];
$acc_num= $_POST['acc'];
$check_num= $_POST['check'];


$query="INSERT into vendor_payment(vendor_name, amount, voucher_mode, remarks, bank_name, account_no, check_no, date, voucher_no) VALUES 
('$ven_cus_id', '$amount', '$voucher_mode', '$remarks', '$bank_name', '$acc_num', '$check_num', '$dates', '$vouchernoo')";



     $query1="UPDATE purchase_pay SET payment_paid= payment_paid+'$amount',payment_remaining= payment_remaining-'$amount' WHERE vendor_id='$ven_cus_id'";

    

 
     if($db->query($query) && $db->query($query1) ){
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="payment_to_vendor.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="payment_to_vendor.php"';
    echo '</script>';
     }

   

   

 }

?>
      
      
       
<script>



$(document).ready(function() {

$('#voucher_cat').change(function(){
   //$('#select_2').show();
  
var myName=$('#voucher_cat').val();
window.location.href="payment_to_vendor.php?vc_id="+myName;
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



