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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspAdvance Payment</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="adv_pymt.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Name</th>
		             	     <td><input type="text" name="nam" placeholder="Enter Name" class="form-control" required/></td>
		           
                              <th>City</th>
		                
		                    <td><input type="text" name="city"  class="form-control" placeholder="Enter City Name"  required/></td>

							     
		                    </tr>
		                  <tr>
		                    
		             	
		             		<th>Campany</th>
		             	     <td>
		             	     <input type="text" name="option1" placeholder="Enter Campany Name" class="form-control" required/></td>
		                     

		             	     </td>
		             	 
		           
                              <th>Address</th>
		             	     <td><input type="text" name="address" placeholder="Enter Address" class="form-control" required/></td>

							     
		                    </tr>
		                    <tr>
		             		<th>Date</th>
		             	     <td><input type="Date" name="dt" placeholder="Enter Number" class="form-control" required/></td>
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

                    $name=$_POST['nam'];
                  
                    
                    $city=$_POST['city'];
                    $Campany=$_POST['option1'];
                   
                    $addr=$_POST['address'];
                    $da=$_POST['dt'];
                  
                   

 
	$query="INSERT INTO Advance_paymt(name,city,campany,address,date_r)VALUES('$name',
	'$city','$Campany','$addr','$da')";
		
    
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="adv_pymt.php"';
    echo '</script>';
  }
   

 
} 
?>
	
