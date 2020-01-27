<?php
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
    $query="SELECT * from categories";

    $result1= $db->query($query);

?>
<?php
  $page_title = 'Product Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
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
          <div class="form-group">
				<form method="POST" action="company_reg.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered"">
		             	<tr>
		             		<th>Company Name</th>
		             	</tr>
		                <tr>
		                	<td><input type="text" name="companyname" placeholder="Company name" class="form-control" required/></td>
		                </tr>
		             	<tr>
		             		<th>Company Address</th>
		             	</tr>
		             	<tr>
		             		<td><textarea cols="25" class="form-control" placeholder="Your Company Address" name="companyaddress" rows="4" id="textarea" required/ ></textarea></td>
		             	</tr>

		             		<tr>
		             		<th>Company Phone</th>
		                </tr>
		                    
		                <tr>
		                    <td><input type="number" name="companynumber" placeholder="Company number" class="form-control" required/></td>

		                </tr>
		                <tr>
		                	<td>
		                		<input type="submit" name="button" class="btn btn-success form-control">
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
 $companyname=$_POST['companyname'];
 $companyaddress=$_POST['companyaddress'];
 $companynumber=$_POST['companynumber'];
 
 
	
		
    $query="INSERT INTO new_company_reg(company_name,company_address,company_phone)VALUES('$companyname','$companyaddress','$companynumber')";
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="item_reg.php"';
    echo '</script>';
  }
   

 
} 
?>
	
