
<?php
  $page_title = 'Cash Payment Voucher';
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspCash Payment Vouchers</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="cash_ptm_vocher.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Pay To</th>
		             	     <td><input type="text" name="nam" placeholder="Enter Name" class="form-control" required/></td>
		           
                              <th>Account NO.</th>
		                
		                    <td><input type="text" name="Ac_no"  class="form-control" placeholder="Enter Account No."  required/></td>

							     
		                    </tr>
		                
		                    <tr>
		             		   <th>Amount</th>
		             	     <td><input type="text" name="amt" placeholder="Enter Address" class="form-control" required/></td>
		             	     <th>Date</th>
		             	     <td><input type="Date" name="dt" placeholder="Enter Number" class="form-control" required/></td>
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
			
		 
<?php

if(isset($_POST['button']))
{

                    $name=$_POST['nam'];
                  
                    
                    $acount=$_POST['Ac_no'];
                    
                   $amount=$_POST['amt'];
                    $date=$_POST['dt'];
                    
                   
                  
                   

 
	$query="INSERT INTO  cah_pay_voucher(pay_to_name,account_no,amount,date_r)VALUES(
	'$name','$acount','$amount','$date')";
		
    
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="cash_ptm_vocher.php"';
    echo '</script>';
  }
   

 
} 
?>
	
