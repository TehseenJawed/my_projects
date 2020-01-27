<?php
  $id=$_GET['id'];
 
  $page_title = 'Customer Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
   /* $query="SELECT * from categories";

    $result1= $db->query($query);*/
    $query="SELECT * from add_employee WHERE emp_id='$id'";

    $result= $db->query($query);

?>
<?php
  $page_title = 'Product Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(7);
  
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
          <form method="POST" action="emp_edit.php">
          	 <input type="hidden" name="getid" value="<?php echo $id?>">
		     <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>
			 <th>Name</th>
			 <td>

			 <input type="text" class="form-control nam" name="name" placeholder="Enter  name" value="<?php echo $row[1]?>" required/>
			 	</td>
			 <th>Designation</th>
			 <td>
			 <input type="text" value="<?php echo $row[3]?>" class="form-control nam" name="designation" placeholder="Enter designation" required/>
			 
			 </td>
      </tr>
      <tr>
			 <th>Contact no.</th>
			 <td>
			 <input type="text" class="form-control nam" value="<?php echo $row[5]?>" name="cell" placeholder="Enter Contact no." required/>
			 </td>  
      <th>CNIC</th>      
       <td>
       <input type="text" value="<?php echo $row[6]?>" class="form-control nam" name="cnic" placeholder="Enter CNIC No." required/>
      </td>
    </tr>
    <tr>
       <th>Salary</th>
       <td>
       <input type="text" class="form-control nam" name="salary" placeholder="Enter Salary" value="<?php echo $row[7]?>" required/>
       </td>
       <th>Date of Joining</th>
       <td>
       <input type="text" class="form-control nam" value="<?php echo $row[8]?>" name="join_date" placeholder="" required/>
     </td>
   </tr>
   <tr>
    <th>city</th>
       <td>
       <input type="text" value="<?php echo $row[4]?>" class="form-control nam" name="city" placeholder="Enter city" required/>
     </td>
      <th>Department id</th>
       <td>
       <input type="text" value="<?php echo $row[2]?>" class="form-control nam" name="dept_id" placeholder="Enter city" required/>
     </td>
    <td colspan="3">
       <button type="submit" name="comp"  class="btn btn-primary form-control"  style="height: 45px">Register</button>
     </td>
			</div>
	</table>
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


			if(isset($_POST['comp'])){

$name = $_POST['name'];

$city=$_POST['city'];

$cell=$_POST['cell'];

$cnic=$_POST['cnic'];

$salary=$_POST['salary'];

$join_date=$_POST['join_date'];
$designation=$_POST['designation'];
$dept_id=$_POST['dept_id'];
    
    
     $id   = $_POST['getid'];
         


   $query="UPDATE add_employee SET name='$name' ,dept_id='$dept_id' , city='$city',cell='$cnic',salary='$salary',join_date='$join_date' WHERE emp_id='$id'";	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="checkemployee.php"';
    echo '</script>';
  }
   

 
} 
?>
	
