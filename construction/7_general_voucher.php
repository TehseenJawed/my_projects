<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
<?php
 include('config.php');  

$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);


$vc= $_GET["vc_id"];

if (isset($_GET['vc_id'])) {
    $query="SELECT * from new_customer_reg WHERE cnic=$vc";
  
    $resultt=mysqli_query($connect,$query);   
}



  $page_title = 'General Voucher';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
        $queryy="SELECT * from new_customer_reg";

    $result11= $db->query($queryy);

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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspGeneral Voucher</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="email.php">
          	<div class="table-responsive">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Date</th>
		                
		                    <td>
		                    	<input type="Date" name="">
		                    
		                                    </td>
		             	
		             	</tr>
		             	<tr>
		             		<th>GRN</th>
		                
		                    <td>
		                    	<select class="form-control">
		                    		Select GRN
		                    	</select>		                    
		                                    </td>
		             	
		             	</tr>
		             	<tr>
		             		<th>Date</th>
		                
		                    <td>
		                    <select>Select Supplier</select>		                    
		                                    </td>
		             	
		             	</tr>
		       

		                <tr>
		             		<th>ACC</th>
		             		<th>Name</th>
		             	    <th>Narration</th>
		             	    <th>Debit</th>
		             	    <th>Credit</th>
		             	     	             	
		             	 </tr>
		             	 <tr>
		             <?php
for ($i=1; $i <4 ; $i++) { 
	# code...

		             ?>   
		
		             	<td>
		             		<?php echo $i?>
		             	</td>
		             	<td>
		             		<select></select>
		             	</td>
		             	<td>
		             		<input type="text" disabled name="">
		             	</td>
		             	<td>
		             		<input type="text" disabled name="">
		             	</td>
		             	<td>
		             		<input type="text"  name="">
		             	</td>
		             	<td>
		             		<input type="text" name="">
		             	</td>
		             	
		             </tr>
	<?php
}
?>
		             </table>


	           </form>
			</div>
            </div>
			</div>
			</div>
			</div>
			
		 
<?php

if(isset($_POST['send']))
{
// $product_id=$_POST['product_id'];
                 $email=$_POST['email'];
                 $name=$_POST['c_name'];
                 $sub=$_POST['sub'];
                  $message=$_POST['message'];
                 $cnic=$_POST['cnic'];
                 $date=date('y-m-d');

 
	
		
    $query="INSERT INTO email(email,c_name,cnic,subject,message,created_on)VALUES('$email','$name','$cnic','$sub','$message','$date')";
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="email.php"';
    echo '</script>';
  }
   

 
}
if(isset($_POST['remind']))
{
// $p   $email=$_POST['email'];
                 $name=$_POST['c_name'];
                 $sub=$_POST['sub'];
                  $message=$_POST['message'];
                 $cnic=$_POST['cnic'];
                 $date=date('y-m-d');

 
	
	
    $query="INSERT INTO reminder(email,c_name,cnic,subject,message,created_on)VALUES('$email','$name','$cnic','$sub','$message','$date')";
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="email.php"';
    echo '</script>';
  }
   

 
} 
?>
<script type="text/javascript">
	

$(document).ready(function() {

$('#voucher_cat').change(function(){
   //$('#select_2').show();
  
var myName=$('#voucher_cat').val();
window.location.href="email.php?vc_id="+myName;


});
});



</script>
	
