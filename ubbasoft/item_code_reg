<?php
  $page_title = 'Product Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
  $all_categories = find_all('categories')
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspProduct Master File</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="item_reg.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>
			<th>Product Title</th>
			 <td>
			 <input type="text" class="form-control nam" name="product_title" placeholder="Enter Product Title" required/>
			 	</td>
			 <th>Product Type</th>
			 <td>
			 <select class="form-control nam" name="product_type" required>
			 	<option value=""> Product type</option>
			 	<option value="1"> Raw material</option>
			 	<option value="2"> Finished Good</option>
			 	<option value="3">Packaging..</option>

			 </select>
			 </td>
			</tr>
			<tr>
				<th>Packing Size</th>
			 <td>
			 <input type="text" class="form-control nam" name="pack_size" placeholder="Enter Packing Size" required/>
			 </td>
			 <th>UOM</th>
			 <td>
			 <select class="form-control nam" name="uom" required/>
			 	<option value="">UOM here</option>
			 	<option value="1">BG | 1</option>
			 	<option value="2">BTL | 2</option>
			 	<option value="3">CAR | 3</option>
			 	<option value="4">EA | 4</option>
			 	<option value="5">GM | 5</option>
			 	<option value="6">ITM | 6</option>
			 	<option value="7">JR | 7</option>
			 	<option value="8">KG | 8</option>
			 	<option value="9">LTR | 9</option>
                <option value="10">MCG| 10</option>
                <option value="11">MG | 11</option>
                <option value="12">ML |  12</option>
                <option value="13">PCS | 13</option>
                <option value="14">STR | 14</option>
                <option value="15">UNIt| 15</option>

			 	

			 </select>
			 </td>
			</tr>
			<tr>
			<th>Trade Price</th>
			 <td>
			 <input type="text" class="form-control nam" name="trade_price" placeholder="Enter Trade Price" required/>
			
			</td>
			 <th>M.R.P</th>
			 <td>
			 <input type="text" class="form-control nam" name="mrp" placeholder="Enter M.R.P" required/>
			 </td>
			</tr>
         <tr>
			 
			 <th>OPB</th>
			 <td>
			 <input type="text" class="form-control nam" name="opb" placeholder="Enter OPB" required/>
			 </td>
			 
			 <th>Product Convention</th>
			 <td>
			 <input type="text" class="form-control nam" name="product_convention" placeholder="Enter Product Convention" required/>
			 </td>
			</tr>

			<tr>
				<th>Re order Quantiy</th>
			  	<td>
			 <input type="text" class="form-control nam" name="reorder_quantity" placeholder="Enter Re order Qunatity" required/>
			 </td>
			 
			  <td colspan="2">
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
 $product_title=$_POST['product_title'];
 $product_type=$_POST['product_type'];
 $pack_size=$_POST['pack_size'];
 $uom=$_POST['uom'];

 $trade_price=$_POST['trade_price'];
 $mrp=$_POST['mrp'];
 $opb=$_POST['opb'];
 $product_convention=$_POST['product_convention'];
 $reorder_quantity=$_POST['reorder_quantity'];
  $quantity=0;
  $dates=date('y-m-d');

 
	
		
    $query="INSERT INTO newitem_reg(product_title,product_type,pack_size,uom,trade_price,mrp,opb,product_convention,quantity,reorder_quantity,dates)VALUES('$product_title','$product_type','$pack_size','$uom','$trade_price','$mrp','$opb','$product_convention','$quantity','$reorder_quantity','$dates')";
	
	
 include('config.php');
 
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="item_reg.php"';
    echo '</script>';
  }
 
 
 
} 
?>
	
