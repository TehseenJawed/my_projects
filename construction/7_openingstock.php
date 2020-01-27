<?php
  $page_title = 'Bank Registration';
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
   <div class="div_1">
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
     

            <span>opening Stock</span>
         </strong>
        </div>
		<div class="panel-body">
     
  <h1>
    Add Opening Balance to inventory Item
  </h1>
<form action="7_openingstock.php" method="post" >
  
  <pre id="t1">Project:                      <input type="text" name="Project" value="1 XYZ heights"></pre>
  <pre id="t1">Location:                     <input type="text" name="Location" value="Warehouse"></pre>
  <pre id="t1">Select item:                  <input type="text" name="Item" placeholder="item ID">  </pre>  
  <pre id="t1">Quantity:                     <input type="text" name="Quantity" ></pre>
  <br><br>

  <input type="submit" name="bank" value="Add User">

</form> 

            </div>
			</div>
			</div>
			</div>
			


<?php
 if(isset($_POST['bank']))
 {

  $proj_id=$_POST['Project'];

  $loc_id=$_POST['Location'];

  $item_id=$_POST['Item'];

  $qty=$_POST['Quantity'];



     $query  = "INSERT INTO 7_openingstock(proj_id, loc_id, item_id, qty) 
     VALUES ('$proj_id', '$loc_id', '$item_id', '$qty')";

     if($db->query($query)){
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="7_openingstock.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="7_openingstock.php"';
    echo '</script>';
     }

   
   }



?>
	
