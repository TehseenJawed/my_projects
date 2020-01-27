<?php

$hostname="localhost";

$username="asteamso_soft";

$password="5karachi5";

$databaseName="asteamso_soft";

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
  page_require_level(4);
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
          <form method="POST" action="cash_pmt_vch.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	
		                  <tr>
		                    
		             	
		             		<th>Currency</th>
		             	     <td>
		             	     <input type="text" name="cr" placeholder="Enter Currency Name" class="form-control" required/></td>
		                     </tr>
<tr>
		             	     </td>
		             	     <th>Date</th>
		             	     <td><input type="Date" name="dt" placeholder="Enter Number" class="form-control" required/></td>
		           
                              

							     
		                    </tr>
		                    <tr>
		             		   <th>Amount</th>
		             	     <td><input type="text" name="amt" placeholder="Enter Amount" class="form-control" required/></td>
		             	     
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
                    $currency=$_POST['cr'];
                    
                   
             
                  
                   

 
	$query="INSERT INTO  bank_pymt_voucher(B_name,Account_no,currency,date_r,amount,check_no)VALUES('$name',
	'$acount','$currency','$date','$amount','$cheque_no')";
		
    
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="bank_pmt_vch.php"';
    echo '</script>';
  }
   

 
} 
?>
	
