<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);

    
$query="SELECT *  from  city_reg";

$result_person=mysqli_query($connect,$query);

?>
<?php
  $page_title = 'Stock Report';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>


 <div class="row">
     <div class="col-md-5">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Stock Report</span>
         </strong>
        </div>
		<div class="panel-body">
          <form action="stockreport.php" method="post" >
     <br>
     <strong>
        <span>All</span>
     </strong>
     <br>
    
    
             <input type="radio" name="select"  value="1" style="50px"><br/>
              <strong>
         <text style= 'margin-left:1px';> <span>To Amount</span></text>
         </strong><br>
           <input name="to_amount" type="text" class="form-control"  style="height: 40px;" placeholder="To Amount">
           <br>

             <strong>

         <text style= 'margin-left:1px';> <span>From Amount</span></text>
         </strong>
         <br>
           <input name="from_amount" type="text" class="form-control"  style="height: 40px;" placeholder=" From  Amount">
<br>
  <button type="submit" name="customer"  class="form-control btn btn-primary">&nbsp&nbsp Process &nbsp&nbsp</button>

      <div style="overflow-x:auto">
 <div class="table-responsive">
          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
                <th style="color: #6fb6d8"> Product ID </th>
                <th style="color: #6fb6d8"> Product Title </th>
                <th style="color: #6fb6d8"> Product Type</th>
                <th style="color: #6fb6d8"> Packing Size </th>
                <th style="color: #6fb6d8"> UOM </th>
                <th style="color: #6fb6d8"> Trade Price </th>
                <th style="color: #6fb6d8"> M.R.P </th>
                <th style="color: #6fb6d8"> Opening Balance </th>
                <th style="color: #6fb6d8"> Product Convention </th>
                <th style="color: #6fb6d8"> Re-Order Quantity </th>
               </tr>
            </thead>
            <tbody>
  </div>
            </div>
      </div>
      </div>
      </div>
</form>
<?php
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        die($problem);
    }
    return $data;
}


  
?>



<?php 

/*if(isset($_POST['select'])){*/
if(isset($_POST['customer']))
 { 
  if(@$_POST['select']){
    $q=new mysqli("localhost","root","","softy");
     $result22 = $q->query("SELECT * FROM newitem_reg n where reorder_quantity<=50");
  }
  else{
     $to_amount= $_POST['to_amount'];

    $from_amount = $_POST['from_amount'];
  
 $q=new mysqli("localhost","root","","softy");
 $result22 = $q->query("SELECT * FROM newitem_reg n where reorder_quantity<=50 And  n.trade_price  BETWEEN '$to_amount' AND '$from_amount' ");
}

while($row=$result22->fetch_array(MYSQLI_NUM))
{  
  

  ?>

   <td class="text-center"> <?php echo remove_junk($row[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[4]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[5]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[6]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[7]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[8]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[9]); ?></td>
                </tr>

 <?php


 
  }
/*}*/
}
?>

<br>
<br>
<br>
<br>
<br>

 
   





  
	
	 

	

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
window.location.assign("comp_reg.php")
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
<!-- <script>
function myFunction2() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}


function myFunction1() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput23");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}


function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script> -->