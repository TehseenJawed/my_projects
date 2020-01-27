<?php
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
   /* $query="SELECT * from categories";

    $result1= $db->query($query);
    $queryy="SELECT * from new_company_reg";

    $result11= $db->query($queryy);*/

?>
<?php
  $page_title = 'Procurment File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(6);
  /*
  $all_categories = find_all('categories')*/
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspIssue Stock</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="issue_stock.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Date</th>
		             	     <td><input type="Date" name="date" placeholder="Enter Date" class="form-control" required/></td>
		           


							     
		                    </td>
		                    <th>Name of issedby</th>
		                
		                    <td><input type="text" name="nam"  class="form-control" placeholder="Name of Issued By.."  required/></td>
		             	 </tr>
		             	 <tr>
		             		<th>Select Option</th>
		             	     <td>
		             	     
		                     <select name="option1" class="form-control nam" required>
		                     	<option value="">Select Category</option>
		                          <option value="1">Approved</option>
                                     <option value="0">Rejected</option>
							      
							</select>
		             	     </td>
		             	
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
                    $date=$_POST['date'];
                  
                    $nam=$_POST['nam'];
                  
                    $option=$_POST['option1'];
                                        
                   

 
	
		
    $query="INSERT INTO issuedby(date1,name,status)VALUES('$date','$nam','$option')";
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="issue_stock.php"';
    echo '</script>';
  }
   

 
} 
?>
	
