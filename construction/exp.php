<?php
  $page_title = 'Expense Entry';
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
        redirect('exp_reg.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('exp_reg.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('exp_reg.php',false);
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
            <span>Expense Entry</span>
         </strong>
        </div>
		<div class="panel-body">
          <form action="exp.php" method="post" >
            <div class="form-group">
			 <strong>
                <text style= 'margin-left:1px';> <span>Expense Code &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Last Code: 01</span></text>
			</strong>
                <input type="text" class="form-control nam" name="exp-code" placeholder="Expense Code">
				<br>
			 <strong>
			 <text style= 'margin-left:1px';> <span>Description</span></text>
			 </strong>
			 <input type="text" class="form-control nam" name="des" placeholder="Enter Description">
			 	<br>
			<button type="submit" name="exp"  class="btn btn-primary" >Register</button>
			 </form>
			</div>
            </div>
			</div>
			</div>
			</div>
			
			
			<?php
 if(isset($_POST['exp'])){
   $req_fields = array('exp-code','des');
   validate_fields($req_fields);
   if(empty($errors)){
     $e_code  = remove_junk($db->escape($_POST['exp-code']));
     $d   = remove_junk($db->escape($_POST['des']));

     $query  = "INSERT INTO expense (";
     $query .=" Expense_Code , Description";
     $query .=") VALUES (";
     $query .=" '{$e_code}', '{$d}'";
     $query .=")";
     if($db->query($query)){
        echo '<script language="javascript">';
    echo 'alert("Successfully Expense Entered"); location.href="exp.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Expense Entery Failed"); location.href="exp.php"';
    echo '</script>';
     }

   
   }

 }

?>