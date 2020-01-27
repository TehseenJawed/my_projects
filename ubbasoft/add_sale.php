<?php
  $page_title = 'Add Sale';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);

   include 'config.php' ;


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['delete']) && (int)$_GET['delete'] > 0){
        $query2 = "delete from temp_sale where temp_id = '".(int)$_GET['delete']."' ";
        $conn->query($query2);

        $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
        if ($_SERVER["SERVER_PORT"] != "80")
        {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        }
        else
        {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }

        $url = parse_url($pageURL, PHP_URL_PATH);
        header('Location: '.$url);
        exit();
    }
}








?>






<?php




if(isset($_POST['item']))
{

if(isset($_POST['add_sale']))
{

  $cust = $_POST['cust'] ;


$u = "delete from temp_sale where 1" ;
$conn->query($u) ;

$item=$_POST['item'];
$qty=$_POST['qty'];
$price=$_POST['price'];




$query = "select * from bill order by bill_id desc" ;


 $result = $conn->query($query) ;


 $row = $result->fetch_assoc() ;

$x =  $row['bno'] ;
    
if(empty($x)) 
{
   
   $b_no = "1" ;

 for( $j=0 ; $j<sizeof($item) ; $j++)
{
   $i = $item[$j] ;
   $p = $price[$j] ;
   $q = $qty[$j] ;

   if(empty($p))
   {

    $qu = "select * from product where name = '$i'" ;
    $rem = $conn->query($qu) ;
    $re = $rem->fetch_assoc() ;

    $p = $re['sale_price'] ;


   }


    
   $query = "insert into bill(q,pr,date,p,bno,cust) values ('$q' ,'$p' , now() , '$i' , '$b_no','$cust')" ;

  
  $conn->query($query) ;

  $query = "select * from product where name = '$i'" ;

  $result = $conn->query($query) ;


 $row = $result->fetch_assoc() ;

$y =  $row['name'] ;


if(empty($y))
{

$qu = 0 - $q  ;
  $query = "insert into product(name,quantity,buy_price,sale_price,categore_id,date) values

  ('$i','$qu','0','$p','1',now())

  " ;

   $conn->query($query) ;



}

else
{
  $v = $row['id'] ;
  update_prod_qty($q,$v) ;


}


  $r = 1 ;
   

   }
   

}   


else
{


 $x = $x + 1 ;
 $b_no = $x ;


 for( $j=0 ; $j<sizeof($item) ; $j++)
{
   $i = $item[$j] ;
   $p = $price[$j] ;
   $q = $qty[$j] ;



  if(empty($p))
   {

    $qu = "select * from product where name = '$i'" ;
    $rem = $conn->query($qu) ;
    $re = $rem->fetch_assoc() ;

    $p = $re['sale_price'] ;


   }


    
   $query = "insert into bill(q,pr,date,p,bno,cust) values ('$q' ,'$p' , now() , '$i' , '$b_no','$cust')" ;

  
  $conn->query($query) ;


  $query = "select * from product where name = '$i'" ;

  $result = $conn->query($query) ;


 $row = $result->fetch_assoc() ;

$y =  $row['name'] ;


if(empty($y))
{
  
  $query = "insert into product(name,quantity,buy_price,sale_price,categorie_id,date) values

  ('$i','$q','0','$p','1',now())

  " ;

   $conn->query($query) ;



}


else
{
  $v = $row['id'] ;
  update_prod_qty($q,$v) ;


}


  $r = 1 ;
   

   }





}






if($r == '1')
{$_SESSION['bill'] = $b_no ;
    header("location : sale_report_process.php");
                echo "<script>window.location = \"sale_report_process.php\"; </script>";
}


}


else
{


$item=$_POST['item'];
$qty=$_POST['qty'];
$price=$_POST['price'];


for($j =  0 ; $j < sizeof($item) ; $j++)
{
  $i = $item[$j] ;
  $q = $qty[$j] ;
  $pr = $price[$j] ;


  $l = "update temp_sale set name = '$i', pric = '$pr' ,  quantity = '$q' where name = '$i'" ; 
  $conn->query($l) ;               


}

}

}


?>



<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>

  </div>
</div>
 <h1 style="margin-left: 200px ; margin-bottom: 50px">ADD SHOP SALE</h1>

<h4 style="float: right"><b>add new entry-->&nbsp v
<br><br>
enter customer name-->&nbsp t
<br><br>
print bill at sales page-->&nbsp b
<br><br>
focus on product quantity-->&nbsp z
<br><br>
update entries-->&nbsp x</b></h4>

 <form style="margin-bottom: 150px" method="post" action="add_sale.php" >

       <input class="nam" type="text" id = "automplete-2" name="tp">
       <input type="submit" name="sibby">
     
       
    </form>

<div class="row">

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>ADD SHOP SALE</span>
       </strong>
      </div>


      <div class="panel-body">


   

        <form method="post" action="add_sale.php">
         <table class="table table-bordered">
           <thead>
          <th> Item </th>
              <th> Qty </th>
            <th> Price </th>
                  <th> Sub Total </th>
        
    
           </thead> 

        <!-- <thead>
          <tr>
            <th class="text-center" style="width: 50px;">Item</th>
            <th class="text-center" style="width: 10px;">Qty</th>
            <th class="text-center" style="width: 10px;">Price</th>
          </tr>
        </thead> -->

                
<tbody  >



             <form method="post" action="add_sale.php">

             <label>Customer Name:&nbsp &nbsp </label>
             <input class="cust" type="text" name="cust">


             <?php  

  
     if(isset($_POST['sibby']))
     {
      $tp = $_POST['tp'] ;

      $q = "select * from product where name = '$tp' " ;
      $res = $conn->query($q) ;
      $r = $res->fetch_assoc() ;
     $price = $r['sale_price'] ;

     if(empty($price))
     {
      $q = "insert into temp_sale(name,pric,quantity) values('$tp','0','0')" ;
      $conn->query($q) ;
    }

    else
    {
            $q = "insert into temp_sale(name,pric,quantity) values('$tp','$price','0')" ;
      $conn->query($q) ;
    }

     }

 

             ?>


          <?php
          
 
    $grand = 0 ;

          $qu = "select * from temp_sale" ;

          if($res = $conn->query($qu))
          {
            while ($row = $res->fetch_assoc()) {

              $n = $row['pric'] ;
              $m = $row['quantity'] ; 
    


               $sum = $n * $m ; 

              ?>


           <tr class="clone" class="row">







<td class="col-xs-3"><input  name="item[]" id="item" value="<?php echo $row['name']?>" class=' item' autocomplete="off" onkeypress="x(this.id)" ></td>





 

<td class="col-xs-3"> <input type="number" step="any" value="<?php


if($row['quantity'] == 0){  } else{ echo $row['quantity'] ; } ?>" name="qty[]" class='input quantity mousetrap nami'/></td>
<td class="col-xs-3"> <input type="number" step="any" value="<?php echo $row['pric']?>" name="price[]" class='input price mousetrap'/></td>
<td><?php echo $row['quantity'] * $row['pric']  ?></td>
  <td><a class="btn btn-primary" href="add_sale.php?delete=<?php echo $row['temp_id']; ?>">delete</a></td>



</tr>

            





<!-- 
<tr class="clone">
<div class="row">
             <div class="col-xs-6">
               <div class="form-group">
                <input type="text" class="form-control nam" class='input nam' name="item[]" value="" placeholder="Categorie Name">
              </div>
            </div>
             <div class="col-xs-3"><div class="form-group">
                <input type="number" class="form-control nam" class='input quantity mousetrap' value="" name="qty[]" placeholder="Qty">
            </div>
            
            </div>
            <div class="col-xs-3"><div class="form-group">
                <input type="number" class="form-control nam" class='input price mousetrap' value="" name="price[]" placeholder="Price">
            </div>
            </div>
        </div>
  <tr/> -->





              <?php

              $grand = $grand + $sum ;
              # code...
            }
          }


          ?>

        
          <h1>Grand Total: <?php echo $grand ; ?> </h1>

          <?php 

          ?>   

          <input class="sub" name="add_sale" type="submit" value=" Submit " />
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



function cust() {


  var search = $('.cust');
  

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



</script>







<!--



<script>  



            function x(e)
            {
          var x = document.getElementById(e) ;
          var query = x.innerHTML.valueOf() ;
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }






            }









 </script> 







-->




      <script>

      
<?php


$ar = array();
include 'config.php' ;


$q = "select * from product" ;

if($res = $conn->query($q))

{

   while ($row = $res->fetch_assoc()) {

    array_push($ar,$row['name']); 


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