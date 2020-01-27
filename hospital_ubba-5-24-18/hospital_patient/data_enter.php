
<?php
include("admin_header.php");
include("config.php");
?>

<body>
<div class="container">
 
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 style="margin-left: 170px; color: #084365;">Data Entry</h1>
    <br>
    <form method="POST" action="data_enter.php">
    <table class="table   table-condensed table-striped  table-hover ">
      <tr>
        <th>Patient Name</th>

        <td>
          <input type="text" required="required" class="form-control" name="p_name">
        </td>

      </tr>
      <tr>
                        <th>Disease</th>

        <td>
          <input required="required" class="form-control" type="text" name="dis">
        </td>
      </tr>

      <tr>
               <th>Patient Phone</th>
        <td>
          <input type="number" required="required" class="form-control" name="num">
        </td>
        </tr>

      <tr>
          <th>Customer Type</th>
        <td>
          <select name="c_type" required="required" class="form-control">
            <option>Select customer type</option>
            <option>New</option>
            <option>Old</option>
            <option>Classified</option>
          </select>
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
   $dis=$_POST['dis'];
   $p_num=$_POST['num'];
   $c_type=$_POST['c_type'];
   $datee=$_POST['datee'];


$sql = "INSERT INTO p_data_entry (name,disease,p_num,c_type,datee) VALUES ('$name','$dis','$p_num','$c_type','$datee')";

if ($con->query($sql) === TRUE) {
        echo '<script>';
        echo 'alert("Successfully Registered");';
        echo '</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;

}

}




?>