<?php
  $page_title = 'ADD Projects';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>

  <div class="row">
     
  </div>
   <div class="div_1">
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
     

            <span>ADD Projects</span>
         </strong>
        </div>
        <button style="float: right; height: 50px;">
       <a href="7list_project.php"  btn-danger" >
      Product List </a></button>
		<div class="panel-body">
     
  <h1>
    Add New Project
  </h1>
<form action="7_addproj.php" method="post" >
  <pre id="t1">Name:                         <input type="text" name="Name" placeholder= "Enter title"></pre>
  <pre id="t1">Address:                      <textarea rows="4" cols="50" name="Address" placeholder="Enter Address"></textarea>  </pre>
   <pre id="t1">City:                         <input type="text" name="City" placeholder="Enter City"></pre>
  <pre id="t1">Start Date of Project:        <input type="Date" name="Start" placeholder= "Enter Project Starting Date"></pre>

  <pre id="t1">End Date of Project:          <input type="Date" name="End" placeholder= "Enter Project End Date"></pre>
  <pre id="t1">Shops:                        <input type="text" name="Shops" placeholder= "Enter No of Shops"></pre>
   <pre id="t1">Offices:                      <input type="text" name="Offices" placeholder="Enter No of Offices"></pre>
  <pre id="t1">Flats:                        <input type="text" name="Flats" placeholder= "Enter No of Flats"></pre>

  <pre id="t1">Parking:                      <input type="text" name="Parking" placeholder= "Enter No of Parking"></pre>
  <pre id="t1">View:                         <textarea rows="4" cols="50" name="View" placeholder="Enter View"></textarea>
   <pre id="t1">Penalty Percentage:           <input type="text" name="Penalty" placeholder="Enter Penalty Percentage"></pre>
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

  $name=$_POST['Name'];

  $address=$_POST['Address'];

  $city=$_POST['City'];

  $start_date=$_POST['Start'];
   $end_date=$_POST['End'];
   $shops=$_POST['Shops'];
   $offices=$_POST['Offices'];
   $flats=$_POST['Flats'];
   $parking=$_POST['Parking'];
   $view=$_POST['View'];
   $penalty=$_POST['Penalty'];



     $query  = "INSERT INTO 7_addproj(name, address, city, start_date, end_date, shops, offices, flats, parking, view, penalty_ptg) 
     VALUES ('$name', '$address', '$city', '{$start_date}', '{$end_date}', '{$shops}','{$offices}','{$flats}','{$parking}','$view',
     '{$penalty}')";

     if($db->query($query)){
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="7_addproj.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="7_addproj.php"';
    echo '</script>';
     }

   
   }



?>
	
