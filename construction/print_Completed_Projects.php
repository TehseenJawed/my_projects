<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
<script>
  window.print();
</script>
<?php
  $page_title = 'Search Client';
 
  require_once('includes/sql.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
  $all_categories = find_all('categories');
  include('config.php');

$q=new mysqli("localhost","asteamso_soft","5karachi5","asteamso_soft");
?>

<?php //include_once('layouts/header.php'); ?>

<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #2b9cbd;
      box-shadow: 10px 10px 5px #8080805c;

</style>
  <div class="row">
     <div class="col-md-2">
     
     </div>
  <div class="col-md-8">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color:#c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Completed Projects</h1>
         </strong>
        </div>
        <?php 
          $getCompletePro = $q->query("SELECT SUM(profit) as Tprofile from complete_pro");
          $rowProfit = $getCompletePro->fetch_array();

          $getCompleteEExpense = $q->query("SELECT SUM(extra_expense) as TEexpense from complete_pro");
          $rowEepense = $getCompleteEExpense->fetch_array();

          $getCompleteIExpense = $q->query("SELECT SUM(one_expense) as TIexpense from complete_pro");
          $rowIepense = $getCompleteIExpense->fetch_array();
          $getCost = $q->query("SELECT SUM(cost) as Tcost from complete_pro");
          $rowCost= $getCost->fetch_array();

          $TotalExpense = $rowIepense['TIexpense'] +$rowEepense['TEexpense'] ;


        ?>
     <div class="panel-body">
          
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>
			 <th>Total Profit</th>
			 
<td class="text-center"> <?php echo $rowProfit['Tprofile']; ?> </td>
			
			 	
			<th>Total Inventory Expenses</th>
		<td class="text-center"> <?php echo $rowIepense['TIexpense']; ?></td>
  </tr>
  <tr>
			<th>Total Extra Expenses</th>
      <td class="text-center"> <?php echo $rowEepense['TEexpense'] ?></td>

       <th>Total Cost</th>
      <td class="text-center"> <?php echo $rowCost['Tcost']; ?></td>
   </tr>
    <tr>
       <th>Total Grand Expenses</th>
      <td class="text-center"> <?php echo $TotalExpense; ?></td>
    
 </tr>
      </div>
            </div>
      </div>
	  
	  
	    <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr>
        <!--  <td>
        <input class=" form-control nam" type="text" id="myInput1" onkeyup="myFunction1()"   placeholder="Search by name">
       </td> -->
        
  </table>
	  
	
            </div>
  
</div>
</div>
</div>
</div>
<br>
<div class="qq">
<div class="panel panel-default">
   
 <div class="panel-body">
 <div class="table table-responsive">
  <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
                 <th style="color: #6fb6d8">S.NO#</th>
                <th style="color: #6fb6d8"> Project ID</th>
                <th style="color: #6fb6d8">  Details</th>
                <th style="color: #6fb6d8"> Start Date</th>
                <th style="color: #6fb6d8"> End Date</th>
                <th style="color: #6fb6d8"> Inventory Expenses</th>
                <th style="color: #6fb6d8"> Extra Expenses</th>
				 <th style="color: #6fb6d8"> Cost</th>
                <th style="color: #6fb6d8"> Received</th>
                <th style="color: #6fb6d8"> Total Expenses</th>
                <th style="color: #6fb6d8"> Profit</th>
                
              </tr>
            </thead>
            <tbody>


      </div>
	
            </div>
      </div>
      </div>
      </div>
    
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

$result = $q->query("SELECT * FROM  complete_pro");
    

while($row=$result->fetch_array(MYSQLI_NUM)) 
{  
  ?>
   <td class="text-center"> <?php echo remove_junk($row[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[4]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[10]); ?></td>
               
                 <td class="text-center"> <?php echo remove_junk($row[11]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[5]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[6]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[8]); ?></td>
                 <td class="text-center"> <?php echo remove_junk($row[9]); ?></td>
                
  

              </tr>

 <?php


 
  }

?>



	

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
<script>
function myFunction2() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
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


function myFunction1() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
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
    td = tr[i].getElementsByTagName("td")[6];
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