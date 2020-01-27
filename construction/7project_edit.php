<?php
  $id=$_GET['id'];
 
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
   /* $query="SELECT * from categories";

    $result1= $db->query($query);*/
    $query="SELECT * from 7_addproj1 WHERE id='$id'";

    $result= $db->query($query);

?>
<?php
  $page_title = 'Product EDit';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  $user = current_user(); 
  $aa=$user['user_level'];

  if ($aa==8) {
    
  page_require_level(8);
  }
  else 
  {
  page_require_level(5);
  }
  
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspProducts Edit</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
    	    	  <?php while($row=mysqli_fetch_array($result))
 { ?>
          <form method="POST" action="7project_edit.php">
          	<input type="hidden" name="getid" value="<?php echo $id?>">
		               <pre id="t1">Name:                         <input type="text" name="Name" value="<?php echo $row[1]?>" placeholder= "Enter title"></pre>
  
   
  <pre id="t1">Start Date of Project:        <input type="text" name="Start" placeholder= "Enter Project Starting Date" value="<?php echo $row[2]?>"></pre>

  <pre id="t1">End Date of Project:          <input type="text" name="End" placeholder= "Enter Project End Date" value="<?php echo $row[3]?>"></pre>
  <pre id="t1">Cost:                        <input type="text" name="cost" placeholder= "Enter No of Shops" value="<?php echo $row[4]?>"></pre>
   <pre id="t1">Advance:                      <input type="text" name="adv" placeholder="Enter No of Offices" value="<?php echo $row[5]?>"></pre>
  <pre id="t1">Due:                        <input type="text" name="due" placeholder= "Enter No of Flats" value="<?php echo $row[6]?>"></pre>
  <br><br>
  
  <input type="submit" name="bank" class="btn btn-success form-control" value="UPDATE">
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

 
 if(isset($_POST['bank']))
 {

  $name=$_POST['Name'];

 
  $start_date=$_POST['Start'];
   $end_date=$_POST['End'];
   $cost=$_POST['cost'];
   $advance=$_POST['adv'];
   $due=$_POST['due'];
     
   $id   = $_POST['getid'];  
     

 /*$query  = "INSERT INTO 7_addproj(name, address, city, start_date, end_date, shops, offices, flats, parking, view, penalty_ptg) 
     VALUES ('$name', '$address', '$city', '{$start_date}', '{$end_date}', '{$shops}','{$offices}','{$flats}','{$parking}','$view',
     '{$penalty}')";
*/


   $query="UPDATE 7_addproj1 SET name='$name' ,start_date='$start_date',end_date='$end_date',cost='$cost',advance='$advance', due='$due' WHERE id='$id'";	
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="7list_project.php"';
    echo '</script>';
  }
   

 
} 
?>
	
