<?php
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
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
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Customer Reg</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="cus.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
               	<tr>
	               		<th>Customer Name</th>
				        <td>
	                         <input type="text" class="form-control nam" name="c_name" placeholder="Customer Name" required>
				 	    </td>
			 <th>Father Name</th>
			 <td>
			 <input type="text" class="form-control nam" name="f_name" required/>
		
				 	    
					    </td>
				</tr>
				<tr> 
		                
					 
				 
                
			 <th> CNIC</th>
			 <td>
			 <input type="text" class="form-control nam" name="cnic" required/>
			 	</td>
				</tr>

<!--assax-->
<tr>
	               		<th>City</th>
				        <td>
	                         <input type="text" class="form-control nam" name="city" required>
				 	    </td>
			 <th>Country</th>
			 <td>
			 <input type="text" class="form-control nam" name="country" required/>
		
				 	    
					    </td>
				</tr>
				<tr> 
		                
					 
				</tr>
				<tr> 
                 <th>
		           Passport No</th>
			 <td>
			 <input type="text" name="pass_no" class="form-control">
		    </td>
			 <th> Address</th>
			 <td>
			 <input type="text" class="form-control nam" name="add" required/>
			 	</td>
				</tr>




<!--/assax-->
<tr> 
		                
			
                 <th>
		           Permanent Address</th>
			 <td>
			 <input type="text" name="permanent_add" class="form-control">
		    </td>
			 <th> Telephone Residential</th>
			 <td>
			 <input type="text" class="form-control nam" name="tele_res" required/>
			 	</td>
				</tr>
				
				<tr> 
                 <th>
		           Telephone Official</th>
			 <td>
			 <input type="text" name="tele_off" class="form-control">
		    </td>
			 <th>Mobile No Personal</th>
			 <td>
			 <input type="text" class="form-control nam" name="mob_per" required/>
			 	</td>
				</tr>


	<tr> 
                 <th>
		           Mobile No Official</th>
			 <td>
			 <input type="text" name="mob_official" class="form-control">
		    </td>
			 <th>Email Offcial</th>
			 <td>
			 <input type="text" class="form-control nam" name="email_officail" required/>
			 	</td>
				</tr>
				
				<tr> 
                 <th>Email Personl</th>
                 <td>
			 <input type="text" class="form-control nam" name="email_personal" required/>
			 </td>
               <th>Email Personl</th>
                 <td>
			 <input type="text" class="form-control nam" name="email_personal" required/>
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
     $f_name   = $_POST['f_name'];
     $city     = $_POST['city'];  
     $country  = $_POST['country'];
     $cnic     = $_POST['cnic'];
     $email_per      = $_POST['email_personal'];
     $email_off  = $_POST['email_officail'];
     $mob_per   = $_POST['mob_per'];
     $mob_off   = $_POST['mob_official'];
     $tele_off  = $_POST['tele_off'];
     $tele_res = $_POST['tele_res'];
     $pass_no   = $_POST['pass_no'];
     $address   = $_POST['add'];
     $permanent_add   = $_POST['permanent_add'];
     
     
     $query  = "INSERT INTO new_customer_reg(name, f_name,email_personal,address
     ,cnic,city,country,passport_no,permanent_add,telephone_res,telephone_off,mob_no_personal,mob_no_off,email_off) VALUES ('$c_name', '$f_name', '$email_per', '$address','$cnic','$city','$country','$pass_no','$permanent_add','$tele_res','$tele_off','$mob_per','$mob_off','$email_off')";
     
	 
  include('config.php');

  if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="cus.php"';
    echo '</script>';
  }
   
}



?>
	

