<?php
  $page_title = 'Customer Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(8);
  
  $all_categories = find_all('categories');
?>

<?php include_once('layouts/header.php'); ?>
<?php
@$id=$_GET['id'];
if (isset($_GET['id'])) {
  $est_qty=$_GET['est_qty'];
  $query1="SELECT id from newitem_reg  WHERE product_title='$id'";
$result1=$db->query($query1);
$name=mysqli_fetch_array($result1);
$pname=$name['id'];

  $query2="UPDATE purchase_trans_detail SET qty=qty-$est_qty,total=price*qty WHERE product_id='$pname'";
$result2=$db->query($query2);
// Header('Location:raw_material.php'); 
}


$query1="SELECT DISTINCT product_name from raw_packeging";
//$query1="SELECT * from production_file";

$result1=$db->query($query1);


$index=1;
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
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Raw material & packeging</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="Finished_Goods_Rec_note.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
     
                   <th>SR</th>
                    <th>product Name</th>
                   
                  <!--   <th>Item Name</th>
                    <th>Quantity</th>
 -->                    </tr>
                    
                      <?php while ($row=mysqli_fetch_array($result1)) {
                    ?>
                    <tr>
                                          <td>
                               <?php echo $index++?>
                          </td> 
                      <td>
                          <?php
                          	$id=$row['product_name'];
				$query3="SELECT * from newitem_reg WHERE id= $id";
  $results3= $db->query($query3);
  $xx=mysqli_fetch_array($results3);
  $pt=$xx['product_title'];
                          ?>
                           <a href="raw_material_detail.php?id=<?php  echo $row['product_name'];?> "><?php echo $pt?></a>
                      </td>
                    </tr>
                    <?php
                  }
                    ?>

            </table>
      </div>
            </div>
      </div>
      </div>
      </div>

      <?php
 

?>
      
           <?php
 if(isset($_GET['id']))
 {

  /*
    $trans_date = $_POST['trans_date'];
    $ref_no = $_POST['ref_no'];
    $remarks = $_POST['remarks'];

    $product_id = $_POST['product_id'];
    $pack_size = $_POST['pack_size'];
    $batch_no = $_POST['batch_no'];
$qty = $_POST['qty'];
*/
$batch_nooo=$_GET['id'];
@$name=$_GET['name'];
$query1="SELECT * from production_file WHERE batch_no=$batch_nooo";
$result3=$db->query($query1);
while ($row=mysqli_fetch_array($result3)) {
  $datee=$row[1];
  $batch_no=$row[4];
  $batch_size=$row[3];
  $est_packs_qty=$row[5];
  $remarks=$row[6];
  $q="INSERT INTO fnishe_good_rec(datee,product_name,batch_size,batch_no,est_pack_qty,remarks) VALUES('$datee','$name','$batch_size','$batch_no','$est_packs_qty','$remarks')";
  $db->query($q);
  $q2="DELETE from production_file WHERE batch_no=$batch_nooo";
  $db->query($q2);
}
}

  
?>
 
       


    




