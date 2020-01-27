<?php
  $page_title = 'Customer Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(10);
  
  $all_categories = find_all('categories')
?>


<?php


$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);


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
          <form action="invoice_ret.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
     
                    <th>Inv Ret No.</th>
                    <td>
            
                <input type="text" class="form-control nam" name="invoice_id" placeholder="Invoice Return No.">
</td>
<td>
<button type="submit" name="customer"  class="btn btn-primary form-control"> Get Record</button> 
</td>
</tr>
</table>       


        <br>
        <br>

      <?php

 if(isset($_POST['customer'])){

 $invoice_id = $_POST['invoice_id'];


$query="SELECT * from invoice where invoice_no='$invoice_id'";

$result2=mysqli_query($connect,$query);
$result22=mysqli_query($connect,$query);

$result3=mysqli_query($connect,$query);
$result4=mysqli_query($connect,$query);
$result5=mysqli_query($connect,$query);
$result6=mysqli_query($connect,$query);
$result7=mysqli_query($connect,$query);
$result8=mysqli_query($connect,$query);
$result9=mysqli_query($connect,$query);
$result10=mysqli_query($connect,$query);
$result11=mysqli_query($connect,$query);

$result12=mysqli_query($connect,$query);

/*
foreach ($result3 as $key1) {
    // $arr[3] will be updated with each value from $arr...
    echo "$key1";
    print_r($key1);
}

*/

$query="SELECT * from invoice where invoice_no='$invoice_id'";
$query1="SELECT sal_title from new_salesman s, invoice i where s.id = i.sale_person_id and invoice_no='$invoice_id'";

$query2="SELECT Customer_Name from customer_reg c, invoice i where c.id = i.customer_id and invoice_no='$invoice_id'";

$query3="SELECT product_title from newitem_reg n, invoice i where n.id = i.product_id and invoice_no='$invoice_id'";

$result1=mysqli_query($connect,$query);
$result123=mysqli_query($connect,$query1);

$result122=mysqli_query($connect,$query2);

$result124=mysqli_query($connect,$query3);


 } 

?>
 <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
 
                    
       <th>Inv Ret Datth</th>
        <td>
       <input type="Date" name="invoice_date" class="form-control nam" placeholder="Inv Ret Date">
       </td>
     
       <th>Customer ID </th>
       <td>

       <select name="customer_id" class="form-control nam">Customer ID


       <?php

       while($row1=mysqli_fetch_array($result2)):;?>
       <option value=<?php echo $row1[2]  ?>>
       <?php echo $row1[2];  
       ?> </option>

     <?php endwhile;?>
       </select>
     </td>
   
 </tr>

       

        <th>Customer Name</th>
        <td>
      
       <select name="customer_name" class="form-control nam">Customer Name


       <?php

       while($row1=mysqli_fetch_array($result122)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[0];  
       ?> </option>

     <?php endwhile;?>
       </select>
       </td>

       

       <th>Reference No.</th>
       <td>

       <select name="ref_no" class="form-control nam">Reference No
       
       <?php
  

       while($row1=mysqli_fetch_array($result3)):;?>
       <option value=<?php echo $row1[3]  ?>>
       <?php echo $row1[3];  
       ?> </option>

     <?php endwhile;?>
       </select>
         </td>
   
 </tr>
 <tr>
       
       <th>Sale Person ID</th>
       <td>
       
       
       <select name="sale_person_id" class="form-control nam">Sale Person ID
       
       <?php
  

       while($row1=mysqli_fetch_array($result4)):;?>
       <option value=<?php echo $row1[4]  ?>>
       <?php echo $row1[4];  
       ?> </option>

     <?php endwhile;?>
       </select>
     </td>
       
        <th>Sale Person Name</th>
        <td>
        <select name="sale_person_name" class="form-control nam">Sale Person Name
       
       <?php
  

       while($row1=mysqli_fetch_array($result123)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[0];  
       ?> </option>

     <?php endwhile;?>
       </select>

         </td>
   
 </tr>
   
      <tr> 
       <th>Remarksth</th>
        <td>


       <select name="remarks" class="form-control nam">Remarks
       
       <?php
  

       while($row1=mysqli_fetch_array($result5)):;?>
       <option value=<?php echo $row1[5]  ?>>
       <?php echo $row1[5];  
       ?> </option>

     <?php endwhile;?>
       </select>



       </td>
   
       
       <th>Product IDth>
        <td>

       
       <select name="product_id" class="form-control nam">Product ID
       
       <?php
  

       while($row1=mysqli_fetch_array($result6)):;?>
       <option value=<?php echo $row1[6]  ?>>
       <?php echo $row1[6];  
       ?> </option>

     <?php endwhile;?>
       </select>
            </td>
   
 </tr>
 <tr>
       <th>Product title</th>
       <td>


       <select name="product_title" class="form-control nam">Product title
       
       <?php
  

       while($row1=mysqli_fetch_array($result124)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[0];  
       ?> </option>

     <?php endwhile;?>
       </select>
     </td>
       
       <th>Pack Size</th>
       <td>


       
       <select name="pack_size" class="form-control nam">Pack Size
       
       <?php
  

       while($row1=mysqli_fetch_array($result8)):;?>
       <option value=<?php echo $row1[7]  ?>>
       <?php echo $row1[7];  
       ?> </option>

     <?php endwhile;?>
       </select>
            </td>
   
 </tr>
 <tr>
       <th>Batch No.</th>
       <td>


       <select name="batch_no" class="form-control nam">Batch No.
       
       <?php
  

       while($row1=mysqli_fetch_array($result9)):;?>
       <option value=<?php echo $row1[8]  ?>>
       <?php echo $row1[8];  
       ?> </option>

     <?php endwhile;?>
       </select>

   
       <br>
       <th>Price th</th>
        <td>

       
       <select name="price" class="form-control nam">Price
       
       <?php
  

       while($row1=mysqli_fetch_array($result10)):;?>
       <option value=<?php echo $row1[9]  ?>>
       <?php echo $row1[9];  
       ?> </option>

     <?php endwhile;?>
       </select>
            </td>
   
 </tr>
 <tr>
       <th>Quantity</th>
       <td>

       
       <select name="qty" class="form-control nam">Quantity 
       
       <?php
  

       while($row1=mysqli_fetch_array($result11)):;?>
       <option value=<?php echo $row1[10]  ?>>
       <?php echo $row1[10];  
       ?> </option>

     <?php endwhile;?>
       </select>

       </td>
       <td colspan="2">
       
       <button type="submit" name="customer1"  class="btn btn-primary form-control">Add </button>
      </td>
    </tr>
  </table>
      </div>
            </div>
      </div>
      </div>
      </div>


      <?php
 if(isset($_POST['customer1'])){

 $inv_ret_date = $_POST['invoice_date'];
 $customer_id = $_POST['customer_id'];

 $ref_no = $_POST['ref_no'];
 $sale_person_id = $_POST['sale_person_id'];

 $remarks = $_POST['remarks'];
 $product_id = $_POST['product_id'];

 $pack_size = $_POST['pack_size'];
 $batch_no = $_POST['batch_no'];
 $price = $_POST['price'];
$qty = $_POST['qty'];



$query="INSERT into invoice_return(invoice_ret_date, customer_id, ref_no, sale_person_id, remarks, product_id,  pack_size, batch_no, price, qty) VALUES('$inv_ret_date', '$customer_id', '$ref_no', '$sale_person_id','$remarks', 
'$product_id', '$pack_size', '$batch_no', '$price', '$qty')";

  $query1= "UPDATE newitem_reg n set n.reorder_quantity= n.reorder_quantity+ '$qty' where n.id='$product_id'";



  if($db->query($query)){
     if ($db->query($query1)) {
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="invoice_ret.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="invoice_ret.php"';
    echo '</script>';
     }
}


 } 

?>


      
      
       


    




