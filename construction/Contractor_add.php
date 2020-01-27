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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspContractor</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="Contractor_add.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Name</th>
		             	     <td><input type="text" name="nam" placeholder="Enter Name" class="form-control" required/></td>
		           
                              <th>Type</th>
		             	     <td><input type="text" name="type" placeholder="Enter Type" class="form-control" required/></td>

							     
		                    </tr>
		                  <tr>
		                    <th>City</th>
		                
		                    <td><input type="text" name="city"  class="form-control" placeholder="Enter City Name"  required/></td>
		             	
		             		<th>Select Campany</th>
		             	     <td>
		             	     
		                     <select name="option1" class="form-control nam" required>
		                     	<option value="">Select Campany</option>
		                          
                                          
							       <?php
							       while($row1=mysqli_fetch_array($result1)):;?>
							       <option value=<?php echo $row1[2]  ?>>
							       <?php echo $row1[2];  
							       ?> </option>

							     <?php endwhile;?>

							      
							</select>

		             	     </td>
		             	 </tr>
		             	 <tr>
		             		<th>Contact Number</th>
		             	     <td><input type="Number" name="no" placeholder="Enter Number" class="form-control" required/></td>
		           
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
                  
                    $type=$_POST['type'];
                  
                    $city=$_POST['city'];
                    $Campany=$_POST['option1'];
                    $num=$_POST['no'];
                    $addr=$_POST['address'];
                    $da=$_POST['dt'];
                  
                   

 
	
		
    $query="INSERT INTO  contractor(name,type,city,company_name,contact_no,Address,date_r)VALUES('$name','$type','$city','$Campany','$num','$addr','$da')";
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="Contractor_add.php"';
    echo '</script>';
  }
   

 
} 
?>
	
