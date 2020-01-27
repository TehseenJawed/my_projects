<?php
  $page_title = 'Product File Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(7);
  
  $all_categories = find_all('categories')

?>


<?php include_once('layouts/header.php'); ?>

<?php

$query1="SELECT distinct item_name from item_formula";
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
          <form action="production_trans.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
     
                    <th>Production Date </th>
                    <td>
                       <input type="Date" class="form-control nam" name="prod_date" placeholder="Production Date" required/>
                    </td>
                    <th>Product Detail </th>
                    <td>
                       <select id="mySelect" name="product_id"  class="form-control nam" required/>
                       Product ID

                           <?php
                           while($row1=mysqli_fetch_array($result1)):;?>
                           <option value=<?php echo $row1[0]  ?>>
                           <?php echo $row1[0];  
                           
                           ?> </option>


                           ?>


                         <?php endwhile;?>



                       </select>

                    </td>
                 </tr>   
                  <tr>
                    <th>Batch Size</th>
                    <td><input type="text" class="form-control nam" name="batch_size" placeholder="Batch Size" required/> 
                    </td>
                    
                    <th>Batch No.</th>
                    <td>
                       <input type="text" class="form-control nam" name="batch_no" placeholder="Batch No." required/>
                    </td>
                  </tr>
                  <tr>
                    <th>Estimated Packs Quantity</th>       
                    <td><input type="text" class="form-control nam" name="est_packs_qty" placeholder="Estimated Packs Quantity" required/>
                    </td>

                    <th>Remarks</th>
                    <td>
                      <input type="text" class="form-control nam" name="remarks" placeholder="Remarks" required/>
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
  
$prod_date = $_POST['prod_date'];
$product_id = $_POST['product_id'];



$batch_size = $_POST['batch_size'];
$batch_no = $_POST['batch_no'];
$est_packs_qty = $_POST['est_packs_qty'];
$remarks = $_POST['remarks'];

$query11="SELECT product_name,qty FROM item_formula WHERE item_name='$product_id'";
$result2=$db->query($query11);
while ($row1=mysqli_fetch_array($result2)) {
  $pn=$row1['product_name'];
  
  $w=$row1['qty']*$est_packs_qty;
  $query22= "UPDATE newitem_reg set quantity= quantity- '$w' where product_title='$pn'";
 $db->query($query22);
  



}



  $query="INSERT into production_file(prod_date, product_id, batch_size, batch_no, est_packs_qty, remarks) VALUES
   ('$prod_date', '$product_id', '$batch_size', '$batch_no', '$est_packs_qty', '$remarks') ";
  

     if($db->query($query))
     {
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="production_trans.php"';
        echo '</script>';
     } 

else 
     {
        echo '<script language="javascript">';
        echo 'alert("Registeration Failed"); location.href="production_trans.php"';
        echo '</script>';
     }

   
   }

 

?>
    
<!--
<script type="text/javascript">
  
  function myFunction()
  {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML="You selected:" +x;
  }
</script>

-->

  



