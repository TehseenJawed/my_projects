<?php
  $page_title = 'Item Code';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
  $all_categories = find_all('categories');
include 'config.php' ;

$query1="SELECT * from company_reg";


$result1=$db->query($query1);


?>

<?php include_once('layouts/header.php'); ?>


  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspItem Code</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="item_code_reg.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>
			<!--<th>Item Code</th>
			 <td>
			 <input type="text" class="form-control nam" name="item_code" placeholder="Enter Item Code" required/>
			 	</td>-->
			 <th>Item Name</th>
			 <td>
			<input type="text" class="form-control nam" name="item_name" placeholder="Enter Item Name" required/>
			 </td>
			
				<th>Company Name</th>
			 <td>
			 <select name="company_code" class="form-control nam"  value="<?php echo (isset($_POST['Company_Code']))? $_POST['Company_Code']:'' ?>" >
                 <!-- <option value="">Select Vendor id</option> -->
                      <option value=" " >Select Company</option>    
       <?php

       while($row1=mysqli_fetch_array($result1)):;?>
       <option value=<?php echo $row1[0]  ?> >
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>


</select>

			 </td>
			 </tr>
			<tr>
			 <th>Pack Size</th>
			 <td>
			 <input type="text" class="form-control nam" name="pack_size" placeholder="Enter Pack Size" required/>

			 </td>
			
			<th>No. of PCS</th>
			 <td>
			 <input type="text" class="form-control nam" name="pcs" placeholder="Enter Pcs" required/>
			
			</td>
			</tr>
			<tr>
			 <th>Trade Price</th>
			 <td>
			 <input type="text" class="form-control nam" name="trade_price" placeholder="Enter Trade Price" required/>
			 </td>
			
			 
			 <th>Retail Price</th>
			 <td>
			 <input type="text" class="form-control nam" name="retail_price" placeholder="Enter Retail" required/>
			 </td>
			 </tr>
         <tr>
			 
			 <th>Sales Tax In Rs.</th>
			 <td>
			 <input type="text" class="form-control nam" name="sales_tax" placeholder="Enter Sales Tax" required/>
			 </td>
			
				<th>Sales Discount</th>
			  	<td>
			 <input type="text" class="form-control nam" name="sales_discount" placeholder="Enter Sales Discount" required/>
			 </td>
			 </tr>

			<tr>
			  <td colspan="4">
			<button type="submit" name="item"  class="btn btn-primary form-control" >Register</button>
			
			</td>
		   </tr>
			
			</div>
            </div>
			</div>
			</div>
			</div>
			
		 
<?php

if(isset($_POST['item']))
{
// $product_id=$_POST['product_id'];
 //$item_code=$_POST['item_code'];
 $item_name=$_POST['item_name'];
 $company_code=$_POST['company_code'];
 $pack_size=$_POST['pack_size'];

 $pcs=$_POST['pcs'];
 $trade_price=$_POST['trade_price'];
 $retail_price=$_POST['retail_price'];
 $sales_tax=$_POST['sales_tax'];
 $sales_discount=$_POST['sales_discount'];
  $quantity=0;
  $dates=date('y-m-d');

 
	
		
    $query="INSERT INTO newitem_reg(item_name,company_code,pack_size,no_of_pcs,trade_price,retail_price,sales_tax,sales_discount,dates)VALUES('$item_name','$company_code','$pack_size','$pcs','$trade_price','$retail_price','$sales_tax','$sales_discount','$dates')";
	
	
 include('config.php');
 
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="item_code_reg.php"';
    echo '</script>';
  }
 
 
 
} 
?>
	
