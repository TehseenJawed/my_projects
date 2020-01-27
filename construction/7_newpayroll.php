<?php
  $page_title = 'Define Payroll';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories');

      
  $query="SELECT * from add_employee";

 $result1= $db->query($query);



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
     

            <span>Define Payroll</span>
         </strong>
        </div>
		<div class="panel-body">
     
  <h1>
    Define New Payroll
  </h1>

<form action="7_newpayroll.php" method="post" >

  <pre id="t1">Employee:                         <select name="emp_id" >Select Project
       <?php
       while($row1=mysqli_fetch_array($result1)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>

       </select></pre>

  <pre id="t1">Basic Salary:                     <input type="text" name="basic_salary" placeholder= "Basic Salary"></pre>
  <pre id="t1">House Rent:                       <input type="text" name="house_rent" placeholder= "House Rent"></pre>
  <pre id="t1">Petrol:                           <input type="text" name="petrol" placeholder= "Petrol"></pre>
  <pre id="t1">Medical:                          <input type="text" name="medical" placeholder= "Medical"></pre>
  <pre id="t1">Overtime:                         <input type="text" name="overtime" placeholder= "Overtime"></pre>
  <pre id="t1">Others:                           <input type="text" name="others" placeholder= "Others"></pre>



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
$emp_id=$_POST['emp_id'];
$basic_salary=$_POST['basic_salary'];
$house_rent=$_POST['house_rent'];
$petrol=$_POST['petrol'];
$medical=$_POST['medical'];
$overtime=$_POST['overtime'];
$others=$_POST['others'];




     $query  = "INSERT INTO 7_newpayroll(emp_id, basic_salary, house_rent, petrol, medical, overtime, others) 

     VALUES ('$emp_id', '$basic_salary', '$house_rent', '$petrol', '$medical', '$overtime','$others')";



    
     if($db->query($query)){
      
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="7_newpayroll.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="7_newpayroll.php"';
    echo '</script>';
     }
}


?>
	
