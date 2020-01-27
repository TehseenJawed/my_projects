<script src="assets/js/jquery.min.js">
   

</script>

<?php
  $page_title = 'Product File Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(7);
  $vc=$_GET['vc'];
  $all_categories = find_all('categories');

?>


<?php include_once('layouts/header.php'); ?>

<?php

// $query1="SELECT distinct item_name from item_formula";

$query1="SELECT * from newitem_reg where product_type='2'";
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
          <form action="production_trans.php" method="POST" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
     
                    <th>Product Detail </th>
                    <td>
                       <select id="mySelect" name="product_id"  class="form-control nam" required/>
                       <option value="<?php echo (isset($vc))?$vc:'' ?>"><?php echo (isset($vc))?$vc:'Select item here' ?></option>

                           <?php
                           while($row1=mysqli_fetch_array($result1)):;?>
                           <option value=<?php echo $row1[0]  ?>>
                           <?php echo $row1[1];  
                           
                           ?> </option>


                           ?>


                         <?php endwhile;?>



                       </select>

                    </td>
                    <th>Batch No.</th>
                    <td>
                       <input type="text" class="form-control nam" name="batch_no" placeholder="Batch No." required/>
                    </td>
                 </tr>   
                  <tr>
                    <th>Batch Size</th>
                    <td><input type="text" class="form-control nam" name="batch_size" id="batch_size" placeholder="Batch Size" required/> 
                    </td>
                    <th>Estimated Packs Quantity</th>       
                    <td><input type="text" class="form-control nam" name="est_packs_qty" id="est_packs_qty" placeholder="Estimated Packs Quantity" required/>
                    </td>
                    
                  </tr>
                  <tr>
                    <th>Production Date </th>
                    <td>
                       <input type="Date" class="form-control nam" name="prod_date" placeholder="Production Date" required/>
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
$q3="SELECT product_name,qty from item_formula WHERE item_name='$product_id'";
  $res4=$db->query($q3);
  //$c=mysqli_num_rows($res4);
/*$qq=mysqli_fetch_array($res4);*/
while ( $qq=mysqli_fetch_array($res4)) 
{
  $quantitys=$qq['qty'];
$totalqty=$quantitys*$est_packs_qty;
echo $totalqty;

$proname=$qq['product_name'];
$q5="INSERT INTO raw_packeging(product_name,item_name,qty)VALUES('$product_id','$proname','$totalqty')";
$db->query($q5);
}

$query11="SELECT product_name,qty FROM item_formula WHERE item_name='$product_id'";
$result2=$db->query($query11);

$company="STANDARD";

while ($row1=mysqli_fetch_array($result2)) {
  $pn=$row1['product_name'];
  
  $w=$row1['qty']*$est_packs_qty;
  $query22= "UPDATE newitem_reg set quantity= quantity- '$w' where id='$pn'";
 
  
 $db->query($query22);
  
}

 $query222= "UPDATE newitem_reg set quantity= quantity+ '$w' where id='$product_id'";
 
  
 $db->query($query222);
 
$iid=0;
$queryfindname="SELECT id from newitem_reg where id='$product_id'";
$resultid=$db->query($queryfindname);

while ($row1=mysqli_fetch_array($resultid)) {

$iid=$row1['id'];

$querybatch= "INSERT into batch_detail(batch_no, prod_id, product_title, stock, company)  VALUES ('$batch_no', '$iid', '$product_id', '$est_packs_qty', '$company' )";


$db->query($querybatch);
}

 $queryprod="INSERT into production_file(prod_date, product_id, batch_size, batch_no, est_packs_qty, remarks) VALUES
   ('$prod_date', '$iid', '$batch_size', '$batch_no', '$est_packs_qty', '$remarks') ";
  

     $db->query($queryprod);



 $query3="UPDATE item_formula SET product_name='$product_id' WHERE id=$iid ";
    $query4="UPDATE production_file  SET batch_size='$batch_size' , batch_no='$batch_no' , est_packs_qty='$est_packs_qty' ,
    prod_date='$prod_date', remarks='$remarks'  WHERE prod_id=$iid ";

$db->query($query3);

$db->query($query4);

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
<?php


$ar = array();
include 'config.php' ;


$q = "select * from newitem_reg WHERE id='$vc'" ;

if($res = $conn->query($q))

{

   while ($row = $res->fetch_assoc()) {

    array_push($ar,$row['pack_size']); 


      # code...
   }

}



?>
<script>
$(document).ready(function() {

$('#batch_size').change(function(){
   //$('#select_2').show();
  
var batch_size=$('#batch_size').val();
var pack_size_db = <?php echo json_encode($ar) ?>
/*window.location.href="formula.php?vc_id="+myName;*/
 /* console.log('myname'+myName);*/
 var total_amount=batch_size/pack_size_db;
  /*$('#estimate_pack').text(total_amount);*/
  /*alert(total_amount);*/
  document.getElementById('est_packs_qty').value=total_amount;
 
  /*$('#estimate_pack').find('input').val('total_amount');*/
  /*var myurl='http://localhost/MUNEEBSOFT/voucher_trans1.php';
    $.ajax({
      url: myurl,
          method:'POST',
      data: 'id='+myName,
      success: function(result){
        
      }
    });*/

});
});

</script>
<script>

$(document).ready(function() {

$('#mySelect').change(function(){
   //$('#select_2').show();
  
var myName=$('#mySelect').val();

window.location.href="production_trans.php?vc="+myName;

});
});
</script>
    
<!--
<script type="text/javascript">
  
  function myFunction()
  {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML="You selected:" +x;
  }
</script>

-->

  



