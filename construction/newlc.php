<?php
$page_title = 'LC Transaction';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(12);
  
$all_categories = find_all('categories')

?>

<?php

$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);



$query1="SELECT * from newvendor_reg";


$result1=$db->query($query1);

$result2=$db->query($query1);

$query23= "SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'softy'
AND   TABLE_NAME   = 'lc_transaction';";

$results1=mysqli_query($connect,$query23);

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
               <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>New Order <!-- Transaction</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="newlc.php" method="post" >
            <div class="form-group">
                <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                <tr>
                  <th>Transaction No.</th>
       <td>
  <select name="trans_no" class="form-control nam" value="<?php echo (isset($_POST['trans_no']))? $_POST['trans_no']:'' ?>">
      
       <?php

       while($row1=mysqli_fetch_array($results1)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[0];  
       ?> </option>

     <?php endwhile;?>



</select>
</td>

        
       <th>Opening Date</th>
       <td>
       <input type="Date" class="form-control nam" name="open_date" value="<?php echo (isset($_POST['open_date']))? $_POST['open_date']:'' ?>" placeholder="Opening Date" >
        </td>
      </tr>
      <tr>
       <th>LC/BC No.</th>
       <td>
       <input type="text" class="form-control nam" name="lc_bc_no" value="<?php echo (isset($_POST['lc_bc_no']))? $_POST['lc_bc_no']:'' ?>"  placeholder="LC/BC No." >
       </td>
       <th>Bank </th>
       <td>
       <input type="text" class="form-control nam" name="bank" value="<?php echo (isset($_POST['bank']))? $_POST['bank']:'' ?>" placeholder="Bank" > 
       </td>
      </tr>
      <tr>
       
       <th>Party</th>
       <td>
       <input type="text" class="form-control nam" name="party" value="<?php echo (isset($_POST['party']))? $_POST['party']:'' ?>" placeholder="Party" >
       </td>
       
       
       <th>Indentor</th>
<td>
              <select name="indentor_id" class="form-control nam"  value="<?php echo (isset($_POST['indentor_id']))? $_POST['indentor_id']:'' ?>" >
                 <option value="">Select Indentor id</option>
                     <option ><?php echo (isset($_POST['indentor_id']))? $_POST['indentor_id']:'' ?></option>

      
       <?php

       while($row1=mysqli_fetch_array($result1)):;?>
       <option value=<?php echo $row1[0]  ?> >
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>


</select>

       </td>
      </tr>
      <tr>
       
       
       <th>Supplier</th>
       <td>
       <select name="supplier_id" class="form-control nam" >
        <option value="">Select Supplier id</option>
       <option ><?php echo (isset($_POST['supplier_id']))? $_POST['supplier_id']:'' ?></option>

       <?php


       while($row1=mysqli_fetch_array($result2)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>


</select>

       </td>

       <th>Remarks</th>
       <td>
       <input type="text" class="form-control nam" name="remarks" value="<?php echo (isset($_POST['remarks']))? $_POST['remarks']:'' ?>" placeholder="Remarks" >
       </td>
      </tr>
      </table> -->
<?php
  $page_title = 'Add Sale';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(12);

   include 'config.php' ;


?>

<?php

if(isset($_POST['printrr']))  
{

$cn=new mysqli("localhost","root","","softy");

    $open_date = $_POST['open_date'];
    $lc_bc_no = $_POST['lc_bc_no'];
    $bank = $_POST['bank'];

    $party = $_POST['party'];
    $indentor = $_POST['indentor_id'];
    $supplier = $_POST['supplier_id'];
    $remarks = $_POST['remarks'];

  $query="INSERT into lc_transaction(open_date, lc_bc_no, bank, party, indentor, supplier, remarks) VALUES
   ('$open_date', '$lc_bc_no', '$bank', '$party', '$indentor', '$supplier', '$remarks') ";
  

for($i = 0; $i<count($_POST['item']); $i++)  
{  

$cn->query("INSERT INTO lc_details  
SET   
lc_trans_id = '{$_POST['trans_no']}', 
product_id = '{$_POST['item1'][$i]}',  
qty = '{$_POST['qty'][$i]}',  
price = '{$_POST['price'][$i]}'");   

}
$queryt="TRUNCATE table temp_sales";

   
     if($db->query($query) && $db->query($queryt))
     {

        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="newlc.php"';
        echo '</script>';
     
     } 

else 
     {
        echo '<script language="javascript">';
        echo 'alert("Registeration Failed"); location.href="newlc.php"';
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
    
    
   $query = "insert into sales(product_id,qty,price,date,bno,cust) values ('$id','$q' ,'$p' ,  '$b_no','$cust')" ;

  
  $conn->query($query) ;




  $query = "select * from product where name = '$i'" ;

  $result = $conn->query($query) ;


 $row = $result->fetch_assoc() ;

$y =  $row['product_title'] ;

}
}



@$item=$_POST['item'];
@$qty=$_POST['qty'];
@$price=$_POST['price'];



for($j =  0 ; $j < sizeof($item) ; $j++)
{
  $i = $item[$j] ;
  $q = $qty[$j] ;
  $pr = $price[$j] ;

  $l = "update temp_sales set name = '$i', pric = '$pr' ,  quantity = '$q' where name = '$i'" ; 
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

      $tp = $_POST['tp'] ;

      $q = "select * from newitem_reg where product_title = '$tp' " ;
      $res = $conn->query($q) ;
      $r = $res->fetch_assoc() ;
     $price = $r['trade_price'] ;
     $id = $r['id'] ;

     if(empty($price))
     {

      $q = "insert into temp_sales(prod_id, name,pric,quantity) values('$id','$tp','0','0')" ;
      $conn->query($q) ;
    }

    else
    {
            $q = "insert into temp_sales(prod_id, name,pric,quantity) values('$id', '$tp','$price','0')";
      $conn->query($q) ;
    }

     }

             ?>


          <?php
          
 
    $grand = 0 ;
$sum=0; 

          $qu = "select * from temp_sales" ;

          if($res = $conn->query($qu))
          {
            while ($row = $res->fetch_assoc()) {

              $n = $row['pric'] ;
              $m = $row['quantity'] ; 
    
              $sum = $n * $m ; 

              ?>

           <tr class="clone" class="row">

<input type="hidden"  name="item1[]" id="item" value="<?php echo $row['prod_id']?>" class=' item' autocomplete="off" onkeypress="x(this.id)" >


<td class="col-xs-3"><input  name="item[]" id="item" value="<?php echo $row['name']?>" class=' item' autocomplete="off" onkeypress="x(this.id)" ></td>


<td class="col-xs-3"> <input type="number" step="any" value="<?php


if($row['quantity'] == 0){  } else{ echo $row['quantity'] ; } ?>" name="qty[]" class='input quantity mousetrap nami'/></td>
<td class="col-xs-3"> <input type="number" step="any" value="<?php echo $row['pric']?>" name="price[]" class='input price mousetrap'/></td>
<td><?php echo $row['quantity'] * $row['pric']  ?></td>
  <td>
  
                     <a href="temp_newlc.php?id=<?php echo (int)$row['id'];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
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

     
      

    




