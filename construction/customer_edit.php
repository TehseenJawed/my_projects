<?php
  $id=$_GET['id'];
 
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
   /* $query="SELECT * from categories";

    $result1= $db->query($query);*/
    $query="SELECT * from new_customer_reg WHERE id='$id'";

    $result= $db->query($query);

?>
<?php
  $page_title = 'Product Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>


  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspProducts</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
    	    	  <?php while($row=mysqli_fetch_array($result))
 { ?>
          <form method="POST" action="customer_edit.php">
          	 <input type="hidden" name="getid" value="<?php echo $id?>">
		              <table class="table   table-condensed table-striped  table-hover table-bordered">
               	<tr>
	               		<th>Customer Name</th>
				        <td>
	                         <input type="text" class="form-control nam" name="c_name" placeholder="Customer Name" value="<?php echo $row[1] ?>" required>
				 	    </td>
			 <th>Father Name</th>
			 <td>
			 <input type="text" value="<?php echo $row[1] ?>" class="form-control nam" name="f_name" required/>
		
				 	    
					    </td>
				</tr>
				<tr> 
		                
					 
				 
                
			 <th> CNIC</th>
			 <td>
			 <input type="text" value="<?php echo $row[5] ?>" class="form-control nam" name="cnic" required/>
			 	</td>
				</tr>

<!--assax-->
<tr>
	               		<th>City</th>
				        <td>
	                         <input type="text" value="<?php echo $row[6] ?>" class="form-control nam" name="city" required>
				 	    </td>
			 <th>Country</th>
			 <td>
			 <input type="text" class="form-control nam" name="country" value="<?php echo $row[7] ?>" required/>
		
				 	    
					    </td>
				</tr>
				<tr> 
		                
					 
				</tr>
				<tr> 
                 <th>
		           Passport No</th>
			 <td>
			 <input type="text" value="<?php echo $row[8] ?>" name="pass_no" class="form-control">
		    </td>
			 <th> Address</th>
			 <td>
			 <input type="text" class="form-control nam" value="<?php echo $row[4] ?>" name="add" required/>
			 	</td>
				</tr>




<!--/assax-->
<tr> 
		                
			
                 <th>
		           Permanent Address</th>
			 <td>
			 <input type="text" name="permanent_add" value="<?php echo $row[9] ?>" class="form-control">
		    </td>
			 <th> Telephone Residential</th>
			 <td>
			 <input type="text" value="<?php echo $row[10] ?>" class="form-control nam" name="tele_res" required/>
			 	</td>
				</tr>
				
				<tr> 
                 <th>
		           Telephone Official</th>
			 <td>
			 <input type="text" value="<?php echo $row[11] ?>" name="tele_off" class="form-control">
		    </td>
			 <th>Mobile No Personal</th>
			 <td>
			 <input type="text" class="form-control nam" value="<?php echo $row[12] ?>" name="mob_per" required/>
			 	</td>
				</tr>


	<tr> 
                 <th>
		           Mobile No Official</th>
			 <td>
			 <input type="text" value="<?php echo $row[13] ?>" name="mob_official" class="form-control">
		    </td>
			 <th>Email Offcial</th>
			 <td>
			 <input type="text" value="<?php echo $row[14] ?>" class="form-control nam" name="email_officail" required/>
			 	</td>
				</tr>
				
				<tr> 
                 <th>Email Personl</th>
                 <td>
			 <input type="text" value="<?php echo $row[3] ?>" class="form-control nam" name="email_personal" required/>
			 </td>
               
				
                 
			 <td colspan="2">
			 <button type="submit" name="customer"  class="btn btn-primary form-control" >Register</button>
			</td>
		</tr>
	</table>
</form>
<?php }
?>
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
     $id   = $_POST['getid'];
     
     


   $query="UPDATE new_customer_reg SET name='$c_name' , f_name='$f_name',email_personal='$email_per',address='$address',cnic='$cnic',city='$city',country='$country',passport_no='$pass_no',permanent_add='$permanent_add',telephone_res='$tele_res',telephone_off='$tele_off',mob_no_personal='$mob_per',mob_no_off='$mob_off',email_off='$email_off' WHERE id='$id'";	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="manage_customer.php"';
    echo '</script>';
  }
   

 
} 
?>
	
