<?php
  $page_title = 'Invoice Return';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(10);
  
  $all_categories = find_all('categories')
?>


<?php


/*$hostname="localhost";
$username="root";
$password="";
$databaseName="soft";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);*/


?>
<?php include_once('layouts/header.php'); ?>


  <div class="row">
     <div class="col-md-12">
      <!-- <?php echo display_msg($msg); ?>-->
     </div>
   <style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #41b9dc;
    box-shadow: 10px 10px 5px #8080805c;

</style>
  <div class="col-md-11">
    <div class="qq">
     <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Invoice Return</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="ninvoice_ret.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
     
                    <th>Inv Ret No.</th>
                    <td>
            
                <input type="text" class="form-control nam" name="invoice_id" placeholder="Invoice Return No.">
</td>


     
                    <th>Return Date</th>
                    <td>
            
                <input type="Date" class="form-control nam" name="date" placeholder="Date">
</td>
</tr>

<tr>
               <th>Remarks</th>
     
                    <td>
            
                <input type="text" class="form-control nam" name="remarks" placeholder="Remarks">
</td>
</tr>





</table>       

<button type="submit" name="customer"  class="btn btn-primary form-control"> Return Invoice </button> 


        <br>
        <br>

      <?php

 if(isset($_POST['customer'])){

 $invoice_id = $_POST['invoice_id'];
 $date = $_POST['date'];
 $remarks = $_POST['remarks'];



$query="SELECT * from invoice_detail where invoice_id='$invoice_id'";

$result2=$db->query($query);

while ($row1=mysqli_fetch_array($result2)) {
  $pn=$row1['prod_id'];
  
  $w=$row1['qty'];
  $query22= "UPDATE newitem_reg set quantity= quantity+ '$w' where id='$pn'";
 
  
 $db->query($query22);
  }

 $queryz="INSERT into ninvoice_return(invoice_id, ret_date, remarks) VALUES
   ('$invoice_id', '$date', '$remarks') ";
  

     if($db->query($queryz))
     {
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="ninvoice_ret.php"';
        echo '</script>';
     } 

else 
     {
        echo '<script language="javascript">';
        echo 'alert("Registeration Failed"); location.href="ninvoice_ret.php"';
        echo '</script>';
     }




 } 

?>


      
      
       


    




