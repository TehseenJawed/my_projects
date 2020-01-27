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



  $page_title = 'Purchase Order';
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspPurchase Order</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="email.php">
          	<div class="table-responsive">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Requisition</th>
		                
		                    <td>
		                    	
		                    <select class="form-control"></select>
						                    </td>
		             	
		             	</tr>
		                <tr>
		             		<th>Supplier</th>
		             	     <td>
		             	     <select class="form-control"></select>
		                     </td>
		             	 </tr>
		             	 <tr>
		                
		             	<th>Expected Delvery Date </th>
		             	<td>
		             		<input type="date" class="form-control" name="email">
		             	</td>
		             </tr>
		             
		             	<th>Note</th>
		                    <td>
		                    	<textarea class="form-control" name="message" cols="8" rows="6"></textarea>
		             	</td>
		             	</tr>
                       <tr>
                       	<th>#</th>
                       	<th>Product Code</th>
                       	<th>Discription</th>
                       	<th>Mass.Type</th>
                       	<th>Unit</th>
                       	<th>Quality-demanded</th>
                       	<th>Quality Order</th>
                       	<th>Rate</th>
                       	<th>Total</th>
                       	<th>Previouse</th>
                       	<th>Remarks</th>
                       </tr>
		            
		             </table>
<input type="submit" style="color: white;" value="Save Purchase Order" name="remind"  class="btn btn-danger form-control">


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
	
