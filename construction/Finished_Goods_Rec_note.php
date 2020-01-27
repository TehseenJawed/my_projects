<?php
  $page_title = 'Customer Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(8);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>
<?php
$query1="SELECT * from newitem_reg";

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
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>finishes Goods REc</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="Finished_Goods_Rec_note.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
     
                    <th>Transaction Date</th>
                    <td>
                        <input type="Date" class="form-control nam" name="trans_date" placeholder="Transaction Date" required/>
                    </td>
                    <th>Reference No. </th>
                    <td>      
                        <input type="text" class="form-control nam" name="ref_no" placeholder="Reference No." required/>
                    </td>
                  </tr>
                  <tr>
                    <th>Remarks</th>
                    <td>
                        <input type="text" class="form-control nam" name="remarks" placeholder="Remarks" required/> 
                    </td>
                    <th>Product Detail </th>
                    <td>

                      <select name="product_id" class="form-control nam" required/>
                      <option value="">Product Detail</option>


                         <?php

                         while($row1=mysqli_fetch_array($result1)):;?>
                         <option value=<?php echo $row1[0]  ?>>
                         <?php echo $row1[1];  
                         ?> </option>

                       <?php endwhile;?>
                      </select>
      
                    </td>
                  </tr>
                  <tr>
                    <th>Pack Size</th>
                    <td>
                        <input type="text" class="form-control nam" name="pack_size" placeholder="Pack Size" required/>
                    </td>
                    <th>Batch No.</th>
                    <td>
                      <input type="text" class="form-control nam" name="batch_no" placeholder="Batch No." required/>
                    </td>
                  </tr>
                  <tr>
                    <th>Quantity</th>
                    <td>
                     <input type="text" class="form-control nam" name="qty" placeholder="Quantity" required/>
                    </td>
                    <td colspan="2">
                   <button type="submit" name="customer"  class="btn btn-primary form-control">&nbsp&nbsp Add &nbsp&nbsp</button>
                </td>
              </tr>
            </table>
      </div>
            </div>
      </div>
      </div>
      </div>

      <?php
 

?>
      
           <?php
 if(isset($_POST['customer']))
 {
  
    $trans_date = $_POST['trans_date'];
    $ref_no = $_POST['ref_no'];
    $remarks = $_POST['remarks'];

    $product_id = $_POST['product_id'];
    $pack_size = $_POST['pack_size'];
    $batch_no = $_POST['batch_no'];
$qty = $_POST['qty'];



  $query="INSERT into finish_goods(trans_date, ref_no, remarks, prod_id, pack_size, batch_no, qty) VALUES
   ('$trans_date', '$ref_no', '$remarks', '$product_id', '$pack_size', '$batch_no', '$qty') ";
  

     if($db->query($query))
     {
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="home.php"';
        echo '</script>';
     } 

else 
     {
        echo '<script language="javascript">';
        echo 'alert("Registeration Failed"); location.href="home.php"';
        echo '</script>';
     }

   
   }

 

?>
 
       


    




