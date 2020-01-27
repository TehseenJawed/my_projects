<?php
  $id=$_GET['id'];
 
  $page_title = 'Product Edit';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
   /* $query="SELECT * from categories";

    $result1= $db->query($query);*/
    $query="SELECT * from item_reg WHERE id='$id'";

    $result= $db->query($query);

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
   <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspProducts</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
    	    	  <?php while($row=mysqli_fetch_array($result))
 { ?>
          <form method="POST" action="product_edit.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		 <input type="hidden" name="getid" value="<?php echo $id?>">
		             		<th>Item Name</th>
		             	     <td><input type="text" name="itemname" placeholder="item name" class="form-control" value="<?php echo $row[1]?>" required/></td>
		             		<th>Category</th>
		                
		                    <td>
		                    	
		         <input type="text" name="category" class="form-control "  value="<?php echo $row[3]?>">
		       

							       
		                    </td>
		             	
		             	</tr>
		                		             	<tr>
		             		<th>Quantity</th>
		                
		                    <td><input type="number" value="<?php echo $row[6]?>" name="qty"  class="form-control" required/></td>
		             				             	</tr>
		                <tr>
		                	<td colspan="4">
		                		<input type="submit" name="button"  class="btn btn-success form-control">
		                	</td>
		                </tr>
		             </table>
	           </form>
	           <?php
	       }
	       ?>
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
                        $id=$_POST['getid'];

                    $category=$_POST['category'];
                  
                    $qty=$_POST['qty'];
                                   
                   
                   /* $total_amount=($retail_price*($sales_tax/100)*$no_of_pcs)+($retail_price*$no_of_pcs);
*/
 
	
		
  $query="UPDATE item_reg SET item_name='$item_name',category='$category',quantity='$qty' WHERE id='$id'";
	
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="manage_product.php"';
    echo '</script>';
  }
   

 
} 
?>
	
