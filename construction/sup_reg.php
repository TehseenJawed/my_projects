<?php

$q=new mysqli("localhost","ubbasoft_soft","5pakistan5","ubbasoft_ubbasoft");
$result22 = $q->query("SELECT * FROM newvendor_reg");

  $page_title = 'Supplier/Vendor Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  $user = current_user(); 
  $aa=$user['user_level'];

  if ($aa==8) {
  	
  page_require_level(8);
  }
  else 
  {
  page_require_level(2);
  }
  
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspSupplier/Vendor Master File</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="sup_reg.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>

			 <th>Vendor Title</th>
			 <td>
			 <input type="text" class="form-control nam" name="ven_title" placeholder="Enter Vendor Title">
			 </td>
			 <th>Contact Person</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_contact_person" placeholder="Contact Person">
			 </td>
			 
			 
			</tr>
			 <tr>
			 
			 
			 <th>Address </th>
			 <td>
			 <textarea cols="20" class="form-control nam" name="v_address" required>
			 </textarea>
			 </td>
              <th>Phone</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_phone" placeholder="Enter Phone no.">
			 </td>
			</tr>
			<tr>
			 <th>Fax</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_fax" placeholder="Enter Fax">
			 </td>
			
			 <th>Email</th>
			 <td>
			 <input type="text" class="form-control nam" name="v_email" placeholder="Enter Email">
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
 $ven_title=$_POST['ven_title'];
 $v_contact_person=$_POST['v_contact_person'];
 $v_address=$_POST['v_address'];
 $v_phone=$_POST['v_phone'];
 $v_fax=$_POST['v_fax'];
 $v_email=$_POST['v_email'];
 
 


    $query="INSERT INTO newvendor_reg(ven_title,v_contact_person,v_address, v_phone,v_fax,v_email)VALUES('$ven_title','$v_contact_person','$v_address', '$v_phone','$v_fax','$v_email')";

	
include('config.php');

if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="sup_reg.php"';
    echo '</script>';
  }
   
 }

?>
