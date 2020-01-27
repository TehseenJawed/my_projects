<?php


$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);

    
$query="SELECT * from item_reg";

$result1=mysqli_query($connect,$query);
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
  page_require_level(1);
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspRecipt Form</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="n_recpt_form.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Invoice NO.</th>
		             	     <td><input type="number" name="num" placeholder="Enter..." class="form-control" required/></td>
		           
                              <th>Date</th>
		             	     <td><input type="date" name="dt" placeholder="Enter Date.." class="form-control" required/></td>

							     
		                    </tr>
		                  <tr>
		                    <th>Amount</th>
		                
		                    <td><input type="Numbr" name="am"  class="form-control" placeholder="Enter Amount"  required/></td>
		             	
		             	<th>Quantity</th>
		             	     <td><input type="Number" name="qty" placeholder="Enter Number" class="form-control" required/></td>
		             		
		             	 </tr>
		             	 
		                    <tr>
		             		<th>Select Product</th>
		             	     <td>
		             	     
		                     <select name="option1" class="form-control nam" required>
		                     	<option value="">Select Product</option>
		                          
                                          
							       <?php
							       while($row1=mysqli_fetch_array($result1)):;?>
							       <option value=<?php echo $row1[0]  ?>>
							       <?php echo $row1[1];  
							       ?> </option>

							     <?php endwhile;?>

							      
							</select>

		             	     </td>
		           
		             	
		                	     <td colspan="2">
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

                    $name=$_POST['num'];
                  
                    $date=$_POST['dt'];
                  
                    $amount=$_POST['am'];
                    $qty=$_POST['qty'];
                    $pro=$_POST['option1'];
                   
                  
                   

 
	$query="INSERT into  new_recpt_form(in_no,date_r,amount,qty,item_id)VALUES('$name','$date','$amount','$qty','$pro')";
		
   
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="n_recpt_form.php"';
    echo '</script>';
  }
   

 
} 
?>
	
