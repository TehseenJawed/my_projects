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
<?php
  $page_title = 'Sales Invoice';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(9);
  
  $all_categories = find_all('categories');

/*$hostname="158.69.251.113";
$username="inventor_ubbasoft";
$password="ubbasoft12345";
$databaseName="inventor_soft";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);*/
include 'config.php' ;

$query="SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'inventor_soft'
AND   TABLE_NAME   = 'invoice';";


$query1="SELECT * from customer_reg";

$query2="SELECT * from new_salesman";

$query3="SELECT * from newitem_reg";


$result1=mysqli_query($conn,$query);

$result2=mysqli_query($conn,$query1);

$result3=mysqli_query($conn,$query2);


$result4=mysqli_query($conn,$query3);


     $query4="SELECT * from newitem_reg where product_id='$product_id'";

$result5=mysqli_query($conn,$query3);



?>

<?php

 

?>
<?php include_once('layouts/header.php'); ?>

<?php

 @$num= mt_rand("0","999999");
 $numbers = range(100000, 999999);
shuffle($numbers);

@$random_1 = $numbers[0]; // first random number


?>
  <div class="row">
     <div class="col-md-12">
      <!-- <?php echo display_msg($msg); ?>-->
     </div>
  </div>
   
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
               <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Sales Invoice</h1>
         </strong>
        </div>
        
    <script>document.writeln("  <br> ");</script>
    <div class="panel-body">
          <form action="newinvoice.php" method="post" >
            <div class="form-group">
                <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                <tr>
                
                <th>Invoice No. </th>
              <td>
  <input type="text" class="form-control nam" name="invoice_no" placeholder="Invoice Number">
           <th>DC Date</th>
       <td>
       <input type="Date" class="form-control nam" name="dc_date" value="<?php echo (isset($_POST['dc_date'])) ? $_POST['dc_date']:'' ?>"  placeholder="DC Date" >
        </td>
      </tr>
      <tr>
      
       <th>Customer Name </th>
<td>
       <select name="customer_id" class="form-control nam" >

                <option ><?php echo (isset($_POST['customer_id']))? $_POST['customer_id']:'' ?></option>


       <?php
       while($row1=mysqli_fetch_array($result2)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[2];  
       ?> </option>

     <?php endwhile;?>


       </select>

       </td>
       <th>Sale Person Name</th>
     <td>
        <select name="sale_person_id" class="form-control nam" >

        <option> <?php echo (isset($_POST['sale_person_id']))? $_POST['sale_person_id']:'' ?> </option>
       

       <?php
       while($row1=mysqli_fetch_array($result3)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[2];  
       ?> </option>

     <?php endwhile;?>


       </select>
       </td>
      </tr>
      
      <!-- <th>Reference No.</th>
       <td>
       <input type="text" class="form-control nam" name="ref_no" value=" <?php echo (isset($_POST['ref_no'])) ? $_POST['ref_no']:'' ?>" placeholder="Reference No." > 
       </td>-->
       <tr>
       <th>Payment Paid</th>
       <td>
       <input type="text" class="form-control nam" name="payment_paid"  placeholder="Payment Paid" > 
       </td>

       <?php
include 'config.php' ;
   if (isset($_POST['cal'])) {   


     $d=$_POST['customer_id'];
     $q2="SELECT * FROM invoice_pay WHERE custom_id=$d";
   $res1=$db->query($q2);
   $res2=mysqli_fetch_array($res1);
   
   $old=$res2['payment_remaining'];


   }


?>
      
      
       <th>Old Balance</th>
       <td>
       <input type="text" class="form-control nam" name="old_balance" value="<?php  echo $old;  ?>" placeholder="Old Balance" disabled> 
       

  </td>

</tr><tr>
       
       
       
      <!-- <th>Remarks</th>
       <td>
       <input type="text" class="form-control nam" name="remarks" value="<?php echo (isset($_POST['remarks'])) ? $_POST['remarks']:'' ?>" placeholder="Remarks" >
       </td>-->
       <?php   ?>
       <th>Payment Remaining</th>
       <td>
       <input type="text" class="form-control nam" name="payment_remaining"  placeholder="Payment Remaining" > 
       </td>
       </tr>
       <tr> <td colspan="4"><input type="submit" name="cal" class="form-control btn-info" value="Old Balance"></td></tr>
      
      
        </table>
       
      
      

<?php
  $page_title = 'Add Sale';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(9);

   include 'config.php' ;

?>

<?php

if(isset($_POST['printrr']))  
{
/*$cn=new mysqli("158.69.251.113","inventor_ubbasoft","ubbasoft12345","inventor_soft"); */

//$dc_noo = $_POST['dc_no'];
@$dc_date = $_POST['dc_date'];
@$inv_no = $_POST['invoice_no'];
@$customer_id = $_POST['customer_id'];

//$ref_no = $_POST['ref_no'];
@$sales_person_id = $_POST['sale_person_id'];
//$remarks = $_POST['remarks'];
@$payment_paid = $_POST['payment_paid'];
@$payment_remaining = $_POST['payment_remaining'];
@$old_balance=$_POST['old_balance'];


    
$query="INSERT INTO invoice(invoice_no,dc_date, customer_id, sale_person_id, payment_paid, payment_remaining , old_balance)VALUES('$inv_no','$dc_date','$customer_id','$sales_person_id', '$payment_paid','$payment_remaining','$old_balance')";


   $row2=mysqli_fetch_array($result2);
   $r=$row2['id'];
   $q2="SELECT * FROM invoice_pay";
   $res1=$db->query($q2);
   $res2=mysqli_fetch_array($res1);
   $i=$res2['custom_id'];
    if($res2['custom_id'] && $res2['payment_paid']>0  &&  $res2['payment_remaining']<=0)
    {
        $query6= "UPDATE invoice_pay set payment_paid= payment_paid+ '$payment_paid' , payment_remaining='$payment_remaining' where custom_id='$customer_id'";
 $db->query($query6);
    $query5="INSERT INTO invoice_pay(custom_id,payment_paid,payment_remaining)VALUES('$customer_id','$payment_paid','$payment_remaining')";
    }
    elseif($res2['custom_id'] && $res2['payment_paid']>0  &&  $res2['payment_remaining']>0){/*true*/
        $query6= "UPDATE invoice_pay set payment_paid= payment_paid+ '$payment_paid' , payment_remaining= '$payment_remaining'+payment_remaining- '$payment_paid' where custom_id='$customer_id'";
 $db->query($query6);
    }
    elseif($res2['custom_id'] && $res2['payment_paid']<=0  &&  $res2['payment_remaining']<=0)/*false*/
    {
        $query6= "UPDATE invoice_pay set payment_paid='$payment_paid' , payment_remaining='$payment_remaining' where custom_id='$customer_id'";
 $db->query($query6);
    }
    elseif($res2['custom_id'] && $res2['payment_paid']<=0  &&  $res2['payment_remaining']>0)
    {$e=$payment_remaining-$payment_paid;
        $query6= "UPDATE invoice_pay set payment_paid='$payment_paid' , payment_remaining=payment_remaining+'$e' where custom_id='$customer_id'";
 $db->query($query6);
    }
    
/*for($i = 0; $i<count($_POST['item']); $i++)  
{


$conn->query("INSERT INTO invoice_detail  
SET   

invoice_id = '$inv_no', 

prod_id = '{$_POST['item1'][$i]}',  

pack_size = '{$_POST['packsize'][$i]}',  

batch_no = '{$_POST['packsize'][$i]}',  
qty = '{$_POST['qty'][$i]}',  
price = '{$_POST['price'][$i]}',
total= '{$_POST['qty'][$i]}'*'{$_POST['price'][$i]}'");   

}*/

$query111="SELECT * FROM temp_sale";
$result211=$db->query($query111);

while ($row1=mysqli_fetch_array($result211)) {
  $pn=$row1['prod_id'];
  $w=$row1['quantity'];
  $query2243= "UPDATE newitem_reg set   no_of_pcs =   no_of_pcs - '$w' where item_name='$pn'";
 $db->query($query2243);
  }



$queryt="TRUNCATE table temp_sale";
   
     if($db->query($query) && $db->query($queryt) )
     {


        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="newinvoice.php"';
        echo '</script>';
     
     } 

else 
     {
        echo '<script language="javascript">';
        echo 'alert("Registeration Failed"); location.href="newinvoice.php"';
        echo '</script>';
     }

   
  





 $cust = $_POST['cust'] ;

$u = "delete from temp_sale where 1" ;
$conn->query($u) ;

$item=$_POST['item'];

$qty=$_POST['qty'];

$price=$_POST['price'];

$packsize=$_POST['packsize'];
$batchno=$_POST['batchno`'];



$query = "SELECT * from sales order by id desc" ;


 $result = $conn->query($query) ;


 $row = $result->fetch_assoc() ;

$x =  $row['bno'] ;
    
    
   $query = "INSERT INTO sales(product_id,qty,price,date,bno,cust) values ('$id','$q' ,'$p' ,'$b_no','$cust')" ;

  
  $conn->query($query) ;



  $query = "select * from product where name = '$i'" ;

  $result = $conn->query($query) ;


 $row = $result->fetch_assoc() ;

$y =  $row['product_title'] ;

}


if (isset($_POST['update_sale'])) {



@$item=$_POST['item'];
@$qty=$_POST['qty'];
@$price=$_POST['price'];
@$discounts=$_POST['packsize'];

for($j =  0 ; $j < sizeof($item) ; $j++)
{
  $i = $item[$j] ;
  $q = $qty[$j] ;
  $pr = $price[$j] ;
  $ds = $discounts[$j];

 $l = "UPDATE temp_sale set name = '$i', pric = '$pr' ,  quantity = '$q' , discount='$ds' where name = '$i'" ; 
  $conn->query($l) ;               
}

}
?>
  </div>
</div>
</div>
</div>
</div>


  <div class="col-md-12">
    <div class="panel panel-default">


      <div class="panel-body">

<br>
       <input class="nam form-control" placeholder="ITEMS here...." type="text" id = "automplete-2" name="tp" >

       <input type="submit" class="btn-info form-control" name="sibby">     
<br>
   

        <form method="post" action="newlc.php">
          <div class="table-responsive">
         <table class="table   table-condensed table-striped  table-hover table-bordered">
           <thead>
           <th> Item </th>
              
                            <th> Discount </th>
              <th> Qty </th>
            <th> Price </th>
                  <th> Sub Total </th>

           </thead> 

                
<tbody  >

             <form method="post" action="newinvoice.php" >
<br>

<?php  

     if(isset($_POST['sibby']))
     {

      $tp = $_POST['tp'] ;

      $q = "SELECT * from newitem_reg where item_name = '$tp' " ;
      $res = $conn->query($q) ;
      $r = $res->fetch_assoc() ;
     $price = $r['retail_price'] ;
     $no_of_pcs = $r['no_of_pcs'] ;
     $id = $r['id'] ;
$pack_size = $r['pack_size'] ;
$sales_discount= $r['sales_discount'];


     if(empty($price))
     {

      $q = "INSERT into temp_sale(prod_id, name, pack_size, batch_no, pric, quantity, discount) values('$id','$tp', 'pack_size', '0', '$price','$no_of_pcs','$sales_discount')" ;
      $conn->query($q) ;
    }
    else
    {
            $q = "INSERT into temp_sale(prod_id, name, pack_size, batch_no, pric,quantity, discount) values('$id', '$tp', '$pack_size', '0', '$price','$no_of_pcs','$sales_discount')";
      $conn->query($q) ;
    }

     }
             ?>


          <?php
          
 
    $grand = 0 ;
$sum=0; 

          $qu = "SELECT * from temp_sale" ;

          if($res = $conn->query($qu))
          {
            while ($row = $res->fetch_assoc()) 
            {

              $n = $row['pric'] ;
              $m = $row['quantity'] ; 
              $d = $row['discount'];
              $sums = $n * $m ; 
              $sumss = (-$d+100) / 100;
              $sum = $sumss * $sums;
            
              ?>

           <tr class="clone" class="row">


<input type="hidden"   name="item1[]" id="item" value="<?php echo $row['prod_id']?>" class=' item' autocomplete="off" onkeypress="x(this.id)" >


<td class="col-xs-3"><input  name="item[]" style="width: 80px;" id="item" value="<?php echo $row['name']?>" class=' item' autocomplete="off" onkeypress="x(this.id)" ></td>


<td class="col-xs-3"><input  name="packsize[]" id="packsize" style="width: 80px;" value="<?php echo $row['discount']?>" class=' pack_size' autocomplete="off" onkeypress="x(this.id)" ></td>

<!--<td class="col-xs-3"><input  name="batch_no[]" style="width: 80px;" id="batch_no" value="<?php echo $row['quantity']?>" class=' batch_no' autocomplete="off" onkeypress="x(this.id)" ></td>-->


<td class="col-xs-3"> <input type="number" style="width: 80px;" step="any" value="<?php


if($row['quantity'] == 0){  } else{ echo $row['quantity'] ; } ?>" name="qty[]" class='input quantity mousetrap nami'/></td>
<td class="col-xs-3"> <input type="number" style="width: 80px;" step="any" value="<?php echo $row['pric']?>" name="price[]" class='input price mousetrap'/></td>
<td><?php  echo $row['quantity'] * $row['pric']  ?></td>

  <td> 
                    <a href="temp_newsale.php?id=<?php echo (int)$row['id'];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"> DELETE </span>
  </td>



</tr>

              <?php

              $grand = $grand + $sum ;

            }
          }


          ?>

        
          <h1>Grand Total: <?php echo $grand ; ?> </h1>

          <?php 

          ?> 

                    <input name="printrr" type="submit" value=" Submit " />  


 <input class="subbb" name="update_sale" type="submit" value="Update Items" />


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


$(function(){
var removeLink = ' <a  class="remove" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">remove</a>';

$('a.add').relCopy({ append: removeLink}); 
 

});
            
<?php


$ar = array();
include 'config.php' ;


$q = "select * from newitem_reg" ;

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

     
      










    

      <?php

if(isset($_POST['submit'])){

$dc_date = $_POST['dc_date'];

$customer_id = $_POST['customer_id'];

$ref_no = $_POST['ref_no'];
$sales_person_id = $_POST['sale_person_id'];
$remarks = $_POST['remarks'];
$product_id = $_POST['product_id'];
$product_title = $_POST['product_title'];
$pack_size = $_POST['pack_size'];
$batch_no = $_POST['batch_no'];
$price = $_POST['price'];
$qty = $_POST['qty'];

    
    $query="INSERT INTO invoice(dc_date, customer_id, ref_no, sale_person_id, remarks, product_id, 
    pack_size, batch_no, price, qty)VALUES('$dc_date','$customer_id', '$ref_no','$sales_person_id', '$remarks', '$product_id', '$pack_size','$batch_no', '$price', '$qty')";

  //$query1= "UPDATE newitem_reg set no_of_pcs = no_of_pcs - '$qty' where item_name = '$tp'";

  

     if($db->query($query)){
      if ($db->query($query1)) {
      
        echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="invoice.php"';
    echo '</script>';
     } else {
        echo '<script language="javascript">';
    echo 'alert("Registeration Failed"); location.href="invoice.php"';
    echo '</script>';
     }

   
   }
}
 

?>
      
      
       


    




