
<?php
include("admin_header.php");
include("config.php");

  $tomorrow = date("Y-m-d", strtotime('tomorrow'));
  
  $tomorro = date("Y-m-d", strtotime("+2 day"));
  //echo '<br>'.$tomorro;
  
  $sql="SELECT * FROM p_events where datee ='$tomorrow'";
  $result1 = mysqli_query($con, $sql);
  $index=1;
?>

<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 style="margin-left: 170px; color:#084365 ;">Upcoming Events</h1>
    <br>
    <form method="POST" action="P_events.php">
    <table class="table   table-condensed table-striped  table-hover ">
      <tr>
        <th>SR</th>
        <th>Events Name</th>
        <th>Patient Name</th>
        <th>Disease</th>
        <th>Phone</th>
        <th>Client type</th>
        <th>Date</th>
      </tr>
        <?php
 while ($row=mysqli_fetch_assoc($result1)) {
           ?>
      <tr>
           <td><?php echo $index++;?></td>
           <td><?php echo $row['events']?></td>
           <td><?php echo $row['name']?></td>
           <td><?php echo $row['disease']?></td>
           <td><?php echo $row['p_num']?></td>
           <td><?php echo $row['c_type']?></td>
           <td><?php echo $row['datee']?></td>
      </tr>
           <?php
         }
         ?>
    </table>
</form>
  </div>
  <div class="col-md-3"></div>
</div>
<?php
if(isset($_POST['submit']))
{
   $events=$_POST['events'];
   $name=$_POST['p_name'];
   $dis=$_POST['dis'];
   $p_num=$_POST['num'];
   $c_type=$_POST['c_type'];
   $datee=$_POST['datee'];


$sql = "INSERT INTO p_events (events,name,disease,p_num,c_type,datee) VALUES ('$events','$name','$dis','$p_num','$c_type','$datee')";

if ($con->query($sql) === TRUE) {
        echo '<script>';
        echo 'alert("Successfully Registered");';
        echo '</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;

}

}




?>