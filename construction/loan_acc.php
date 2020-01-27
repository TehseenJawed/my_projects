<?php
  $page_title = 'Loan Accounts';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
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
        redirect('loan_acc.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('loan_acc.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('loan_acc.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>
<h5 style="float: right;">
<b>
  focus --> &nbsp v <br> 
 
  Go to Shop Add Products --> &nbsp - <br> 
   Go to Godown Add Products --> &nbsp + <br> 
      Go to Shop Add Sales --> &nbsp s + a  <br> 
         Go to Godown Add Sales --> &nbsp w <br>
             Go to Shop View Products --> &nbsp o <br>
                 Go to Godown View Products --> &nbsp p <br>
                     Go to Shop View Sales --> &nbsp s + i <br> 
                         Go to Godown View Sales --> &nbsp q <br> 
                         Go to Categories --> &nbsp c <br> 
                         </b>



</h5>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Loan Accounts</span>
         </strong>
        </div>
		<div class="panel-body">
          <form action="loan_acc.php" method="post" >
            <div class="form-group">
			 <strong>
                <text style= 'margin-left:1px';> <span>Loan Account Code &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Last Code: </span></text>
			</strong>
                <input type="text" class="form-control nam" name="loan-acc-code" placeholder="Loan Account Code">
				<br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Account Tittle</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="acc-tittle" placeholder="Account Tittle">
			 	<br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Address</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="address" placeholder="Address">
			</div>
            </div>
			</div>
			</div>
			</div>
			
			
			 <div class="div_2">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Loan Accounts</span>
         </strong>
        </div>
		<div class="panel-body">
            <div class="form-group">
			 <strong>
			 <text style= 'margin-left:1px';> <span>Phone</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="phone-1" placeholder="Enter Phone No.">
			 	<br>
				 <strong>
			 <text style= 'margin-left:1px';> <span>Phone</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="phone-2" placeholder="Enter Phone No.">
			 	<br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Fax</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="fax" placeholder="Enter Fax">
			 <br>
			<button type="submit" name="loan"  class="btn btn-primary" >Register</button>
			</form>
            </div>
			</div>
			</div>
			</div>
			</div>

<?php
 if(isset($_POST['loan'])){
   $req_fields = array('loan-acc-code','acc-tittle','address','phone-1', 'phone-2' , 'fax');
   validate_fields($req_fields);
   if(empty($errors)){
     $lccod  = remove_junk($db->escape($_POST['loan-acc-code']));
     $acc_tit   = remove_junk($db->escape($_POST['acc-tittle']));
     $addr   = remove_junk($db->escape($_POST['address']));
     $phh   = remove_junk($db->escape($_POST['phone-1']));
     $ph  = remove_junk($db->escape($_POST['phone-2']));
     $fa  = remove_junk($db->escape($_POST['fax']));
    
    
     $query  = "INSERT INTO loan_acc (";
     $query .=" LoanAccount_Code ,Account_Tittle ,Address ,Phone_1 ,Phone_2 ,Fax ";
     $query .=") VALUES (";
     $query .=" '{$lccod}', '{$acc_tit}', '{$addr}', '{$phh}', '{$ph}', '{$fa}'";
     $query .=")";
     if($db->query($query)){
        echo '<script language="javascript">';
    echo 'alert("Successfully Entered Loan Account"); location.href="loan_acc.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Entery Failed"); location.href="loan_acc.php"';
    echo '</script>';
     }

   
   }

 }

?>


