
<?php
include("admin_header.php");
include("config.php");

  $tomorrow = date("Y-m-d", strtotime('tomorrow'));
  
  $tomorro = date("Y-m-d", strtotime("+2 day"));
  //echo '<br>'.$tomorro;
  date_default_timezone_set("Asia/Karachi");
  $sql="SELECT * FROM coupon";
  $result1 = mysqli_query($con, $sql);
  $index=1;
  

?>

<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 style="margin-left: 170px; color:#084365 ;">Upcoming Events</h1>
    <br>
    <form method="POST" action="coupon.php">
    <table class="table   table-condensed table-striped  table-hover ">
      <tr>
        <th>Coupon</th>

        <td>
          <input type="number" required="required" class="form-control" name="coupon">
        </td>

      </tr>
      <tr>
        <td>
          <input type="submit" name="submit" class=" btn btn-success form-control">
        </td>

</table>
</form>

        <table class="table   table-condensed table-striped  table-hover ">
      <tr>
        <th>SR</th>
        <th>Coupon Number</th>
       <th>Date/time</th>
     <th>
<form method="POST" action="coupon.php">
      <input type="submit" name="delete_sub" class="btn btn-danger form-control" value="Delete Coupons">
    </form>
      </tr>
 <?php
while ($d=mysqli_fetch_assoc($result1)) {
  ?>

      <tr>
           <td><?php echo $index++;?></td>
           <td>#000<?php echo $d['coupon_num']?></td>
          <td><?php echo $d['date_time']?></td> 
          <td><a class="btn btn-info" href="coupon_print.php?id=<?php echo $d['coupon_num']?>">Print</a></td>            
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
   $events=$_POST['coupon'];
   $datee=date('y-m-d/h:s:m');
 


$sql = "INSERT INTO coupon (coupon_num,date_time) VALUES ('$events','$datee')";

if ($con->query($sql) === TRUE) {
        echo '<script>';
        echo 'alert("Successfully Registered");';
        echo 'window.location.href ="coupon.php";';
        echo '</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;

}

}

if (isset($_POST['delete_sub'])) {
  

$sql = "delete from coupon";

if ($con->query($sql) === TRUE) {
        echo '<script>';
        echo 'alert("Successfully Deleted..");';
         echo 'window.location.href ="coupon.php";';
        echo '</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;

}


}


?>