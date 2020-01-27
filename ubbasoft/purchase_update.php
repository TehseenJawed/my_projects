<script src="assets/js/jquery.min.js">
   

</script>

<?php
  $page_title = 'Product File Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(7);
  $id=$_GET['id'];
  $name=$_GET['tp'];

  
  $all_categories = find_all('categories');

?>


<?php include_once('layouts/header.php'); ?>

<?php

// $query1="SELECT distinct item_name from item_formula";

$query1="SELECT * from newitem_reg ";
$result1=$db->query($query1);

?>
<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #41b9dc;
    box-shadow: 10px 10px 5px #8080805c;

</style>


  <div class="row">
     <div class="col-md-12">
      <!-- <?php echo display_msg($msg); ?>-->
     </div>
  <div class="col-md-11">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Productions File</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="purchase_update.php" method="POST" >
            <div class="form-group">

              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">

<tr>
  <th>Product Name</th>
  <td><?php echo '<h5>'.$name.'</h5>';?>
<input type="hidden" name="id" value="<?php echo $id?>">
  </td>
</tr>
<tr>
                    <th> Quantity</th>       
                    <td><input type="text" class="form-control nam" name="Quantity" id="est_packs_qty" placeholder="Quantity" required/>
                    </td>

                    <th>Price</th>
                    <td>
                      <input type="text" class="form-control nam" name="price" placeholder="Price" required/>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="4">
                      <button type="submit" name="customer1"  class="btn btn-primary form-control">Register</button>
                    </td>
                  </tr>
      </div>
            </div>
      </div>
      </div>
      </div>

      <?php
 if(isset($_POST['customer1']))
 {
  
$id = $_POST['id'];
$Quantity = $_POST['Quantity'];
$price = $_POST['price'];




  $q3="UPDATE purchase_trans_detail SET qty=qty+$Quantity,price=price+$price,total=price*$Quantity WHERE product_id='$id'";
    
  //$c=mysqli_num_rows($res4);
     if($db->query($q3))
     {
        echo '<script language="javascript">';
        echo 'alert("Successfully updated"); location.href="purchase_trans.php"';
        echo '</script>';
     } 
     else
     {
      echo "error";

     }
}