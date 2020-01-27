
<?php
include("admin_header.php");
include("config.php");

  $tomorrow = date("Y-m-d", strtotime('tomorrow'));
  
  $tomorro = date("Y-m-d", strtotime("+2 day"));
  //echo '<br>'.$tomorro;
  
  $sql="SELECT * FROM p_data_entry ";
  $result1 = mysqli_query($con, $sql);
  $result2 = mysqli_query($con, $sql);
  $result3 = mysqli_query($con, $sql);
  $index=1;
?>

<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 style="margin-left: 170px; color:#084365 ;">Upcoming Events</h1>
    <br>
    <select id="combo" class="form-control" required="required">
      <option value="">Select here for searching by Name</option>
      <?php
 while ($row=mysqli_fetch_assoc($result1)) {
           ?>

      ?>

      <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
      <?php
}
      ?>
    </select>
    <br>
     
    <select id="p_num" class="form-control" required="required">
      <option value="">Select here for searching by Phone number</option>
      <?php
 while ($row=mysqli_fetch_assoc($result2)) {
           ?>

      ?>

      <option value="<?php echo $row['p_num']; ?>"><?php echo $row['p_num']; ?></option>
      <?php
}
      ?>
    </select>
    <br>
    <select id="dis" class="form-control" required="required">
      <option value="">Select here for searching by Disease</option>
      <?php
 while ($row=mysqli_fetch_assoc($result3)) {
           ?>

      ?>

      <option value="<?php echo $row['disease']; ?>"><?php echo $row['disease']; ?></option>
      <?php
}
      ?>
    </select>


     
    <select id="c_type" class="form-control" required="required">
      <option value="">Select here for searching by Customer Type</option>
    

      <option value="New">New</option>
      <option value="New">Old</option>
      <option value="New">Classified</option>

    </select>
    <br>
    <table class="table table-responsvie">
      <tr>
        <th>From Date</th>
        <td><input type="date" id="f_date" class="form-control">
        </td>
        <th>To Date</th>
        <td>
          <input class="form-control" type="date" id="to_date">
        </td>
      </tr>
      <tr>
        <td colspan="2">
        </td>
        <td colspan="2">
          <input type="submit" class=" btn btn-success form-control" name="submit" onclick="dd()">
        </td>
    </table>
      
    </table>

    
  </div>
  <div class="col-md-3"></div>
</div>

<script type="text/javascript">
  
function dd()
{
  var f_date=$('#f_date').val();
  var to_date=$('#to_date').val();
  window.location.href='p_report_detail.php?f_date='+f_date+'&&to_date='+to_date;

}




  $( document ).on( 'change', '#combo', function () {
var prepMin= $("#combo option:selected").val();
 window.location.href='p_report_detail.php?name='+prepMin;
});
  $( document ).on( 'change', '#p_num', function () {
var prepMin= $("#p_num option:selected").val();
 window.location.href='p_report_detail.php?p_num='+prepMin;
});
  $( document ).on( 'change', '#c_type', function () {
var prepMin= $("#c_type option:selected").val();
 window.location.href='p_report_detail.php?c_type='+prepMin;
});
   $( document ).on( 'change', '#dis', function () {
var prepMin= $("#dis option:selected").val();
 window.location.href='p_report_detail.php?dis='+prepMin;
});
</script>