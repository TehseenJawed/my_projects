
<style>
@page { size: auto;  margin: 0mm; }
@media print
{
  #printbtn { display: none; }
}
</style>
<?php
include("admin_header.php");
include("config.php");

if(isset($_GET['name']))
{
  $name=$_GET['name'];
  $sql="SELECT * FROM p_data_entry WHERE name='$name'";
  $result1 = mysqli_query($con, $sql);
  
  
}

if(isset($_GET['c_type']))
{
  $c_type=$_GET['c_type'];
  $sql="SELECT * FROM p_data_entry where c_type ='$c_type'";
  $result1 = mysqli_query($con, $sql);
}


if(isset($_GET['dis']))
{

  $dis=$_GET['dis'];
  $sql="SELECT * FROM p_data_entry where disease ='$dis'";
  $result1 = mysqli_query($con, $sql);
}


if(isset($_GET['p_num']))
{
  $p_num=$_GET['p_num'];
  $sql="SELECT * FROM p_data_entry where p_num ='$p_num'";
  $result1 = mysqli_query($con, $sql);
}



if(isset($_GET['f_date'])&& isset($_GET['to_date']))
{
  $f=$_GET['f_date'];
  $to=$_GET['to_date'];
  $sql="SELECT * FROM p_data_entry where datee BETWEEN '$f' ANd '$to'";
  $result1 = mysqli_query($con, $sql);
}


  $tomorrow = date("Y-m-d", strtotime('tomorrow'));
  
  $tomorro = date("Y-m-d", strtotime("+2 day"));
  //echo '<br>'.$tomorro;
  
  
  $index=1;
?>

<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 style="margin-left: 150px; color:#084365 ;">Patient Report</h1>
    <br>

    <table class="table   table-condensed table-striped  table-hover ">
      <tr>
        <th>SR</th>
        <th>Patient Name</th>
        <th>Disease</th>
        <th>Phone</th>
        <th>Client type</th>
        <th>Date</th>
        <th><button id="printbtn" class="btn btn-info" type="submit" onclick="printt();">Print</button></th>
      </tr>
        <?php
 while ($row=mysqli_fetch_assoc($result1)) {
           ?>
      <tr>
           <td><?php echo $index++;?></td>
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