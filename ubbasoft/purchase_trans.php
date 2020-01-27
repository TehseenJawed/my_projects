<?php
$page_title = 'Purchase Transaction';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(12);
  
$all_categories = find_all('categories')

?>

<?php

/*$servername = "158.69.251.113";
	$username = "inventor_ubbasoft";
	$password = "ubbasoft12345";
	$dbname = "inventor_soft";

$connect=mysqli_connect($servername, $username, $password, $dbname);*/

include 'config.php' ;

$query1="SELECT * from newvendor_reg";


$result1=$db->query($query1);

$result2=$db->query($query1);

$query23= "SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'inventor_soft'
AND   TABLE_NAME   = 'purchase_trans';";

$results1=mysqli_query($conn,$query23);


?>
<style >


.ui-autocomplete {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    display: none;
    min-width: 160px;   
    padding: 4px 0;
    margin: 0 0 10px 25px;
    list-style: none;
    background-color: #ffffff;
    border-color: #ccc;
    border-color: rgba(0, 0, 0, 0.2);
    border-style: solid;
    border-width: 1px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    *border-right-width: 2px;
    *border-bottom-width: 2px;
}

.ui-menu-item > a.ui-corner-all {
    display: block;
    padding: 3px 15px;
    clear: both;
    font-weight: normal;
    line-height: 18px;
    color: #555555;
    white-space: nowrap;
    text-decoration: none;
}

.ui-state-hover, .ui-state-active {
    color: #ffffff;
    text-decoration: none;
    background-color: #0088cc;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    background-image: none;



}
</style>

<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
      <!-- <?php echo display_msg($msg); ?>-->
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
               <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Purchase Transaction</h1>
         </strong>
         
         
         
         
    <script>document.writeln("  <br> ");</script>
    <div class="panel-body">
          <form action="purchase_trans.php" method="post" >
            <div class="form-group">
                <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                <tr>
                  <th>Invoice No.</th>
       <td>
  <input type="text" name="grn_no"  class="form-control nam" >
      
</td>

        
       <th>Invoice Date</th>
       <td>
       <input type="Date" class="form-control nam" name="open_date" value="<?php echo (isset($_POST['open_date']))? $_POST['open_date']:'' ?>" placeholder="Opening Date" >
        </td>
      </tr>
      <tr>

       
       <th>Vendor Name</th>
          <td>
              <select name="vendor_id" class="form-control nam"  value="<?php echo (isset($_POST['vendor_id']))? $_POST['vendor_id']:'' ?>" >
                 <!-- <option value="">Select Vendor id</option> -->
                      <option ><?php echo (isset($_POST['vendor_id']))? $_POST['vendor_id']:'' ?></option>    
       <?php

       while($row1=mysqli_fetch_array($result1)):;?>
       <option value=<?php echo $row1[0]  ?> >
       <?php echo $row1[2];  
       ?> </option>

     <?php endwhile;?>


</select>

     </td>

    <!-- <th>DC No.</th>
       <td>
       <input type="text" class="form-control nam" name="dc_no" value="<?php echo (isset($_POST['dc_no']))? $_POST['dc_no']:'' ?>" placeholder="Dc_No" >
       </td>
      -->

     
       
       
     <!--<th>P No.</th>
       <td>
       <input type="text" class="form-control nam" name="pno" value="<?php echo (isset($_POST['pno']))? $_POST['pno']:'' ?>" placeholder="P. No." >
       </td>-->
 
 <th>Payment Paid</th>
       <td>
       <input type="text" class="form-control nam" name="payment_paid"  placeholder="Payment Paid" >
       </td>
     

        </tr>
<?php
include 'config.php' ;
   if (isset($_POST['cal'])) {   


     $d=$_POST['vendor_id'];
     $q2="SELECT * FROM purchase_pay WHERE vendor_id=$d";
   $res1=$db->query($q2);
   $res2=mysqli_fetch_array($res1);
   
   $old=$res2['payment_remaining'];


   }


?>



      <tr>
       <th>Old Balance</th>
       <td>
       <input type="text" class="form-control nam" name="old_balance" value="<?php echo $old; ?>" placeholder="Old Balance" disabled> 
       

  </td>
    <!-- <th>Remarks</th>
       <td>
       <input type="text" class="form-control nam" name="remarks" value="<?php echo (isset($_POST['remarks']))? $_POST['remarks']:'' ?>" placeholder="remarks" >
       </td>-->

        
       <th>Payment Remaining</th>
       <td>
       <input type="text" class="form-control nam" name="payment_remaining"  placeholder="Payment Remaining" >
       </td>

      </tr>
      <tr> <td colspan="4"><input type="submit" name="cal" class="form-control btn-info" value="Old Balance"></td></tr>


      </table>

<?php
  
  $page_title = 'purchase transaction';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(12);

   include 'config.php' ;
   


?>
<?php

if(isset($_POST['printrr']))  
{

//$cn=new mysqli("158.69.251.113","inventor_ubbasoft","ubbasoft12345","inventor_soft");

    $open_date = $_POST['open_date'];
    $vendor_id = $_POST['vendor_id'];
    $grn_no=$_POST['grn_no'];


    //$dc_no = $_POST['dc_no'];

    //$pno = $_POST['pno'];
    //$remarks = $_POST['remarks'];
    $payment_paid = $_POST['payment_paid'];
    $payment_remaining = $_POST['payment_remaining'];
    $old_balance=$_POST['old_balance'];
    

  $query="INSERT into purchase_trans(invoice_no, p_date, vendor_id, payment_paid, payment_remaining, old_balance) VALUES
   ('$grn_no','$open_date', '$vendor_id', '$payment_paid', '$payment_remaining', '$old_balance' ) ";
  
  



  $row2=mysqli_fetch_array($result2);
   $r=$row2['id'];
     $q2="SELECT * FROM purchase_pay";
   $res1=$db->query($q2);
   $res2=mysqli_fetch_array($res1);
    
    
   $i=$res2['vendor_id'];
    if($res2['vendor_id'] && $res2['payment_paid']>0  &&  $res2['payment_remaining']<=0)
    {
        $query6= "UPDATE purchase_pay set payment_paid= payment_paid+ '$payment_paid' , payment_remaining='$payment_remaining' where vendor_id='$vendor_id'";
 $db->query($query6);
    
    }
    elseif($res2['vendor_id'] && $res2['payment_paid']>0  &&  $res2['payment_remaining']>0){/*true*/
        $query6= "UPDATE purchase_pay set payment_paid= payment_paid+ '$payment_paid' , payment_remaining= '$payment_remaining'+payment_remaining- '$payment_paid' where vendor_id='$vendor_id'";
 $db->query($query6);
    }
    elseif($res2['vendor_id'] && $res2['payment_paid']<=0  &&  $res2['payment_remaining']<=0)/*false*/
    {
        $query6= "UPDATE purchase_pay set payment_paid='$payment_paid' , payment_remaining='$payment_remaining' where vendor_id='$vendor_id'";
 $db->query($query6);
    }
    elseif($res2['vendor_id'] && $res2['payment_paid']<=0  &&  $res2['payment_remaining']>0)
    {$e=$payment_remaining-$payment_paid;
        $query6= "UPDATE purchase_pay set payment_paid='$payment_paid' , payment_remaining=payment_remaining+'$e' where vendor_id='$vendor_id'";
 $db->query($query6);
    }


   @$aaa=$_POST['item'];

for($i = 0; $i<count($aaa); $i++)  
{  
  $aaa=$_POST['item1'][$i];
  @$qqty=$_POST['qty'][$i];
  $ppp=$_POST['price'][$i];

  $qtt = "SELECT * from purchase_trans_detail where product_id = '$aaa' " ;
      $restt = $conn->query($qtt) ;
     if (mysqli_num_rows($restt)>0)
      {
      $q33="UPDATE purchase_trans_detail SET qty=qty+$qqty,price=price+$ppp,total=total+($qqty*$ppp) WHERE product_id='$aaa'";
$result2131=$db->query($q33); 
$q333="UPDATE purchase_trans_detail SET price=total/qty WHERE product_id='$aaa'";
$result133=$db->query($q333); 
}
else
{
  $grn_no=$_POST['grn_no'];
$conn->query("INSERT INTO purchase_trans_detail  
SET   
invoice_no = '{$_POST['grn_no']}', 
product_id = '{$_POST['item1'][$i]}',  
qty = '{$_POST['qty'][$i]}',

price = '{$_POST['price'][$i]}',
total= '{$_POST['qty'][$i]}'*'{$_POST['price'][$i]}',
dc_no='{$dc_no}'
");  

/*$conn->query("INSERT into purchase_trans_detail(invoice_no, product_id, qty, price, total, dc_no) VALUES
   ('{$_POST['grn_no']}','{$_POST['item1'][$i]}', '{$_POST['qty'][$i]', '{$_POST['price'][$i]}', 
   '{$_POST['qty'][$i]}'*'{$_POST['price'][$i]}', '{$dc_no}' ) ");
*/

}

}

$query111="SELECT * FROM temp_sales";
$result211=$db->query($query111);

while ($row1=mysqli_fetch_array($result211)) {
  $pn=$row1['prod_id'];
  $w=$row1['quantity'];
  $g=$_POST['tp'];
  $query2243= "UPDATE newitem_reg set no_of_pcs= no_of_pcs- '$w' where id='$pn'";
 $db->query($query2243);
  }


$queryt="TRUNCATE table temp_sales";

   
     if($db->query($query) && $db->query($queryt))
     {

        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="purchase_trans.php"';
        echo '</script>';
     
     } 

else 
     {
        echo '<script language="javascript">';
        echo 'alert("Registeration Failed"); location.href="purchase_trans.php"';
        echo '</script>';
     }

   
  } 



if(isset($_POST['item']))
{

if(isset($_POST['add_sale']))
{

 $cust = $_POST['cust'] ;

$u = "delete from temp_sales where 1" ;
$conn->query($u) ;

$item=$_POST['item'];
$qty=$_POST['qty'];
$price=$_POST['price'];




$query = "select * from sales order by id desc" ;


 $result = $conn->query($query) ;


 $row = $result->fetch_assoc() ;

$x =  $row['bno'] ;
    
    
   $query = "INSERT into sales(product_id,qty,price,date,bno,cust) values ('$id','$q' ,'$p' ,  '$b_no','$cust')" ;

  
  $conn->query($query) ;




  $query = "SELECT * from product where name = '$i'" ;

  $result = $conn->query($query) ;


 $row = $result->fetch_assoc() ;

$y =  $row['product_title'] ;

}
}



@$item=$_POST['item'];
@$qty=$_POST['qty'];
@$price=$_POST['price'];
@$discount=$_POST['item2'];


for($j =  0 ; $j < sizeof($item) ; $j++)
{
  $i = $item[$j] ;
  $q = $qty[$j] ;
  $pr = $price[$j] ;
  $gs = $discount[$j];

  $l = "UPDATE temp_sales set name = '$i', pric = '$pr' ,  quantity = '$q' , discount = '$gs' where name = '$i'" ; 
  $conn->query($l) ;               
}


?>
  </div>
</div>

<div class="row">

  <div class="col-md-12">
    <div class="panel panel-default">


      <div class="panel-body">

<br>
       <input class="nam form-control" placeholder="ITEMS here..." type="text" id = "automplete-2" name="tp" >

       <input type="submit" name="sibby" class="form-control btn-info">     
<br>
   

        <form method="post" action="newlc.php">
         <table class="table   table-condensed table-striped  table-hover table-bordered">
           <thead>
          <th> Item </th>
          <th> Discount </th>
              <th> Qty </th>
            <th> Price </th>
                  <th> Sub Total </th>
        
                  
           </thead> 

                
<tbody  >

             <form method="post" action="newlc.php" >
<br>

<?php  

     if(isset($_POST['sibby']))
     {

      @$tp = $_POST['tp'] ;

      $q = "SELECT * from newitem_reg where item_name = '$tp' " ;
      $res = $conn->query($q) ;

      $r = $res->fetch_assoc() ;
     $price = $r['trade_price'] ;
     $id = $r['id'] ;
     $sales_discount = $r['sales_discount'];
     $reorder_quantity = $r['no_of_pcs'];
    
     if(empty($price))
     {

      $q = "INSERT into temp_sales(prod_id, name,pric,quantity,discount) values('$id','$tp','0','0','$sales_discount')" ;
      $conn->query($q) ;
    }

    else
    {
            $q = "INSERT into temp_sales(prod_id, name,pric,quantity,discount) values('$id', '$tp','$price','$reorder_quantity','$sales_discount')";
      $conn->query($q) ;
    }
  

     }

             ?>


          <?php
          
 
    $grand = 0 ;
$sum=0; 

          $qu = "SELECT * from temp_sales" ;

          if($res = $conn->query($qu))
          {
            while ($row = $res->fetch_assoc()) {

              $n = $row['pric'] ;
              $m = $row['quantity'] ; 
              $d = $row['discount'];
              $sums = $n * $m ; 
              $sumss = (-$d+100) / 100;
              $sum = $sumss * $sums;
              ?>

           <tr class="clone" class="row">

<input type="hidden"  name="item1[]" id="item" value="<?php echo $row['prod_id']?>" class=' item' autocomplete="off" onkeypress="x(this.id)" >


<td class="col-xs-3"><input  name="item[]" id="item" value="<?php echo $row['name']?>" class=' item' autocomplete="off" onkeypress="x(this.id)" ></td>


<td class="col-xs-3"><input  name="item2[]" id="item" value="<?php echo $row['discount']?>" class=' item' autocomplete="off" onkeypress="x(this.id)" ></td>


<td class="col-xs-3"> <input type="number" step="any" value="<?php


if($row['quantity'] == 0){  } else{ echo $row['quantity'] ; } ?>" name="qty[]" class='input quantity mousetrap nami'/></td>
<td class="col-xs-3"> <input type="number" step="any" value="<?php echo $row['pric']?>" name="price[]" class='input price mousetrap'/></td>
<td><?php echo $row['quantity'] * $row['pric']  ?></td>
  <td>
  
                     <a href="temp_purchasetrans.php?id=<?php echo (int)$row['id'];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"> DELETE </span>
                     
  </td>



</tr>

              <?php

              $grand = $grand + $sum ;

            }
          }


          ?>

        
          <h1 class="alert-success">Grand Total: <?php echo $grand ; ?> </h1>

          <?php 

          ?> 

                    <input name="printrr" class="form-control btn-success" type="submit" value=" Submit " />  


 <input class="subbb form-control btn-danger" name="update_sale" type="submit" value="Update Items" />


</form>

              </tbody>
         </table>
         
        
       </form>
      </div>
    </div>
  </div>

</div>





<?php include_once('layouts/footer.php'); ?>



<script type="text/javascript" src ="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="rel.js"></script>
<script type="text/javascript" src= "mousetrap-master/mousetrap.js" ></script>
<script type="text/javascript" src="mousetrap-master/mousetrap.min.js"></script>
<script type="text/javascript" src ="jquery-ui-1.12.1/jquery-ui.min.js"></script>
 
<script type="text/javascript">


function as() {
 $('.a').click() ;

  var search = $('.nami');

  search.focus();



}
function s() {


  var search = $('.nam');
  

  search.focus();



}


function rs() {
 $('.subbb').click() ;



}

function sub() {
  $('.sub').click() ;



}



function naya() {
  $('.k').click() ;



}







  
  function mg() {
window.location.assign("group.php")
}


function mu() {
window.location.assign("users.php")
}



function cat() {
window.location.assign("categorie.php")
}


  function mg() {
window.location.assign("group.php")
}


function mu() {
window.location.assign("users.php")
}



function cat() {
window.location.assign("categorie.php")
}



function p() {
window.location.assign("product.php")
}


function ap() {
window.location.assign("add_product.php")
}


function sale() {
window.location.assign("sales.php") ;
}



function add_sale() {
window.location.assign("add_sale.php")
}



function ms() {
window.location.assign("monthly_sales.php")
}




function ds() {
window.location.assign("daily_sales.php")
}


function g() {
window.location.assign("gen.php")
}



function ge() {
window.location.assign("gene.php")
}


function sp() {
window.location.assign("pproduct.php")
}



function spa() {
window.location.assign("add_pproduct.php")
}


function cust() {


  var search = $('.cust');
  

  search.focus();



}


function gsa() {
window.location.assign("add_ssales.php")
}




function gs() {
window.location.assign("ssales.php")
}




Mousetrap.bind('u',mu)
Mousetrap.bind('g',mg)
Mousetrap.bind('c',cat)
Mousetrap.bind('p',p)
Mousetrap.bind('+',ap)
Mousetrap.bind('s+i',sale)
Mousetrap.bind('s+a',add_sale)
Mousetrap.bind('s+m',ms)
Mousetrap.bind('s+d',ds)
Mousetrap.bind('r',g)
Mousetrap.bind('q',gs)
Mousetrap.bind('w',gsa)
Mousetrap.bind('-',spa)
Mousetrap.bind('o',sp)
Mousetrap.bind('e',ge)
Mousetrap.bind('k',naya)











Mousetrap.bind('z',as) 
Mousetrap.bind('x',rs) 
Mousetrap.bind('v',s) 
Mousetrap.bind('b',sub) 
Mousetrap.bind('t',cust) 


/*

  $('.quantity').on('keyup',function(){
    var tot = $('.price').val() * this.value;
    $('.total').val(tot);
});

*/

  /*
  $(".quantity").on("keyup", function () {
    var $this = $(this);
    $tr = $this.closest('tr');
    qty_val = $this.val();
    unitprice_val = $tr.find('.price').val();
    amount = qty_val*unitprice_val;
    $(this).find('.total_discount').val(amount);
 
    //$('#total_amount').val(amount);
    //$(this).find('.total_amount').attr("value",amount);
    //$(this).find('.total_discount').val(amount);
 });
*/

$(function(){
var removeLink = ' <a  class="remove" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">remove</a>';

$('a.add').relCopy({ append: removeLink}); 
 

});

<?php


$ar = array();
include 'config.php' ;


$q = "SELECT * FROM newitem_reg WHERE product_type<>2" ;

if($res = $conn->query($q))

{

   while ($row = $res->fetch_assoc()) {

    array_push($ar,$row['product_title']); 


      # code...
   }

}



?>

         $(function() {
        var ar = <?php echo json_encode($ar) ?>;
            $( "#automplete-2" ).autocomplete({
               source: ar,
               autoFocus:true
            });
         });
      </script>



      </div>
      </div>
      </div>
      </div>
      </div>

     
      

    




