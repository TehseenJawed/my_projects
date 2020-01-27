<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
<?php
  require_once('includes/load.php');
 include('config.php');  


$vc= $_GET["vc_id"];

if (isset($_GET['vc_id'])) {

    $query="SELECT * from new_customer_reg WHERE cnic='$vc'";
  $ww=$db->query($query);
    $resultt=$ww->fetch_array(MYSQLI_NUM);   
  
}



  $page_title = 'Email';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
        $queryy="SELECT * from new_customer_reg";

    $result11= $db->query($queryy);

?>
<?php
  $page_title = 'Email';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspEmail</h1>
         </strong>
        </div>
    <div class="panel-body">
    	    <div class="form-group">
          <form method="POST" action="email.php">
		             <table class="table   table-condensed table-striped  table-hover table-bordered">
		             	<tr>
		             		<th>Client Cnic</th>
		                
		                    <td>
		                    	
		                     <select name="cnic" id="voucher_cat" class="form-control nam" required="required">
				          <option value="<?php echo (@$vc=='')?'':@$vc; ?>"><?php echo (!isset($_GET['vc_id']))?'Select Customer cnic':$vc?></option>

				       <?php

				       while($row1=mysqli_fetch_array($result11)):;?>

				       <option value="<?php echo @$row1[5]?>">
				       <?php echo @$row1[5];  
				       ?> </option>

				     <?php endwhile;?>
				       </select>
						                    </td>
		             	
		             	</tr>
		                <tr>
		             		<th>Client</th>
		             	     <td>
		         	     
		      <input type="text" class="form-control" name="c_name" value="<?php echo @$resultt[1]?>" >
							       

					
		             	     </td>
		             	 </tr>
		             	 <tr>
		                
		             	<th>Email </th>
		             	<td>
		             		<input type="email" class="form-control" name="email1" required/>
		             	</td>
		             </tr>
		             <tr>
		             	<th>Subject</th>
		                    <td>
		                    	<input type="text" name="sub" class="form-control" required/>
		                    </td>
		                </tr>
		                <tr>
		             	<th>Message</th>
		                    <td>
		                    	<textarea class="form-control" name="comments" cols="4" rows="4" required/></textarea>
		             	</td>
		             	
		             	</tr>

		            
		             </table>
<input type="submit" style="color: white;" value="Remind" name="remind"  class="btn btn-danger form-control">
<br>
<br>
<input type="submit" style="color: white;" name="email" value="SEND"  class="btn btn-success form-control"><span class="glyphicon glyphicon-open">


	           </form>
			</div>
            </div>
			</div>
			</div>
			</div>
			
		 
<?php

/*if(isset($_POST['send']))
{

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
   

 
}*/
if(isset($_POST['remind']))
{
// $p   $email=$_POST['email'];
                     $email=$_POST['email1'];
    $name=$_POST['c_name'];
                 $sub=$_POST['sub'];
                  $message=$_POST['comments'];
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



<!--SEnding emailss-->
<?php

if(isset($_POST['email'])) {
    $email=$_POST['email1'];
    $name=$_POST['c_name'];
                 $sub=$_POST['sub'];
                  $message=$_POST['comments'];
                 $cnic=$_POST['cnic'];
                 $date=date('y-m-d');

 
 $to      = $email;
$subject = $sub;
$message = $message;
$headers = 'From: abdulmalikmajidawan@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
  
  
  
  
  
  

  /*****************************************/
    
 
	
		
    $query="INSERT INTO email(email,c_name,cnic,subject,message,created_on)VALUES('$email','$name','$cnic','$sub','$message','$date')";
	
	
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Send"); location.href="email.php"';
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
	
