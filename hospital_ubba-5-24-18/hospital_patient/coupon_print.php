
<?php
include("admin_header.php");
include("config.php");

if(isset($_GET['id']))
{
  $name=$_GET['id'];
  $sql="SELECT * FROM coupon WHERE coupon_num='$name'";
  $result1 = mysqli_query($con, $sql);
  
  
}

  $index=1;
?>
<script>
  
  window.print();
  
  </script>

<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 style="margin-left: 150px; color:#084365 ;">Patient Report</h1>
    <br>

    <table class="table   table-condensed table-striped  table-hover ">
      <tr>
        <th>SR</th>
        <th>Coupon Num</th>
        <th>Doctor Name</th>
       
        <th><button class="btn btn-info" type="submit" onclick="printt();">Print</button></th>
      </tr>
        <?php
 while ($row=mysqli_fetch_assoc($result1)) {
           ?>
      <tr>
           <td style=""><?php echo $index++;?></td> <td><?php echo $row['coupon_num']?></td>
           <td>Stphen,s Robbinson</td>
           
      </tr>
           <?php
         }
         ?>
    </table>
  </div>
  <div class="col-md-3"></div>
</div>

<script type="text/javascript">
  
 function printt()
  {
    //alert("cq");
    window.print();
  }
</script>