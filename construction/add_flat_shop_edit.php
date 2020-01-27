<?php
  $id=$_GET['id'];
 
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
   /* $query="SELECT * from categories";

    $result1= $db->query($query);*/
    $query="SELECT * from add_flat_shop WHERE id='$id'";

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
          <form method="POST" action="add_flat_shop_edit.php">
          	 <input type="hidden" name="getid" value="<?php echo $id?>">
		             <pre id="t1">Project :                     <input type="text" name="projects" value="<?php echo $row[1]?>"></pre>
	<pre id="t1">Number:                          <input type="Number" name="Number" min="0" max="10" value="<?php echo $row[2]?>"> </pre>
  <pre id="t1">Dimensions:                     <input type="text" name="Dimensions" value="<?php echo $row[3]?>"> </pre>
  <pre id="t1">Area:                           <input type="text" name="Area" value="<?php echo $row[4]?>"></pre>
   <pre id="t1">Price:                          <input type="text" name="Price" value="<?php echo $row[5]?>"></pre>
  <pre id="t1">Possesion Charges:              <input type="text" name="Possesion" value="<?php echo $row[6]?>"></pre>
   <pre id="t1">Parking Include:                <input type="text" name="Parking" value="<?php echo $row[7]?>"></pre>
  <pre id="t1">Block:                          <input type="text" name="Block" value="<?php echo $row[8]?>"></pre>
  <pre id="t1">Category:                       <input type="text" name="Category" value="<?php echo $row[9]?>"></pre>
    <pre id="t1">Address:                        <textarea rows="4" cols="50" name="Featues" >
    	<?php echo $row[1]?>
    </textarea>  </pre>
  <br><br>
  <input type="submit" name="submit" value="Add User">
</form> 

			</div>

            </div>
			</div>

			</div>
			</div>
			</div>
			
			 


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

  if(isset($_POST['submit']))
 {
   
     $project   = $_POST['projects'];
     $number   = $_POST['Number'];
     $Dimensions   = $_POST['Dimensions'];  
     $Area  = $_POST['Area'];
     $Price     = $_POST['Price'];
     $Possesion      = $_POST['Possesion'];
     $Parking   = $_POST['Parking'];
     $block   = $_POST['Block'];
     $Category  = $_POST['Category'];
     $Featues = $_POST['Featues'];
          
     
    
    $id   = $_POST['getid'];
     
     


   $query="UPDATE add_flat_shop SET project='$project' , numbers='$number',dimensions='$Dimensions',area='$Area',price='$price',possesion_charges='$Possesion',parking_include='$Parking',block='$block',category='$Category',address='$Featues' WHERE id='$id'";	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="manage_add_flat_shop.php"';
    echo '</script>';
  }
   

 
} 
?>
	
