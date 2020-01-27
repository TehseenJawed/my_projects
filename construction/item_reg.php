i<?php
include('config.php');
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
    $query="SELECT * from categories";

    $result1= $db->query($query);
    $queryy="SELECT * from new_company_reg";

    $result11= $db->query($queryy);

?>
<?php
  $page_title = 'Product Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  $user = current_user(); 
  $aa=$user['user_level'];

  if ($aa==8) {
  	
  page_require_level(8);
  }
  else 
  {
  page_require_level(2);
  }
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>


  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspProducts</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="item_reg.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Item Name</th>
		             	     <td><input type="text" name="itemname" placeholder="item name" class="form-control" required/></td>
		           


							     
		                    </td>
		             	 
		             		<th>Category</th>
		             	     <td>
		             	     
		                     <select name="category_id" class="form-control nam" required>
		                     	<option value="">Select Category</option>
		       

							       <?php


							       while($row1=mysqli_fetch_array($result1)):;?>
							       <option value=<?php echo $row1[1]  ?>>
							       <?php echo $row1[1];  
							       ?> </option>

							     <?php endwhile;?>


							</select>
		             	     </td>
		             	<!-- <th>Pack Size</th>
		                
		                    <td><input type="number" name="pack_size"  class="form-control" required/></td>
 -->		             	</tr>
		             	
		             		
		                <tr>
		                	<td colspan="4">
		                		<input type="submit" name="button"  class="btn btn-success form-control">
		                	</td>
		                </tr>
		             </table>
	           </form>
			</div>
            </div>
			</div>
			</div>
			</div>
			
		 
<?php

if(isset($_POST['button']))
{
// $product_id=$_POST['product_id'];
                    $item_name=$_POST['itemname'];
                  
                    $category_id=$_POST['category_id'];
                  
                
                    
                   /* $total_amount=($retail_price*($sales_tax/100)*$no_of_pcs)+($retail_price*$no_of_pcs);*/

 
	
		
    $query="INSERT INTO item_reg(item_name,category)
    VALUES('$item_name','$category_id')";
	
	
 
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="item_reg.php"';
    echo '</script>';
  }
   

 
} 
?>
	
