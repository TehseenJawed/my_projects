
<?php
  $page_title = 'Project  File';
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
   <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspProject Details</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="add_project.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Project Name</th>
		             	     <td><input type="text" id="dest" onblur='mname();' name="itemname" placeholder="Project name" class="form-control" required/></td>
		               
		                    
		             	 
		             		<th>Start Date</th>
		             	    <td><input type="Date" name="st_date"  class="form-control" required/></td>
		             	
 		             	</tr>
		             		<tr>
		             		<th>End Date</th>
		                
		                    <td><input type="date" name="en_date"  class="form-control" required/></td>
		             		<th>Cost</th>
		             	     <td><input type="text" id="cs13" name="cost_price"  class="form-control" required/></td>
		             	</tr>
		             		
		                <tr>
		                	<th>Advance</th>
		             	     <td><input type="text"  id="cs12" onblur='Calculate();' name="ad_price"  class="form-control" required/></td>
		             	     <th>Due</th>
		             	     <td><input type="text" id='ans' name="du_price"  class="form-control" required/></td> 	
		       	     	
		             	 </tr>
		             	 <tr>
		                	<td colspan="4">
		                		<input type="submit" name="button"  class="btn btn-success form-control">
		                	</td>
		                </tr>
		             </table>
	           </form>
			</div>
            </div>
			</div>
			</div>
			</div>
			<script>


function Calculate()
{
  var r = document.getElementById('cs13').value;
  var m = document.getElementById('cs12').value; 
  var p = r-m;
  document.getElementById('ans').value=p;
 /* document.form1.submit();*/
}
function mname()
{
  var cName = document.getElementById('dest').value;
if(cName.match(' ')) {
   alert('OPPs Spaces found! '+cName);
   location.href="add_project.php";
    
}



}
</script>
			
			
		 
<?php

if(isset($_POST['button']))
{
// $product_id=$_POST['product_id'];
                    $name=$_POST['itemname'];
                  
                    $st_date=$_POST['st_date'];
                  
                    $en_date=$_POST['en_date'];
                    $cu=$_POST['cost_price'];
                    $ad=$_POST['ad_price'];
                     $du=$_POST['du_price'];
                   
                   /* $total_amount=($retail_price*($sales_tax/100)*$no_of_pcs)+($retail_price*$no_of_pcs);*/

 
	$query  = "INSERT INTO 7_addproj1(name,start_date, end_date, cost,advance,due) 
     VALUES ('$name','$st_date', '$en_date', '{$cu}','{$ad}','{$du}')";
		
   
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="add_project.php"';
    echo '</script>';
  }
   

 
} 
?>
	

