<?php


include 'config.php' ;
$result22 = $conn->query("SELECT * FROM newvendor_reg");

  $page_title = 'Company Code';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
  $all_categories = find_all('categories')
?>
<?php/*
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
 }*/
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspCompany Code</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="company.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>

			<!-- <th>Company Code</th>
			 <td>
			 <input type="text" class="form-control nam" name="com_code" placeholder="Enter Company Code">
			 </td>-->
			 <!--<th>Vendor Category ID</th>
			 <td>
			<!--  <input type="text" class="form-control nam" name="ven_cat_id" placeholder="Enter Vendor Category ID"> -->
			 
			
			 
			 <th>Company Name</th>
			 <td colspan="3">
			 <input type="text" class="form-control nam" name="com_name" placeholder="Enter Company Name">
			 </td>
			 <!--<th>Designation</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_designation" placeholder="Designation">
			 </td>
			 -->
			 </tr>
			 <tr>
			 
			 
			 <th>Company Address </th>
			 <td colspan="3">
			 <textarea cols="20" class="form-control nam" name="c_address" required>
			 </textarea>
			 </td>
			 </tr>
			 <tr>

				<th>Phone 1</th>
			 <td>
			 <input type="text" class="form-control nam" name="c_phone1" placeholder="Enter Phone 1">
			 </td>
			 <th>phone 2</th>
			 <td>
			 <input type="text" class="form-control nam" name="c_phone2" placeholder="Enter Phone 2">
			 </td>
			</tr>
			<tr>
			 <th>Fax</th>
			 <td colspan="4">
			 <input type="text" class="form-control nam" name="c_fax" placeholder="Enter Fax">
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
// $com_code=$_POST['com_code'];
 //$ven_cat_id=$_POST['ven_cat_id'];
 $com_name=$_POST['com_name'];
// $v_contact_person=$_POST['v_contact_person'];
// $v_designation=$_POST['v_designation'];
 $c_address=$_POST['c_address'];
 $c_phone1=$_POST['c_phone1'];
 $c_phone2=$_POST['c_phone2'];
 $c_fax=$_POST['c_fax'];
// $v_email=$_POST['v_email'];
// $v_op_bal=$_POST['v_op_bal'];
 // $v_area_code=$_POST['v_area_code']
 ?>

 
 
	<?php	
    $query3="INSERT INTO company_reg(Company_Name,Company_Address,Phone_1, Phone_2,Fax)VALUES('$com_name','$c_address','$c_phone1', '$c_phone2','$c_fax')";
    
    /*$q2="SELECT * FROM newvendor_reg WHERE ven_title='$ven_title'";
    
    $q3=$db->query($q2);
    $q4=$q3->fetch_array(MYSQLI_NUM);
    $s=$q4[0];
    $query1="INSERT INTO purchase_pay(vendor_id)VALUES('$s')";
*/	
include('config.php');

if($db->query($query3))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="company.php"';
    echo '</script>';
  }
   
 }

?>
