<?php
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(6);
  
    $query="SELECT * from 7_addproj";

    $result= $db->query($query);

?>


<?php include_once('layouts/header.php'); ?>
<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #41b9dc;
    box-shadow: 10px 10px 5px #8080805c;

</style>

<div class="col-md-11">
	<div class="qq">

      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>ADD flat/shop/office</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form method="POST" action="add_flat_shop.php">
	<pre id="t1">Project :                     <select name="projects" required> 
		<option value="">Select Name here</option>
        	    	  <?php while($row=mysqli_fetch_array($result))
 { ?>
 	<option value="<?php echo $row[1]?>">
 		<?php echo $row[1]?>
 	</option>
 	<?php 
 }
 	?>
	</select></pre>
	<pre id="t1">Number:                          <input type="Number" name="Number" min="0" max="10" placeholder= "01,02"> </pre>
  <pre id="t1">Dimensions:                     <input type="text" name="Dimensions" placeholder= "30"> </pre>
  <pre id="t1">Area:                           <input type="text" name="Area" placeholder= "2500"></pre>
   <pre id="t1">Price:                          <input type="text" name="Price" placeholder= "50000000"></pre>
  <pre id="t1">Possesion Charges:              <input type="text" name="Possesion" placeholder= "100000000"></pre>
   <pre id="t1">Parking Include:                <input type="text" name="Parking" placeholder=""></pre>
  <pre id="t1">Block:                          <input type="text" name="Block" placeholder= "A,B"></pre>
  <pre id="t1">Category:                       <select name="Category"> <option value="Category">Enter Category</option></select></pre>
    <pre id="t1">Address:                        <textarea rows="4" cols="50" name="Featues" placeholder="Enter Featues"></textarea>  </pre>
  <br><br>
  <input type="submit" name="submit" value="Add User">
</form> 

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
          
     
     
     $query  = "INSERT INTO add_flat_shop(project, numbers,dimensions,area
     ,price,possesion_charges,parking_include,block,category,address) VALUES ('$project', '$number', '$Dimensions', '$Area','$price','$Possesion','$Parking','$block','$Category','$Featues')";
     
	 
  include('config.php');

  if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="add_flat_shop.php"';
    echo '</script>';
  }
   
}



?>
	

