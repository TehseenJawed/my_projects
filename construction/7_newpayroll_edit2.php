<?php
  $id=$_GET['id'];
 
  $page_title = 'Payroll Edit';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
   /* $query="SELECT * from categories";

    $result1= $db->query($query);*/
    $query="SELECT * from 7_newpayroll WHERE payroll_id='$id'";

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
          

<form action="7_newpayroll_edit.php" method="POST" >
     <input type="hidden" name="getid" value="<?php echo $id?>">

  <pre id="t1">Employee:                         <input type="text" value="<?php echo $row[1]?>" name="emp_id" >
       </pre>

  <pre id="t1">Basic Salary:                     <input type="text" name="basic_salary" placeholder= "Basic Salary" value="<?php echo $row[2]?>"></pre>
  <pre id="t1">House Rent:                       <input type="text" value="<?php echo $row[3]?>" name="house_rent" placeholder= "House Rent"></pre>
  <pre id="t1">Petrol:                           <input type="text" name="petrol" placeholder= "Petrol" value="<?php echo $row[4]?>"></pre>
  <pre id="t1">Medical:                          <input type="text" value="<?php echo $row[5]?>" name="medical" placeholder= "Medical"></pre>
  <pre id="t1">Overtime:                         <input type="text" name="overtime" value="<?php echo $row[6]?>" placeholder= "Overtime"></pre>
  <pre id="t1">Others:                           <input type="text" name="others" placeholder= "Others" value="<?php echo $row[7]?>"></pre>



  <br><br>
  <input type="submit" name="bank" value="Add User">

</form> 

            </div>
      </div>
      </div>
      </div>
      
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
$emp_id=$_POST['emp_id'];
$basic_salary=$_POST['basic_salary'];
$house_rent=$_POST['house_rent'];
$petrol=$_POST['petrol'];
$medical=$_POST['medical'];
$overtime=$_POST['overtime'];
$others=$_POST['others'];
    $id   = $_POST['getid'];
     

     /*$query  = "INSERT INTO 7_newpayroll(emp_id, basic_salary, house_rent, petrol, medical, overtime, others) 

     VALUES ('$emp_id', '$basic_salary', '$house_rent', '$petrol', '$medical', '$overtime','$others')";
     */


   $query="UPDATE 7_newpayroll SET emp_id='$emp_id' , basic_salary='$basic_salary',house_rent='$house_rent',petrol='$petrol',medical='$medical',overtime='$overtime',others='$others'WHERE payroll_id='$id'"; 
  
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="a[rrove_7_newpayroll.php"';
    echo '</script>';
  }
   

 
} 
?>
  
