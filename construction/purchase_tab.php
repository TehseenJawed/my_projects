<?php
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
    $query="SELECT * from item_reg";
     $Q="SELECT * from newvendor_reg";
    $result1= $db->query($query);
    $result2= $db->query($Q);
    $queryy="SELECT * from new_company_reg";

    $result11= $db->query($queryy);

?>
<?php
  $page_title = 'Purchase File';
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspPurchase</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="purchase_tab.php">



                        <table id="customers">
  
</table>
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Product Name</th>
		             	     
		                      <td>
		             	     
		                     <select name="p_name" class="form-control nam" required>
		                     	<option value="">Select Product</option>
		       

							       <?php


							       while($row1=mysqli_fetch_array($result1)):;?>
							       <option value=<?php echo $row1[1]  ?>>
							       <?php echo $row1[1];  
							       ?> </option>

							     <?php endwhile;?>


							</select>
		             	     </td>
		             		<th>Vendor Name</th>
		             	      <td>
		             	     
		                     <select name="v_name" class="form-control nam" required>
		                     	<option value="">Select Vendor</option>
		       

							       <?php


							       while($row1=mysqli_fetch_array($result2)):;?>
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
		             		<th>Quantity</th>
		                
		                    <td><input type="number" id="qty" name="qty"  class="form-control" required/></td>
		                    <th> Price</th>
		             	     <td><input type="number" id="ps12" name="p"  class="form-control" onblur='totalprice();' required/></td>
		             		<th>Total Price</th>
		             	     <td><input type="number" id="tp" name="price"  class="form-control" required/></td>
		             	</tr>
		             	<tr>
		             		
		             		<th>Advance</th>
		             	     <td><input type="number" id="ad12" onblur='Calculate();' name="ch"  class="form-control" required/></td>
		             	     <th>Due</th>
		             	     <td><input type="number" name="du" id="ans" class="form-control" required/></td>
		                </tr>
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
						<script>


function Calculate()
{
  var r = document.getElementById('ad12').value;
  var m = document.getElementById('tp').value; 
  var p = m-r;
  document.getElementById('ans').value=p;
 /* document.form1.submit();*/
}
function totalprice()
{
  var r = document.getElementById('qty').value;
  var m = document.getElementById('ps12').value; 
  var p = m*r;
  document.getElementById('tp').value=p;
 /* document.form1.submit();*/
}
</script>
			
			
		 
<?php

if(isset($_POST['button']))
{

                    $p_name=$_POST['p_name'];
                  
                    $v_name=$_POST['v_name'];
                  
                    $qty=$_POST['qty'];
                    $price=$_POST['price'];
                    $one_pcs_price=$price/$qty;
                    $price2=$_POST['ch'];
                      $price3=$_POST['du'];
                    
                    
                   

 
	
		
    $query="INSERT INTO purchase_pro(pro_name,ven_name,quantity,price,cash,due,one_pcs_price)
    VALUES('$p_name','$v_name','$qty','$price','$price2','$price3','$one_pcs_price')";
     $qq1="UPDATE item_reg SET quantity='$qty' WHERE item_name='$p_name'";
     	if($db->query($qq1))
     {

     } 
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="purchase_tab.php"';
    echo '</script>';
  }
   

 
} 
?>
	