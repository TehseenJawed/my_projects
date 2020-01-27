<?php


include 'config.php' ;
$result22 = $conn->query("SELECT * FROM newvendor_reg");

  $page_title = 'Supplier Code';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
  $all_categories = find_all('categories')
?>
<?php
 if(isset($_POST['add_cat'])){
   $req_field = array('categorie-name');
   validate_fields($req_field);
   $cat_name = remove_junk($db->escape($_POST['categorie-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO categories (name)";
      $sql .= " VALUES ('{$cat_name}')";
      if($db->query($sql)){
        $session->msg("s", "Successfully Added Categorie");
        redirect('sup_reg.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('sup_reg.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('sup_reg.php',false);
   }
 }
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspSupplier Code</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="sup_reg.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>

			 <!--<th>Supplier Code</th>
			 <td>
			 <input type="text" class="form-control nam" name="sup_code" placeholder="Enter Supplier Code">
			 </td> -->
			 <!--<th>Vendor Category ID</th>
			 <td>
			<!--  <input type="text" class="form-control nam" name="ven_cat_id" placeholder="Enter Vendor Category ID"> -->
			 
			
			 
			 <th>Supplier Name</th>
			 <td colspan="3">
			 <input type="text" class="form-control nam" name="sup_name" placeholder="Enter Supplier Name">
			 </td>
			 <!--<th>Designation</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_designation" placeholder="Designation">
			 </td>
			 -->
			 </tr>
			 <tr>
			 
			 
			 <th>Supplier Address </th>
			 <td colspan="3">
			 <textarea cols="20" class="form-control nam" name="v_address" required>
			 </textarea>
			 </td>
			 </tr>
			 <tr>

				<th>Phone 1</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_phone1" placeholder="Enter Phone 1">
			 </td>
			 <th>phone 2</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_phone2" placeholder="Enter Phone 2">
			 </td>
			</tr>
			<tr>
			 <th>Fax</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_fax" placeholder="Enter Fax">
			 </td>
			 <th>Area Code</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_area_code" placeholder="Area Code">
			 </td>
			</tr>
			 <td colspan="4">
			 <button type="submit" name="customer"  class="btn btn-primary form-control">Register</button>
			</td>
			</div>
            </div>
			</div>
			</div>
			</div>
			
			
			 

<?php

if(isset($_POST['customer'])){
// $vendor_id=$_POST['vendor_id'];
// $sup_code=$_POST['sup_code'];
 //$ven_cat_id=$_POST['ven_cat_id'];
 $sup_name=$_POST['sup_name'];
// $v_contact_person=$_POST['v_contact_person'];
// $v_designation=$_POST['v_designation'];
 $v_address=$_POST['v_address'];
 $v_phone1=$_POST['v_phone1'];
 $v_phone2=$_POST['v_phone2'];
 $v_fax=$_POST['v_fax'];
// $v_email=$_POST['v_email'];
// $v_op_bal=$_POST['v_op_bal'];
 $v_area_code=$_POST['v_area_code']
 ?>

 
 
	<?php	
    $query="INSERT INTO newvendor_reg(sup_name,sup_address,phone_1, phone_2,v_fax,area_code)VALUES('$sup_name','$v_address','$v_phone1', '$v_phone2','$v_fax','$v_area_code')";
    if($db->query($query)==true){
    $q2="SELECT * FROM newvendor_reg WHERE sup_name='$sup_name'";
    
$q3= $db->query($q2);
     $row1=mysqli_fetch_array($q3);
     $s=$row1['id'];


  /*  $q3=$db->query($q2);
    $q4=$q3->fetch_array(MYSQLI_NUM);
    $s=$q4[0];  */
    $query1="INSERT INTO purchase_pay(vendor_id)VALUES('$s')";
	



include('config.php');

if($db->query($query1))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="sup_reg.php"';
    echo '</script>';
  }
   
 }}

?>
