
<?php
include("admin_header.php");
include("config.php");
?>
<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 style="margin-left: 170px; color: #084365;">Events</h1>
    <br>
    <form method="POST" action="events.php">
    <table class="table   table-condensed table-striped  table-hover ">
      <tr>
        <th>Events Name</th>

        <td>
          <input type="text" required="required" class="form-control" name="p_name">
        </td>

      </tr>
      
      <tr>
        <th>Date</th>
        <td>
          <input type="date" class="form-control" required="required" name="datee">
        </td>
        </tr>
      <tr>
<td colspan="2">
  <input type="submit" name="submit" class="btn btn-success form-control">
</td>
      </tr>
 
      
    </table>
</form>
  </div>
  <div class="col-md-3"></div>
</div>
<?php
if(isset($_POST['submit']))
{

   $name=$_POST['p_name'];
 
   $datee=$_POST['datee'];


$sql = "INSERT INTO events (name,datee) VALUES ('$name','$datee')";

if ($con->query($sql) === TRUE) {
        echo '<script>';
        echo 'alert("Successfully Registered");';
        echo '</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;

}

}




?>