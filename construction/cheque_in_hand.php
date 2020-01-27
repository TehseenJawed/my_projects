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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspCheque In Hand</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="cheque_in_hand.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Bank Name</th>
		             	     <td><input type="text" name="b_nam" placeholder="Enter Name" class="form-control" required/></td>
		           
                              <th>Account No.</th>
		             	     <td><input type="Number" name="Ac_no" placeholder="Enter Number" class="form-control" required/></td>

							     
		                    </tr>
		                  <tr>
		                    <th>Person Name</th>
		                
		                    <td><input type="text" name="p_name"  class="form-control" placeholder="Enter Person Name"  required/></td>
		             	
		             		<th> Campany</th>
		             	     
		             	     
		                     <td><input type="text" name="c_name"  class="form-control" placeholder="Enter Campany Name"  required/></td>

		             	 </tr>
		             	 <tr>
		             		<th>Contactor Name</th>
		             	     <td><input type="text" name="con_no" placeholder="Enter Name" class="form-control" required/></td>
		           
                              <th>Date</th>
		             	     <td><input type="date" name="dt" placeholder="Enter Date" class="form-control" required/></td>

							     
		                    </tr>
		                    <tr>
		             		<th>Amount</th>
		             	     <td><input type="Number" name="am" placeholder="Enter Amount" class="form-control" required/></td>
		           
		             	
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

                    $name=$_POST['b_nam'];
                  
                    $ac=$_POST['Ac_no'];
                  
                    $p_name=$_POST['p_name'];
                    $campany=$_POST['c_name'];
                    $contractor=$_POST['con_no'];
                    $date=$_POST['dt'];
                    $amount=$_POST['am'];
                  
                   

 
	
		
    $query="INSERT INTO cheque_in_hand(Bank,Account_no,p_name,campany_name,contactor,dates,amount)
    VALUES('$name','$ac','$p_name','$campany','$contractor','$date','$amount')";
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="cheque_in_hand.php"';
    echo '</script>';
  }
   

 
} 
?>
	
