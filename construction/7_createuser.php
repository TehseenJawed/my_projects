<?php
  $page_title = 'Create USER';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories');

      
  /*$query="SELECT * from 7_addproj";

 $result1= $db->query($query);*/

  $query1="SELECT * from user_groups";

 $result2= $db->query($query1);


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
     

            <span>Create User</span>
         </strong>
        </div>
		<div class="panel-body">
     
  <h1>
    Create USER
  </h1>
<form action="7_createuser.php" method="post" >

   <pre id="t1">Username:                         <input type="text" name="Username" placeholder= "Enter Username" required></pre>
  <pre id="t1">Password:                         <input type="Password" name="Password" placeholder= "Enter Password" required></pre>
  
  <pre id="t1">User Role:                        <select name="role_id" required>Select Project
       <?php
       while($row1=mysqli_fetch_array($result2)):;?>
       <option value=<?php echo $row1[2]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>


       </select></pre>
  
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
$username=$_POST['Username'];
$password= remove_junk($db->escape(sha1($_POST['Password'])));
$pass=$_POST['Password']; 

   
      $role_id=$_POST['role_id'];
       



     $query  = "INSERT INTO 7_newuser(username, password, role_id) 
     VALUES ('$username', '$pass',  '$role_id')";

  $query1="INSERT INTO users(name,username,password,user_level)VALUES('$username', '$username','{$password}', '$role_id')";


    
     if($db->query($query)){
      if ($db->query($query1)) {
      
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="7_createuser.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="7_createuser.php"';
    echo '</script>';
     }

   
   }
}


?>
	
