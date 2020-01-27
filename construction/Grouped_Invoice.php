 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"> 
<?php
  $page_title = 'Customer Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(13);
  
  $all_categories = find_all('categories')
?>
<?php
$query1="SELECT * from customer_reg";
$query2="SELECT * from new_salesman";

$result1=$db->query($query1);
$result2=$db->query($query2);
?>

<?php include_once('layouts/header.php'); ?>

<style>
#myTable
{
	    margin-left: 261;
}
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #2b9cbd;
  box-shadow: 10px 10px 5px #8080805c;
</style>
  
   <div class="row">
     <div class="col-md-5">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-8">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;  text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th "></span>Group Invoice</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="Grouped_Invoice.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
     
                    <th>From Date</th>
                    <td>
                <input type="Date" class="form-control nam" name="from_date" placeholder="From Date" required/>
        </td>
        <th>
        To Date</th>
        <td>
       <input type="Date" class="form-control nam" name="to_date" placeholder="To Date" required/>
       </td>
     </tr>
     <tr>
       <th>Invoice Date</th>
       <td>
       <input type="Date" class="form-control nam" name="invoice_date" placeholder="Invoice Date" required/>
        </td>
            <th>Customer ID </th>
            <td>

       <select name="customer_id" class="form-control nam" required/>
       <option value="">Customer ID</option>


       <?php

       while($row1=mysqli_fetch_array($result1)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>
       </select>
      
         </td>
     </tr>
     <tr>

       
   <th>Sale Person Id </th>
   <td>

       <select name="sale_person_id" class="form-control nam" required/>
       <option value="">Sale Person Id</option>


       <?php

       while($row1=mysqli_fetch_array($result2)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>
       </select>
      
       </td>

       <td colspan="2">
       <button type="submit" name="customer"  class="btn btn-primary form-control"> Process </button>
      </td>
    </tr>
  </table>
      </div>
            </div>
      </div>
      </div>
      </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>



 <?php

if(isset($_POST['customer']))
 {
  
    $invoice_date = $_POST['invoice_date'];


    $from_date = $_POST['from_date'];


    $to_date = $_POST['to_date'];

    $customer_id = $_POST['customer_id'];

    $sale_person_id = $_POST['sale_person_id'];
    

  $query="SELECT * FROM Invoice where dc_date='$invoice_date' AND customer_id='$customer_id' AND sale_person_id='$sale_person_id' ";
  

     if($db->query($query))
     {
      
      ?>
<br>
<br>
 
    <div class="qq">
      <div class="panel panel-default ">
    <div class="panel-body">

<div class="table-responsive">
<table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
                <th style="color: #6fb6d8" > Invoice No. </th>
                <th style="color: #6fb6d8" > DC Date  </th>
                <th style="color: #6fb6d8" > Customer ID  </th>
                <th style="color: #6fb6d8" > Ref.No. </th>
                <th style="color: #6fb6d8" > Sale Person ID </th>
                <th style="color: #6fb6d8" > Remarks </th>
                                   
              </tr>
            </thead>
            <tbody>
</form>
</div>
</div>

  <?php 
$q=new mysqli("localhost","root","","softy");
$result22 = $q->query("SELECT * FROM Invoice where dc_date='$invoice_date'");
 
while($row1 = $result22->fetch_array(MYSQLI_NUM))
{  
  ?>
            <td class="text-center"> <?php echo remove_junk($row1[0]); ?></td>
            <td class="text-center"> <?php echo remove_junk($row1[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[4]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[5]); ?></td>

                </tr>

 <?php


 
  }

?>


<?php


     } 






   
   }

 

?>
 