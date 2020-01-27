
<?php
include("admin_header.php");
include("config.php");

  $tomorrow = date("Y-m-d", strtotime('tomorrow'));
  
  $tomorro = date("Y-m-d", strtotime("+2 day"));
  //echo '<br>'.$tomorro;
  
  $sql="SELECT Distinct events FROM p_events ";
  $result1 = mysqli_query($con, $sql);
  
  $index=1;
?>

<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 style="margin-left: 170px; color:#084365 ;">Upcoming Events</h1>
    <br>
    <select id="events" class="form-control" required="required">
      <option value="">Select here for searching by Events</option>
      <?php
 while ($row=mysqli_fetch_assoc($result1)) {
           ?>

      ?>

      <option value="<?php echo $row['events']; ?>"><?php echo $row['events']; ?></option>
      <?php
}
      ?>
    </select>
    </table>
      
 

    
  </div>
  <div class="col-md-3"></div>
</div>

<script type="text/javascript">
 


     $( document ).on( 'change', '#events', function () {
var prepMin= $("#events option:selected").val();
 window.location.href='event_report_detail.php?events='+prepMin;
});
</script>