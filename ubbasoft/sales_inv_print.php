<?php
  $page_title = 'Sales Invoice';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
//   page_require_level(5);
 // $products = join_item_table();
?>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
</head>
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}</style>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
<strong>
           <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>&nbspSales Invoice</h1>
         </strong>
         

       
        <div class="panel-body">


          <div class="table-responsive">
          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
                
                <th style="color: #6fb6d8""> Invoice No  </th>
                <th style="color: #6fb6d8""> Date </th>
                 <th style="color: #6fb6d8""> Customer id </th>
                <th style="color: #6fb6d8""> Sales Person id </th>
                 <th style="color: #6fb6d8""> Payment Paid </th>
                 <th style="color: #6fb6d8""> Payment Remaining </th>
                 <th style="color: #6fb6d8""> Old Balance </th>
                
                
              </tr>
            </thead>
            <tbody>

              <?php
              
                $inv1=$_GET['i'];
              
             


               $query="SELECT * FROM invoice i, customer_reg j, newvendor_reg k WHERE i.customer_id = '$inv1' 
               and k.id = i.sale_person_id and i.customer_id = j.id";
               include 'config.php' ;
              $products=mysqli_query($conn,$query);
              while($product=mysqli_fetch_array($products)) 
              {
                ?>
              
              <tr>
                
                <td class="text-center"> <?php echo remove_junk($product['1']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['3']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['4']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['9']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['5']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['6']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['7']); ?></td>

               <!-- <td class="text-center"> <?php echo remove_junk($product['12']); ?></td>
                 <td class="text-center"> <?php echo remove_junk($product['pack_size']); ?></td> -->
                <!-- <td class="text-center"> <?php echo remove_junk($product['uom']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['trade_price']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['mrp']); ?></td>
                            <td class="text-center"> <?php echo remove_junk($product['opb']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['product_convention']); ?></td> -->
                <!--<td class="text-center"> <?php echo remove_junk($product['7']); ?></td>-->

                
              </tr>

            
             
             
            </tbody>
            <script type="text/javascript">
              window.print();
            </script>
          </tabel>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('layouts/footer.php'); ?>



<?php  } ?>
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
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>