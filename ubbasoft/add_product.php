<?php
  $page_title = 'Add GODOWN PRODOCTS';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(5);

   include('config.php');
?>


<?php



if( isset($_POST['item']))
{
$item=$_POST['item'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$prices=$_POST['prices'];
$cat = $_POST['cat'] ;

for( $j=0 ; $j<sizeof($item) ; $j++)
{  
   $i = $item[$j] ;
   $p = $price[$j] ;
   $q = $qty[$j] ;
   $ps = $prices[$j] ;
   $c = $cat[$j] ;



$query = "insert into products(name,quantity,buy_price,sale_price,categorie_id,date) values('$i','$q','$p','$ps','$c',now())" ;

if($result = $conn->query($query))
{
  $r = 1 ;

}

else
{
  $r = 0 ;
}

}


if($r == 1 )
{
        header("location : add_product.php");
                echo "<script>window.location = \"add_product.php\"; </script>";
}

}


?>



<?php include_once('layouts/header.php'); ?>
<div class="row">
<h5 style="float: right;">
<b>
  focus --> &nbsp v <br> 
  add new entry --> &nbsp z <br> 
    Key to add all added entries to Godown --> &nbsp b <br> 
  Go to Shop Add Products --> &nbsp - <br> 
   Go to Godown Add Products --> &nbsp + <br> 
      Go to Shop Add Sales --> &nbsp s + a  <br> 
         Go to Godown Add Sales --> &nbsp w <br>
             Go to Shop View Products --> &nbsp o <br>
                 Go to Godown View Products --> &nbsp p <br>
                     Go to Shop View Sales --> &nbsp s + i <br> 
                         Go to Godown View Sales --> &nbsp q <br> 
                         Go to Categories --> &nbsp c <br> 
                         </b>



</h5>
  
</div>
<div class="row">

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>ADD GODOWN PRODUCTS</span>
       </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="add_product.php">
         <table class="table table-bordered">
           <thead>
          <th> Item </th>
              <th> Qty </th>
            <th>Buy Price </th>
             <th>Category </th>
                  <th>Selling Price </th>
        
    
           </thead> 

        <!-- <thead>
          <tr>
            <th class="text-center" style="width: 50px;">Item</th>
            <th class="text-center" style="width: 10px;">Qty</th>
            <th class="text-center" style="width: 10px;">Price</th>
          </tr>
        </thead> -->

                
<tbody  >

             <form method="post" action="add_product.php">

 <tr class="clone" class="row">
<td class="col-xs-6"> <input  type="text" name="item[]" id="item" value="" autocomplete="off" class='input nam'/></td>
 

<td class="col-xs-3"> <input type="number" value="" name="qty[]" class='input quantity mousetrap'/></td>
<td class="col-xs-3"> <input type="number" step=any value="" name="price[]" class='input price mousetrap'/></td>


<td><select name="cat[]">


<?php
$query = "select * from categories" ;

if($result = $conn->query($query))
{
  while ($row = $result->fetch_assoc()) {

?>



<option value="<?php echo $row['id'] ?>"><?php echo $row['name']  ?></option>

<?php

    # code...
  }
}


?>

</select></td>

<td class="col-xs-3"> <input type="number" step=any value="" name="prices[]" class='input price mousetrap'/></td>



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

<p><a href="#" class="add a" rel=".clone" type="hidden">Add More</a></p>

<input class="sub" name="add_sale" type="submit" value=" Submit " />

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
 
<script type="text/javascript">


function as() {
 $('.a').click() ;

  var search = $('.nam');

  search.focus();



}
function s() {


  var search = $('.nam');
  

  search.focus();



}


function rs() {
 $('.remove').click() ;



}

function sub() {
  $('.sub').click() ;



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











Mousetrap.bind('z',as) 
Mousetrap.bind('x',rs) 
Mousetrap.bind('v',s) 
Mousetrap.bind('b',sub) 


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


<script>  
 $(document).ready(function(){  
      $('#item').keydown(function(){  
           var query = $(this).val();  
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
      });  
      $(document).on('click', 'li', function(){  
           $('#item').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  






 </script> 



