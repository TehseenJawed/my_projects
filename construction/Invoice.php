
<?php
  $page_title = 'Customer Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories');

$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);

$query="SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'softy'
AND   TABLE_NAME   = 'invoice';";


$query1="SELECT * from customer_reg";

$query2="SELECT * from new_salesman";

$query3="SELECT * from newitem_reg";


$result1=mysqli_query($connect,$query);

$result2=mysqli_query($connect,$query1);

$result3=mysqli_query($connect,$query2);


$result4=mysqli_query($connect,$query3);


     $query4="SELECT * from newitem_reg where product_id='$product_id'";

$result5=mysqli_query($connect,$query3);



?>
<?php

 

?>
<?php include_once('layouts/header.php'); ?>
  <style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #41b9dc;
    box-shadow: 10px 10px 5px #8080805c;

</style>
  
  <div class="row">
     <div class="col-md-12">
      <!-- <?php echo display_msg($msg); ?>-->
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-8">
        <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            
              <h1 style="text-align: center; color: #c4cfe4;text-shadow: 2px 2px 5px green;"> <span class="glyphicon glyphicon-th"></span>Invoice No. &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span></h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="invoice.php" method="post" >
            <div class="form-group">
      
        <table class="table   table-condensed table-striped  table-hover table-bordered">
          <tr>
           <th>Invoice</th>
           <td>
        <select name="invoice_no" class="form-control nam" required/>
        <option value="">Invoice No</option>
       

       <?php
       while($row1=mysqli_fetch_array($result1)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[0];  
       ?> </option>

     <?php endwhile;?>


       </select>

        </td>
       <th> DC Date</th>
       <td>
       <input type="Date" class="form-control nam" name="dc_date" placeholder="DC Date" required/>
        </td>
      </tr>
      <tr>
       <th>Customer ID </th>
       <td>

       <select name="customer_id" class="form-control nam" required/>
       <option value="">Customer ID</option>
       

       <?php
       while($row1=mysqli_fetch_array($result2)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>


       </select>

       </td>
       <th> Reference No.</th>
       <td>
       <input type="text" class="form-control nam" name="ref_no" placeholder="Reference No." required/> 
       </td>
      </tr>
      <tr>
       
       <th>Sale Person ID</th>
       <td>
     
        <select name="sale_person_id" class="form-control nam" required/>
        <option value="">Sales Person ID</option>
       

       <?php
       while($row1=mysqli_fetch_array($result3)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>


       </select>
     </td>

  
       
       
       <th> Remarks</th>
       <td>
       <input type="text" class="form-control nam" name="remarks" placeholder="Remarks" required/>
       </td>
      </tr>
      <tr>
       
       
       <th>Product ID</th>
       <td>
       
               <select   name="product_id" class="form-control nam"  >
                <option value="">Product ID</option>
       

       <?php
       while($row1=mysqli_fetch_array($result4)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>


?>


     <?php endwhile;?>



       </select>
</td>


  

       <th>Pack Size</th>
       <td>
       <input type="text" class="form-control nam" name="pack_size" placeholder="Pack Size" required/>
       </td>
      </tr>
      <tr>
       <th>Batch No.</th>
       <td>
       <input type="text" class="form-control nam" name="batch_no" placeholder="Batch No." required/>
       </td>
       <th>Price </th>
       <td>
       <input type="text" class="form-control nam" name="price" placeholder="Price" required/>
       </td>
      </tr>
      <tr>
       <th> Quantity</th>
        <td>
       <input type="text" class="form-control nam" name="qty" placeholder="Quantity" required/>
       </td>
       
       <td colspan="2">
       <button type="submit" name="submit"  class="btn btn-primary form-control">&nbsp&nbsp Add &nbsp&nbsp</button>
      </td>
    </tr>
  </table>

      </div>
            </div>
      </div>
      </div>
      </div>
      
    

      <?php

if(isset($_POST['submit'])){

$dc_date = $_POST['dc_date'];

$customer_id = $_POST['customer_id'];

$ref_no = $_POST['ref_no'];
$sales_person_id = $_POST['sale_person_id'];
$remarks = $_POST['remarks'];
$product_id = $_POST['product_id'];
$product_title = $_POST['product_title'];
$pack_size = $_POST['pack_size'];
$batch_no = $_POST['batch_no'];
$price = $_POST['price'];
$qty = $_POST['qty'];



    
    $query="INSERT INTO invoice(dc_date, customer_id, ref_no, sale_person_id, remarks, product_id, 
    pack_size, batch_no, price, qty)VALUES('$dc_date','$customer_id', '$ref_no','$sales_person_id', '$remarks', '$product_id', '$pack_size','$batch_no', '$price', '$qty')";

  $query1= "UPDATE newitem_reg n set n.reorder_quantity= n.reorder_quantity- '$qty' where n.id='$product_id'";

  

     if($db->query($query)){
      if ($db->query($query1)) {
      
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="invoice.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="invoice.php"';
    echo '</script>';
     }

   
   }
}
 

?>
      
      
       


    




