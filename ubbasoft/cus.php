0<?php
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(6);
  
    $query="SELECT * from city_reg";

    $result1= $db->query($query);

?>


<?php include_once('layouts/header.php'); ?>
<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #41b9dc;
    box-shadow: 10px 10px 5px #8080805c;

</style>

<div class="col-md-11">
	<div class="qq">

      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Customer Master File</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="cus.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
               	<tr>
	               		<th>Customer Title</th>
				        <td>
	                         <input type="text" class="form-control nam" name="c_name" placeholder="Customer Name" required>
				 	    </td>

				 	    <th>City Name</th>
	                    <td>
		                     <select name="city_id" class="form-control nam" required>
		                     	<option value="">Select city id</option>
		       

							       <?php


							       while($row1=mysqli_fetch_array($result1)):;?>
							       <option value=<?php echo $row1[0]  ?>>
							       <?php echo $row1[1];  
							       ?> </option>

							     <?php endwhile;?>


							</select>

					    </td>
				</tr>
				<tr> 
		                <th>Contact Person 1</th>
		            <td>
                      <input type="text" class="form-control nam" name="con_per" placeholder="Contact Person" required/>
					 </td>
					 
					 <th>
		                Designation</th>
		              <td>
					 <input type="text" class="form-control nam" name="des" placeholder="Designation" required/>
					 </td>
				</tr>
				<tr> 
                 <th>
		           Address</th>
			 <td>
			 <textarea class="form-control nam" name="addr" required/>
			 
			 </textarea>
			 </td>
			 <th>

			 Phone</th>
			 <td>
			 <input type="text" class="form-control nam" name="ph1" placeholder="Enter Phone no." required/>
			 	</td>
				</tr>
				
				<tr> 
                 <th>Fax</th>
                 <td>
			 <input type="text" class="form-control nam" name="fax" placeholder="Enter Fax" required/>
			 </td>
			 <th>
			 Email</th>
			 <td>
			 <input type="text" class="form-control nam" name="email" placeholder="Enter Email" required/>
			 </td>
				</tr>
				<tr> 
                 <th>Sales Tax Reg Number</th>
                 <td>
			 <input type="text" class="form-control nam" name="s_tax" placeholder="Sales Tax Number" required/>
			 </td>
			 <th>NTN Number</th>	
                <td>
			 		 <input type="text" class="form-control nam" name="ntn" placeholder="NTN Number" required/>
			 </td>
				</tr>
				<tr> 
                 <th>Opening Balance</th>
                 <td>
			 <input type="text" class="form-control nam" name="opbal" placeholder="Opening Balance" required/>
			 </td>
			 <td colspan="2">
			 <button type="submit" name="customer"  class="btn btn-primary form-control" >Register</button>
			</td>
			</div>

            </div>
			</div>

			</div>
			</div>
			</div>
			
			 



			<?php

 if(isset($_POST['customer']))
 {
   
     $c_name   = $_POST['c_name'];
     $c_id   = $_POST['city_id'];
     $con_per  = $_POST['con_per'];
     $des  = $_POST['des'];
     $addr  = $_POST['addr'];
     $ph1 = $_POST['ph1'];
     $fax = $_POST['fax'];
     $email  = $_POST['email'];
     $s_tax  = $_POST['s_tax'];
     $ntn = $_POST['ntn'];
     $opbal = $_POST['opbal'];
    
     $query  = "INSERT INTO customer_reg(Customer_Name, City_ID, Contact_Person, Designation, Address ,Phone_No, Fax, Email, Sales_Tax, NTN, op_bal) VALUES ('$c_name', '$c_id', '$con_per', '$des','$addr','$ph1','$fax' ,'$email' ,'$s_tax' ,'$ntn' ,'$opbal')";
     
	 
  include('config.php');

  if($db->query($query)==true){
   $query1="SELECT * FROM customer_reg WHERE Customer_Name='$c_name'";
     $result2= $db->query($query1);
     $row1=mysqli_fetch_array($result2);
     $g=$row1['id'];
     echo $g;
      $query2 = "INSERT INTO invoice_pay(custom_id) VALUES ('$g')";
      $db->query($query2);
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="cus.php"';
    echo '</script>';
  }
   
}



?>
	

