<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

<?php


    
// $query="SELECT customer_name,id, op_bal as opening_Balance,voucher_cat,ven_cus_id,amount as debit,
// invoice_no,invoice_id,price*qty as credit,(v.amount)-(d.price*qty) as balance from customer_reg c,voucher_transaction v,invoice i,invoice_detail d WHERE i.customer_id=c.id AND v.ven_cus_id=c.id AND v.voucher_cat=1 AND i.invoice_no=d.invoice_id";

// $query="SELECT * from customer_reg";

// $result_person=mysqli_query($connect,$query);
// $row1=mysqli_fetch_array($result_person);
  $page_title = 'Customer Registrations';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(5);
  
    $query1="SELECT * from customer_reg";
  $results= $db->query($query1);

  $products = join_custom_table();
?>
<?php// include_once('layouts/header.php'); ?>
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
<script>
  window.print();
</script>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
<h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Customer Ledger</h1>
         </strong>
        </div>


       <!--  <input class="nam form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> -->
        <div class="panel-body">
          <div class="table-responsive">
          
   
       <?php

       while($row1=mysqli_fetch_array($results)):;?>

       <option value=<?php //echo $row1[0]  ?>>
       <?php //echo $row1[1];  
       ?> </option>

     <?php endwhile;?>
       </select>
        <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
                <th style="color: #6fb6d8"> Date </th>
                <th style="color: #6fb6d8"> Invoice </th>
                <th style="color: #6fb6d8"> Payment Paid</th>
                <th style="color: #6fb6d8"> Payment Remaining </th>
               <!-- <th style="color: #6fb6d8"> Balance</th>
                <th style="color: #6fb6d8"> Remarks</th>-->
              <!--  <th style="color: #6fb6d8"> City ID </th> 
               
                <th style="color: #6fb6d8"> Contact Person </th>
                <th style="color: #6fb6d8"> Designation </th>
                <th style="color: #6fb6d8"> Address </th>
                <th style="color: #6fb6d8"> Phone No </th>
                <th style="color: #6fb6d8"> Fax </th>
                <th style="color: #6fb6d8"> Email </th>
                <th style="color: #6fb6d8"> Sales Tax </th>
                                <th style="color: #6fb6d8""> NTN </th> -->
                                
                
                <!-- <th class="text-center" style="width: 100px;"> Actions </th> -->
              </tr>
            </thead>
            <tbody>
              
             
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('layouts/footer.php'); ?>




<?php


$from = $_GET['fd'];
$to = $_GET['ed'];

  $vendor_id = $_GET['vid'];

include('config.php');
//$q=new mysqli("158.69.251.113","inventor_ubbasoft","ubbasoft12345","inventor_soft");


$result22 = $conn->query("SELECT * FROM voucher_transaction where voucher_type = '2' and voucher_cat = '1' and ven_cus_id= '$vendor_id' and dates between '$from' and '$to'");

$row=$result22->fetch_array(MYSQLI_NUM);

//$q1=new mysqli("158.69.251.113","inventor_ubbasoft","ubbasoft12345","inventor_soft");
$result221 = $conn->query("SELECT * FROM invoice_detail d, invoice i , invoice_pay w where i.invoice_no =       d.invoice_id 
   and i.customer_id= '$vendor_id' and w.custom_id = i.customer_id "); /*and i.customer_id= '$vendor_id'*/
  
  @ $row2=$result221->fetch_array(MYSQLI_NUM); 
$a=0;
$b=0;
$c=$row;
@$f=$row2[16];
@$g=$row2[17];
for ($i=0; $i < (count($row)+count($row2)); $i++) { 


$a=$a+$row2[16];
$b=$b+$row2[17];

if($row=$result22->fetch_array(MYSQLI_NUM))
{?><tr>
                <td class="text-center"> <?php echo remove_junk($row[7]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[6]); ?></td>
                <td class="text-center"> <?php echo remove_junk('0'); ?></td>
              
                </tr>
 <?php
}

else if($row2=$result221->fetch_array(MYSQLI_NUM))
{
?><tr>
                <td class="text-center"> <?php echo remove_junk($row2[9]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row2[7]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row2[16]); ?></td>
                <td class="text-center"> <?php echo remove_junk(@$row2[17]); ?></td>
             
                </tr>
 <?php
}

 
  
}
?>


                <tr>
<td>
</td>
<td> 
                <th style="color: #6fb6d8"> Total:<?php echo @$a-$f ?></th>
</td>

                <th style="color: #6fb6d8"> Total:<?php  echo @$b-$g;?></th>
              </tr>

             

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