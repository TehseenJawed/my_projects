<?php
  $page_title = 'Sales Man';
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
        redirect('sales_man.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('sales_man.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('sales_man.php',false);
   }
 }
?>
<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #41b9dc;
    box-shadow: 10px 10px 5px #8080805c;

</style>
<?php include_once('layouts/header.php'); ?>


  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
    <div class="col-md-7">
      <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Sales Man</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="sales_man.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>    
			<!-- <th>Booker Code</th>
       <td>
       <input type="text" class="form-control nam" name="booker_code" placeholder="Enter Booker Code" required/>
        </td>
       </tr>-->
       <tr>
			   <th>Booker Name</th>
			 <td>
			 <input type="text" class="form-control nam" name="booker_name" placeholder="Enter Booker Name" required/>
			 
			 </td>

      </tr>
      <tr>
         <th>Address</th>
       <td>
       <input type="text" class="form-control nam" name="address" placeholder="Enter Address" required/>
       
       </td>

      </tr>
      <tr>
			 <th>Phone Number</th>
			 <td>
			 <input type="number" class="form-control nam" name="p_no" placeholder="Enter Phone Number" required/>
			 	</td>
				</tr>
        <tr>
				<th>Mobile Number</th>
			 <td>
			 <input type="number" class="form-control nam" name="mob_num" placeholder="Enter Mobile Number" required/>
			 	</td>
       </tr>
       <tr>
			  <td colspan="4">
			 <button type="submit" name="salesman"  class="btn btn-primary form-control" >Register</button>
       </td>
       </tr>
			</div>
            </div>
			</div>
			</div>
			</div>
			
			

			
<?php
 if(isset($_POST['salesman'])){


     //$booker_code   = $_POST['booker_code'];
     $booker_name   = $_POST['booker_name'];
     $address   = $_POST['address'];
     $p_no  = $_POST['p_no'];
     $mob_num  = $_POST['mob_num'];
    
   
    

      $query="INSERT INTO new_salesman(booker_name, address, p_no, mob_num)VALUES('$booker_name', '$address', '$p_no', '$mob_num')";
    


  include('config.php');
  if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="sales_man.php"';
    echo '</script>';
  }
   
}

?>
