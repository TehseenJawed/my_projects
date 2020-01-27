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

  if(isset($_SESSION['bill'])){


$r = $_SESSION['bill'] ;

    $query = "select * from bill where bno = '$r' " ;

    $result = $conn->query($query) ;

  } else {
    
    redirect('add_sale.php', false);
  }
?>
<!doctype html>
<html lang="en-US">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
   <style>
   @media print {
     html,body{

        font-size: 90pt;
        margin: 0;
        padding: 0;
     }.page-break {
       page-break-before:always;
       width: 80px;
       margin: 0;
      }
    }
    .page-break{
      width: 600px;
      margin: 0 auto;
    }
     .sale-head{
       margin: 20px 0;
       text-align: center;
     }.sale-head h1,.sale-head strong{
       padding: 25px 100px;
       display: block;
     }.sale-head h1{
       margin: 0;
       border-bottom: 1px solid #212121;
     }.table  >thead:first-child>tr:first-child>th{
       border-top: 1px solid #000;

      }
      table thead tr th {

       
       border: 1px solid #ededed;
       font-weight: 1000;
     }table tbody tr td{
       vertical-align: left; margin-right:100px;
     }.sale-head,table.table thead tr th,table tbody tr td,table tfoot tr td{
       border: 1px solid #212121;
       font-weight: 1000;
       white-space:
     }.sale-head h1,table thead tr th,table tfoot tr td{
       background-color: #f8f8f8;
     }tfoot{
       color:#000;
       text-transform: uppercase;
       font-weight: 1000;
     }
   </style>
</head>
<body>






    <div class="page-break">
       <div  style="margin-left:1000px" class="sale-head pull-right">
           <h1> <font size="7">TAYYAB ELECTRONICS</font></h1>
             <h1> Bill No: &nbsp <?php $x = $_SESSION['bill'] ; echo $x  ?> 
             </h1>
             <h1> <?php
// set the default timezone to use. Available since PHP 5.1
echo "Date: ".date("Y/m/d") . "<br>";


// Prints something like: Monday 8th of August 2005 03:12:46 PM


 ?>

            <?php  

             $row = $result->fetch_assoc() ;
             $name = $row['cust'] ;
            ?>
   
        <h2>Customer Name: <?php echo $name;  ?></h2>
   <h1> CONTACT: 03002599688  </h1>


 </h1>  
           <strong><h3>NO RETURN - NO EXCHANGE</h3> </strong>
       </div>

<table style="align: left" class="table table-border"  > 
        <thead>
          <tr>
             
              <th><h1>PCS</h1></th>
              <th><h1>ITEM</h1></th>
              <th><h1>RATE</h1></th>
                <th><h1>T</h1></th>
          </tr>
        </thead>
        <tbody>

        <?php

        $query = "select * from bill where bno = '$r' " ;

    $result = $conn->query($query) ;
        

        $sum = 0 ;

        while($row = $result->fetch_assoc())
         {
                 

             $t = $row['pr'] * $row['q'] ;
           $sum = $sum + $t ;
         
        ?>

      
           <tr>
        
              <td class="desc"> 
                <h1><?php $str = strtoupper($row['q']); echo $str ?></h1>
              </td>
              <td > <h1> <?php echo $row['p'] ?> </h1> </td>
               <td > <h1> <?php echo $row['pr'] ?> </h1> </td>
              <td >   <h1> <?php $tot = $row['pr'] * $row['q'] ; 


               echo $tot ?>
                 
</h1>
               </td>



          </tr>


          <?php

 
       }


          ?>
      
        </tbody>



        <tfoot>
         <tr class="text-right">
           <td style="padding-right: 20px; padding-bottom: 0cm" colspan="3"><h1> Grand Total: <?php echo $sum ;?>  </h1></h1>  <h1>

           
       

        <footer style="margin-top: 80px">
            <h3>softyware Designed and Developed By: </h3>
           <h2> UBBAsofty <h2>

           <h2> www.ubbasofty.com<h2>
           <h2>www.facebook.com/ubbasofty</h2>
           <h2>contact: 03412165645, 03212779297, 03170502441</h2>


        </footer>




      
          


            </h4>
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
