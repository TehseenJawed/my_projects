<?php
  $page_title = 'Bank Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
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
            <span>Bank Registration</span>
         </strong>
        </div>
		<div class="panel-body">
          <form action="bank_reg.php" method="post" >
            <div class="form-group">
			 <strong>
                <text style= 'margin-left:1px';> <span>Bank Code &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Last Code: 1</span></text>
			</strong>
                <input type="text" class="form-control nam" name="bank-code" placeholder="Bank Code">
				<br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>A/C</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="a/c" placeholder="Account Number">
			 	<br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Bank Name</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="bank-name" placeholder="Bank Name">
			 <br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Account Tittle</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="a/c-tittle" placeholder="Account Tittle">
			 <br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Bank Address</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="bank-address" placeholder="Bank Address">
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
            <span>Bank Registration</span>
         </strong>
        </div>
		<div class="panel-body">
            <div class="form-group">
			 <strong>
			 <text style= 'margin-left:1px';> <span>Manager Name</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="manager-name" placeholder="Manager Name">
			 	<br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Phone/Mobile</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="phone" placeholder="Enter Phone/Mobile">
			 <br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Phone/Mobile</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="mob" placeholder="Enter Phone/Mobile">
			  <br>
			  <br>
			<button type="submit" name="bank"  class="btn btn-primary" >Register</button>
            </div>
			</div>
			</div>
			</div>
			</div>


<?php
 if(isset($_POST['bank'])){
   $req_fields = array('bank-code','a/c','bank-name','a/c-tittle','bank-address','manager-name','phone', 'mob' );
   validate_fields($req_fields);
   if(empty($errors)){
     $b_code  = remove_junk($db->escape($_POST['bank-code']));
     $a_c   = remove_junk($db->escape($_POST['a/c']));
     $b_name   = remove_junk($db->escape($_POST['bank-name']));
     $a_tit   = remove_junk($db->escape($_POST['a/c-tittle']));
     $b_addr  = remove_junk($db->escape($_POST['bank-address']));
     $m_name  = remove_junk($db->escape($_POST['manager-name']));
     $phh  = remove_junk($db->escape($_POST['phone']));
     $mob = remove_junk($db->escape($_POST['mob']));
    
    
     $query  = "INSERT INTO bank_reg (";
     $query .="  Bank_Code ,A_C ,Bank_Name 	,Account_Tittle ,Bank_Address ,Manager_Name ,Phone_Mobile ,Phone_Mob";
     $query .=") VALUES (";
     $query .=" '{$b_code}', '{$a_c}', '{$b_name}', '{$a_tit}', '{$b_addr}', '{$m_name}','{$phh}','{$mob}'";
     $query .=")";
     if($db->query($query)){
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="bank_reg.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="bank_reg.php"';
    echo '</script>';
     }

   
   }

 }

?>
	
