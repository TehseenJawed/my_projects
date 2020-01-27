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
   <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspJ V Vouchers</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="jv_voucher.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Name(Contractor)</th>
		             	     <td><input type="text" name="nam" placeholder="Enter Name" class="form-control" required/></td>
		           
                          <th>Date</th>
                       <td><input type="Date" name="dt" placeholder="Enter Number" class="form-control" required/></td>    

		                    </tr>
		                
		                    <tr>
		             		   <th>Dedit Amount</th>
		             	     <td><input type="number" name="d_amt" placeholder="Enter Address" class="form-control" required/></td>
                       <th>credit Amount</th>
                    
                        <td><input type="number" name="c_amt"  class="form-control" placeholder="Enter Account No."  required/></td>
		             	     
		             	 </tr>
		             	 <tr>
                    <th>Explanation</th>
                    <td><textarea rows="4" cols="50" name="exp" placeholder="Enter Explanation"></textarea></td>
		                	 <td colspan="2">
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

                    $name=$_POST['nam'];
                  
                    $date=$_POST['dt'];
                    $acount=$_POST['d_amt'];
                    
                   $amount=$_POST['c_amt'];
                    $ex=$_POST['exp'];
                    
                   
                  
                   

 
	$query="INSERT INTO  journal_vocher(n_contractor,date_r,d_amount,c_amount,Explanation)VALUES(
	'$name','$date','$acount','$amount','$ex')";
		
    
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="jv_voucher.php"';
    echo '</script>';
  }
   

 
} 
?>
	
