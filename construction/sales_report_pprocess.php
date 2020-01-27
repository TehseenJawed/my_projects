<?php
$page_title = 'TAYYAB ELECTRONICS';
$results = '';
  require_once('includes/load.php');
  include 'config.php' ;
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php

  include 'config.php' ;

  if(isset($_SESSION['b'])){


$r = $_SESSION['b'] ;

    $query = "select * from sales where bno = '$r' " ;

    $result = $conn->query($query) ;

  } else {
    
    redirect('add_ssale.php', false);
  }
?>
<!doctype html>
<html lang="en-US">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Default Page Title</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
   <style>
   @media print {
     html,body{
        font-size: 9.5pt;
        margin: 0;
        padding: 0;
     }.page-break {
       page-break-before:always;
       width: auto;
       margin: auto;
      }
    }
    .page-break{
      width: 500px;
      margin: 0 auto;
    }
     .sale-head{
       margin: 40px 0;
       text-align: center;
     }.sale-head h1,.sale-head strong{
       padding: 10px 20px;
       display: block;
     }.sale-head h1{
       margin: 0;
       border-bottom: 1px solid #212121;
     }.table>thead:first-child>tr:first-child>th{
       border-top: 1px solid #000;
      }
      table thead tr th {
       text-align: left;
       border: 1px solid #ededed;
     }table tbody tr td{
       vertical-align: middle;
     }.sale-head,table.table thead tr th,table tbody tr td,table tfoot tr td{
       border: 1px solid #212121;
       white-space: nowrap;
     }.sale-head h1,table thead tr th,table tfoot tr td{
       background-color: #f8f8f8;
     }tfoot{
       color:#000;
       text-transform: uppercase;
       font-weight: 500;
     }


    .abc
    {
      font-size: xx-large;
      font-weight: bolder;

    }

   </style>
</head>
<body>
  
    <div class="page-break">
       <div style="margin-left: 250px" class="sale-head pull-right">
           <h1>TAYYAB ELECTRONICS</h1>
             <h4 >Bill No: &nbsp <?php $x = $_SESSION['b'] ; echo $x  ?></h4>
             <h4> <?php
// set the default timezone to use. Available since PHP 5.1
echo "Date: ".date("Y/m/d") . "<br>";


// Prints something like: Monday 8th of August 2005 03:12:46 PM


 ?></h4>  
           <strong> </strong>
       </div>
      <table class="table table-border">
        <thead>
          <tr >
              <th class="abc">Date</th>
              <th class="abc">Product Title</th>
              <th class="abc">Rate Price</th>
         
              <th class="abc">Total Qty</th>
              <th class="abc">TOTAL</th>
          </tr>
        </thead>
        <tbody>

        <?php
        

        $sum = 0 ;

        while($row = $result->fetch_assoc())
         {

             $p = $row['product_id'] ;

            $q = "select * from products where id = '$p' " ;

            $r = $conn->query($q) ;

            $name = $r->fetch_assoc() ;



             $t = $row['price'] * $row['qty'] ;
           $sum = $sum + $t ;

        ?>

      
           <tr>
              <td class="abc"><?php echo $row['date'] ?></td>
              <td class="desc abc">
                <h6><?php echo $name['name'] ?></h6>
              </td>
              <td class="text-right abc"><?php echo $row['price'] ?></td>
      
              <td class="text-right abc"><?php echo $row['qty'] ?></td>
              <td class="text-right abc"><?php $tot = $row['price'] * $row['qty'] ; 


               echo $tot ?>
                 

               </td>
          </tr>


          <?php

 
       }


          ?>
      
        </tbody>
        <tfoot>
         <tr class="text-right">
           <td class="abc" style="padding-right: 350px" colspan="4">CONTACT: 03002599688</td>
           <td class="abc" colspan="1">Grand Total</td>


           <td class="abc"> <?php echo $sum ;?>
           
          </td>
         </tr>
   
        </tfoot>
      </table>
    </div>
  </body>
  </html>






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
