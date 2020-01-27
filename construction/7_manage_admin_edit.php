<?php
  $id=$_GET['id'];
 
  $page_title = 'Payroll Edit';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
   /* $query="SELECT * from categories";

    $result1= $db->query($query);*/
    $query="SELECT * from users WHERE id='$id'";

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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspEdit User</h1>
         </strong>
        </div>
    <div class="panel-body">
          <div class="form-group">
              <?php while($row=mysqli_fetch_array($result))
 { ?>
          

<form action="7_manage_admin_edit.php" method="POST" >
     <input type="hidden" name="getid" value="<?php echo $id?>">

    <input type="hidden" value="<?php echo $row[1]?>" name="name">

  <pre id="t1">User Name:                     <input type="text" name="user_name" placeholder= "user_name" value="<?php echo $row[2]?>"></pre>
<pre id="t1">New Password:        <input type="password"   id="pass1" >
       </pre>
       
     <pre id="t1">Confirm Password:        <input type="password"  name="pass"  id="pass2" onkeyup="checkPass(); return false;" required></pre>
            <span id="confirmMessage" class="confirmMessage"></span>

  <br><br>
  <input type="submit" name="bank" value="Update">

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
      <script>
          function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
          
      </script>
       



      <?php


 if(isset($_POST['bank']))
 {
$name=$_POST['name'];
$user_name=$_POST['user_name'];
$pass=sha1($_POST['pass']);

//echo $user_name;

    $id   = $_POST['getid'];
     



   $query="UPDATE users SET name='$name' ,password='$pass' , username='$user_name' WHERE id='$id'"; 
  
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="all_7_manage_admin.php"';
    echo '</script>';
  }
   

 
} 
?>
  
