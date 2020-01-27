<?php


$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);

    
$query="SELECT * FROM  customer_reg";
$q="SELECT * FROM item_reg";

$result1=mysqli_query($connect,$query);    
$result2=mysqli_query($connect,$q);     
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
   <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspREVERSAL RECEIPT </h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="reversal_recipt.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Select Customer</th>
                       <td>
                       
                         <select name="cus_id" class="form-control nam" required>
                          <option value="">Select Customer</option>
                              
                                          
                     <?php
                     while($row1=mysqli_fetch_array($result1)):;?>
                     <option value=<?php echo $row1[0]  ?>>
                     <?php echo $row1[1];  
                     ?> </option>

                   <?php endwhile;?>

                    
              </select>

                       </td>
		           
                          <th>Select Campany</th>
                       <td>
                       
                         <select name="cam_id" class="form-control nam" required>
                          <option value="">Select Customer</option>
                              
                                          
                     <?php
                     while($row1=mysqli_fetch_array($result2)):;?>
                     <option value=<?php echo $row1[0]  ?>>
                     <?php echo $row1[2];  
                     ?> </option>

                   <?php endwhile;?>

                    
              </select>

                       </td>   

		                    </tr>
		                
		                    <tr>
		             		   <th>Dedit Amount</th>
		             	     <td><input type="number" name="d_amt" placeholder="Enter Address" class="form-control" required/></td>
                       <th>Credit Amount</th>
                    
                        <td><input type="number" name="c_amt"  class="form-control" placeholder="Enter Account No."  required/></td>
		             	     
		             	 </tr>
		             	 <tr>
                    <th>Notes</th>
                    <td><textarea rows="4" cols="50" name="exp" placeholder="Enter Explanation"></textarea></td>
                    <th>Date</th>
                       <td><input type="Date" name="dt" placeholder="Enter Number" class="form-control" required/></td>  
                     </tr>
                     <tr>
		                	 <td colspan="4">
		                		<input type="submit" name="button"  class="btn btn-success form-control ">
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

                    $cu=$_POST['cus_id'];
                  
                    $cm=$_POST['cam_id'];
                    $acount=$_POST['d_amt'];
                    
                   $amount=$_POST['c_amt'];
                    $ex=$_POST['exp'];
                    $date=$_POST['dt'];
                   
                  
                   

 
	$query="INSERT INTO  reversal_recipt(
  customer_id,company_id,c_amount,  d_amount,note,date_r)VALUES(
	'$cu','$cm','$acount','$amount','$ex','$date')";
		
    
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="reversal_recipt.php"';
    echo '</script>';
  }
   

 
} 
?>
	
