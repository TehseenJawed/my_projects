<?php
  $page_title = 'Customer Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(8);
  
  $all_categories = find_all('categories');
?>

<?php include_once('layouts/header.php'); ?>
<?php
$id=$_GET['id'];


// Header('Location:raw_material.php'); 
//}


$qm1="SELECT * from raw_packeging WHERE product_name='$id'";
//$query1="SELECT * from production_file";

$resultm1=$db->query($qm1);
/*$zz=mysqli_fetch_array($result1);
$pnam=$zz['product_name'];*/
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
          <form  method="POST" >
            <div class="form-group">

              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
     
                   <th>SR</th>
                    <th>Item Name</th>
                   
                                      <th>Quantity</th>
         </tr>
                    
                      <?php while ($romw=mysqli_fetch_array($resultm1)) {
                    ?>
                    <tr>
                     
                       
                     
                     <td>
                               <?php echo $index++?>
                          </td> 
                       <td>
                           <input type="hidden" name="ide"  value="<?php echo $_GET['id']?>">
                           <input type="hidden" name="item[]"  value="<?php echo $romw[2]?>">
                            <?php
                          	$id=$romw[2];
				$query3="SELECT * from newitem_reg WHERE id= $id";
  $results3= $db->query($query3);
  $xx=mysqli_fetch_array($results3);
  $pt=$xx['product_title'];
                          ?>
                           <input type="text" Disabled  value="<?php echo $pt?>">
                      </td>
                      <td>
                           <input type="text" name="est_qty[]" value="<?php echo $romw[3]?>"  >  
                      </td>
                      <!-- <td>
                           <a href="raw_material.php?id=<?php  echo $row['product_name']?> "><?php echo $row['product_name']?></a>
                      </td> -->
                    </tr>
                    <?php
                  }
                    ?>
                    <tr>
                        <td>
                    <input type="submit" name="sub" value="complete" >
                      <td>
                          </tr>
            </table>
      </div>
    </form>
            </div>
      </div>
      </div>
      </div>

      <?php
 

?>
      
           <?php
 if(isset($_POST['sub']))
 {
$qq=$_POST['item'];

$aa=$_POST['est_qty'];
$ide=$_POST['ide'];

for ($i=0; $i <count($qq) ; $i++) { 
$est_qty=$_POST['est_qty'][$i];
$product_title=$_POST['item'][$i];
  
  $quer1="SELECT id from newitem_reg  WHERE id='$product_title'";
$resut1=$db->query($quer1);
$name=mysqli_fetch_array($resut1);
$pname=$name['id'];

  $query2="UPDATE purchase_trans_detail SET qty=qty-$est_qty,total=price*qty WHERE product_id='$pname'";
$result2=$db->query($query2);
 } 


$quer12="SELECT id from newitem_reg  WHERE id='$id'";
$resut12=$db->query($quer12);
$name=mysqli_fetch_array($resut12);
$pname=$name['id'];
echo $pname.'<br>';
echo $ide.'<br>';
$query19="SELECT * from production_file  WHERE product_id='$ide'";
$result19=$db->query($query19);
/*print_r(mysqli_fetch_array($result19));
exit;*/
while ($row=mysqli_fetch_array($result19)) {
  $datee=$row[1];
 
  $batch_no=$row[4];
  $batch_size=$row[3];
  $est_packs_qty=$row[5];
  $remarks=$row[6];
  $qwe=$_GET['id'];

  $qaz="INSERT INTO fnishe_good_rec(datee,product_name,batch_size,batch_no,est_pack_qty,remarks) VALUES('$datee','$qwe','$batch_size','$batch_no','$est_packs_qty','$remarks')";
  $db->query($qaz);
 $q2="DELETE from production_file WHERE batch_no=$batch_no";
  $db->query($q2);
    
}
  $ty="DELETE from raw_packeging WHERE product_name='$ide'";
  $db->query($ty);
echo '<script language="javascript">';
        echo 'alert("Please go to Finished good page."); location.href="home.php"';
        echo '</script>';
    
 }

  
?>
 
       


    




