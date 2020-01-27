<?php
/*$hostname="158.69.251.113";
$username="inventor_ubbasoft";
$password="ubbasoft12345";
$databaseName="inventor_soft";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);*/
include 'config.php' ;
    
$query="SELECT *  from  province";


$result_person=mysqli_query($conn,$query);

?>
<?php
  $page_title = 'Province Wise';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>

<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #2b9cbd;
      box-shadow: 10px 10px 5px #8080805c;

</style>

 <div class="row">
     <div class="col-md-5">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-8">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Province wise report</h1>
         </strong>
        </div>
    <div class="panel-body">
              <form action="provincewise.php" method="post" >
       <table class="table   table-condensed table-striped  table-hover table-bordered">
     <tr>
      <th>FROM Date</th>
       <td>
       <input type="Date" class="form-control nam" name="from_date" placeholder="From Date">
        </td>



     
      <th>TO Date</th>
       <td>
       <input type="Date" class="form-control nam" name="to_date" placeholder="To Date">
        </td>
        </tr>
        <tr>

        <th>Province Name</th>
        <td colspan="2">
        <select name="sale_person_id" class="form-control nam">Province Name
          <option value="--select Province--" >--Selected Province--</option>

       <?php

       while($row1=mysqli_fetch_array($result_person)):;?>

       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>
       </select>
     </td>
     <td>

             <button type="submit" name="customer"  class="btn btn-primary form-control">&nbsp&nbsp Process &nbsp&nbsp</button>
</td>
</tr>
</table>
      </table>
</form>
</div>
</div>
</div>
</div>
</div>
<br>
<?php
 @$fd = $_POST['from_date'];

    @$ed = $_POST['to_date'];

    @$spid = $_POST['sale_person_id'];

?>
<div class="qq">
   <a href="print_provincewise.php?fd=<?php echo $fd?>&ed=<?php echo $ed?>&spid=<?php echo $spid?>" class="btn btn-success" style="float: right;"><span class="glyphicon glyphicon-open"></span>&nbspPrint</a>
<div class="panel panel-default">
   
 <div class="panel-body">

<table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
                <th style="color: #6fb6d8"> Invoice No. </th>
                <th style="color: #6fb6d8"> Dc_Date  </th>
                <th style="color: #6fb6d8"> Customer Id </th>
                <th style="color: #6fb6d8"> Ref No. </th>
                <th style="color: #6fb6d8"> Sales Person Id </th>
                <th style="color: #6fb6d8"> Remarks </th>
                <th style="color: #6fb6d8"> Product Id </th>
                <th style="color: #6fb6d8"> Product Title </th>
                <th style="color: #6fb6d8"> Pack Size </th>
                <th style="color: #6fb6d8"> Batch No. </th>
                <th style="color: #6fb6d8"> Price </th>
                <th style="color: #6fb6d8"> Quantity </th>
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


if(isset($_POST['customer']))
 {

    $from_date = $_POST['from_date'];

    $to_date = $_POST['to_date'];

    $sale_person_id = $_POST['sale_person_id'];


//$q=new mysqli("158.69.251.113","inventor_ubbasoft","ubbasoft12345","inventor_soft");
$result22 = $conn->query("SELECT * FROM invoice i, customer_reg c, city_reg r where r.id= c.City_ID and i.customer_id = '$sale_person_id'");


//$q=new mysqli("158.69.251.113","inventor_ubbasoft","ubbasoft12345","inventor_soft");
$result22 = $conn->query("SELECT * FROM invoice_detail d, invoice i
inner join customer_reg c, city_reg r, province p 
where i.invoice_no = d.invoice_id 
and i.customer_id = c.id
and c.City_ID= r.id
and r.province_id = p.id
and p.id= '$sale_person_id'
and i.dc_date BETWEEN '$from_date' AND '$to_date' ");


while($row=$result22->fetch_array(MYSQLI_NUM))
{  
   $result223 = $conn->query("SELECT product_title FROM newitem_reg n
  inner join invoice_detail i 
  where '$row[1]' =n.id ");

  $result2231 = $conn->query("SELECT sal_title FROM new_salesman n
  inner join invoice_detail i 
  where '$row[10]' =n.id ");

  $result22311 = $conn->query("SELECT Customer_Name FROM customer_reg n
  inner join invoice_detail i 
  where '$row[8]' =n.id ");


  $row1=$result223->fetch_array(MYSQLI_NUM); 

$row2=$result2231->fetch_array(MYSQLI_NUM); 


$row3=$result22311->fetch_array(MYSQLI_NUM); 
    

  ?>

   <td class="text-center"> <?php echo remove_junk($row[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[7]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row3[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[9]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row2[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[11]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[4]); ?></td>

                <td class="text-center"> <?php echo remove_junk($row[5]); ?></td>
                </tr>


 <?php


 
  }
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
</script>