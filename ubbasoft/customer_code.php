0<?php
  $page_title = 'Customer Codes';
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
<?php     $query1="SELECT * from new_salesman";


$result1=$db->query($query1);
 ?>

<div class="col-md-11">
	<div class="qq">

      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Customer Codes</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="customer_code.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
               	<tr>
	               		<!-- <th>Customer Code</th>
				        <td>
	                         <input type="text" class="form-control nam" name="cus_code" placeholder="Customer Code" required>
				 	    </td> -->

				 	    <th>Customer Name</th>
	                    <td colspan="3">
		                    <input type="text" class="form-control nam" name="cus_name" placeholder="Customer Name" required>
					    </td>
				</tr>
				<tr> 
		               <!--  <th>Salesman Code</th>
		            <td>
                      <input type="text" class="form-control nam" name="salesman_code" placeholder="Salesman Code" required/>
					 </td> -->
					 
					 <th>
		                Salesman Name</th>
		              <td colspan="3">
					 
			 <select name="company_code" class="form-control nam"  value="<?php echo (isset($_POST['booker_code']))? $_POST['booker_code']:'' ?>" >
                 <!-- <option value="">Select Vendor id</option> -->
                      <option value=" " >Select Company</option>    
       <?php

       while($row1=mysqli_fetch_array($result1)):;?>
       <option value=<?php echo $row1[0]  ?> >
       <?php echo $row1[2];  
       ?> </option>

     <?php endwhile;?>


</select>

			 
					 </td>
				</tr>
				<tr> 
                 <th>
		           Customer Address</th>
			 <td colspan="3">
			 <textarea class="form-control nam" name="cust_address" required/>
			 
			 </textarea>
			 </td>
			 </tr><tr>
			 <th>
			 Phone 1</th>
			 <td>
			 <input type="text" class="form-control nam" name="ph1" placeholder="Enter Phone no." required/>
			 	</td>
				
			 <th>

			 Phone 2</th>
			 <td>
			 <input type="text" class="form-control nam" name="ph2" placeholder="Enter Phone no." required/>
			 	</td>
				</tr>
				<tr>
                 <th>Fax</th>
                 <td>
			 <input type="text" class="form-control nam" name="fax" placeholder="Enter Fax" required/>
			 </td>
			
			 <th>
			 Area Code</th>
			 <td >
			 <input type="text" class="form-control nam" name="area_code" placeholder="Enter Email" required/>
			 </td>
				</tr>
				<!--<tr> 
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
			 </td>-->
			 <tr>
			 <td colspan="4">
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
   
     $cus_code   = $_POST['cus_code'];
     $cus_name   = $_POST['cus_name'];
     $salesman_code  = $_POST['salesman_code'];
     $salesman_name  = $_POST['salesman_name'];
     $cust_address  = $_POST['cust_address'];
     $ph1 = $_POST['ph1'];
     $ph2 = $_POST['ph2'];
     $fax = $_POST['fax'];
     $area_code  = $_POST['area_code'];
    // $s_tax  = $_POST['s_tax'];
     //$ntn = $_POST['ntn'];
     //$opbal = $_POST['opbal'];
     $dates=date('y-m-d');
    $balance=0;
     $query  = "INSERT INTO customer_reg(customer_code, customer_name, salesman_code, 	salesman_name, customer_address , phone_1, phone_2, fax, area_code, date, old_balance) VALUES ('$cus_code', '$cus_name', '$salesman_code', '$salesman_name','$cust_address','$ph1', '$ph2' ,'$fax' ,'$area_code' ,'$dates', '$balance')";
     
	 
  include('config.php');

  if($db->query($query)==true){
   $query1="SELECT * FROM customer_reg WHERE Customer_Name='$cus_name'";
     $result2= $db->query($query1);
     $row1=mysqli_fetch_array($result2);
     $g=$row1['id'];
     
      $query2 = "INSERT INTO invoice_pay(custom_id) VALUES ('$g')";
      $db->query($query2);
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="customer_code.php"';
    echo '</script>';
  }
   
}



?>
	

