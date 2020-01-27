

<?php
  $page_title = 'Purchase Report';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories');

/*$hostname="158.69.251.113";
$username="inventor_ubbasoft";
$password="ubbasoft12345";
$databaseName="inventor_soft";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);*/
include 'config.php' ;
    
$query="SELECT *  from  newvendor_reg";

$result_vendor= mysqli_query($conn,$query);

$query1="SELECT *  from  newitem_reg";

$result_pro=mysqli_query($conn,$query1);

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


<!--  <div class="row">
     <div class="col-md-5">
       <?php echo display_msg($msg); ?>
     </div>
  </div> -->
  
   <div class="col-md-8">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Purchase Report</h1>
         </strong>
        </div>
		<div class="panel-body">
          <form action="Purchase_report.php" method="post" >
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


</div>

  




      
      
      <tr>
      
        <td colspan="2"> <input type="checkbox" name="vendor" id="vendor" value="vendor" onchange="valueChanged()">All Vendors<br></td>

        <td colspan="2"> <input type="checkbox" name="product" id="product" value="product" onchange="valueChanged1()"/> All Products<br></td>
      
      </tr>
      
      
      <script type="text/javascript">

    function valueChanged(){
    if (document.getElementById('vendor').checked) 
        {document.getElementById("subnetmaskdiv").style.display = 'none';
    }
   
    else
       { document.getElementById("subnetmaskdiv").style.display = 'block';
    }}
    
    function valueChanged1(){
    
    if (document.getElementById('product').checked) 
        {document.getElementById("subnetmaskdiv1").style.display = 'none';
    } 
    else{
        document.getElementById("subnetmaskdiv1").style.display = 'block';
    }} 

</script>
     
      
      <tr>
          
       <th>Vendor:</th>
        <td></div>
        <select id="subnetmaskdiv" name="vendor_id" class="form-control nam">
          
       <?php
        $row2=mysqli_fetch_array($result_vendor)?>
       <option value=<?php echo $row1[1]; ?>> Choose Vendor </option>
      <?php 
       while($row2=mysqli_fetch_array($result_vendor)):;?>
        
       <option value=<?php echo $row2[0]  ?>>
       <?php echo $row2[1];  
       ?> </option>

     <?php endwhile;?>
       </select>
     </td>
       
         
         <br>
         
         
        <th>Product:</th>
        <td id="subnetmaskdiv1">
        <select name="product_id" class="form-control nam">
          
       <?php ?>
       
       <option value=" "> Choose Product </option>
      <?php 
       while($row1=mysqli_fetch_array($result_pro)):;?>
       
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>
       </select>
     </td>
      </tr>
      </table>
      
      

      <tr>
        <td colspan="4">

             <button type="submit" name="customer"  class="btn btn-primary form-control">&nbsp&nbsp Process &nbsp&nbsp</button>
</td>
</tr>

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

    @$vid= $_POST['vendor_id'];

    @$pid = $_POST['product_id'];
?>
<div class="qq">
<a href="print_Purchase_report.php?fd=<?php echo $fd?>&ed=<?php echo $ed?>&vid=<?php echo $vid?>&pid=<?php echo $pid?>" class="btn btn-success" style="float: right;"><span class="glyphicon glyphicon-open"></span>&nbspPrint</a>
<div class="panel panel-default">
   
 <div class="panel-body">
    
          
     <table class="table   table-condensed table-striped  table-hover table-bordered">
            <thead>
              <tr>
                <th style="color: #6fb6d8"> Tran No. </th>
                <th style="color: #6fb6d8"> Date  </th>
                <th style="color: #6fb6d8"> Product Id </th>
                <th style="color: #6fb6d8"> Product Title</th>
                <th style="color: #6fb6d8"> DC # </th>
                <th style="color: #6fb6d8"> QTY </th>
                <th style="color: #6fb6d8"> Price </th>
                <th style="color: #6fb6d8"> S.T.</th>
                <th style="color: #6fb6d8"> F.E.D </th>
                <th style="color: #6fb6d8"> I.T. </th>
                <th style="color: #6fb6d8"> O.Ch. </th>
                <th style="color: #6fb6d8"> Total </th>
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

    $vendor_id= $_POST['vendor_id'];

    $product_id = $_POST['product_id'];



//$q=new mysqli("158.69.251.113","inventor_ubbasoft","ubbasoft12345","inventor_soft");
include 'config.php' ;
$result22 = $conn->query("SELECT d.id,i.p_date,d.product_id,d.qty,d.price,d.total,h.product_title FROM purchase_trans_detail d 
, purchase_trans i ,newitem_reg h
where h.id = d.id and d.id = i.id

and i.vendor_id ='$vendor_id'



 ");


while($row=$result22->fetch_array(MYSQLI_NUM))
{  
//   $result223 = $q->query("SELECT product_title FROM newitem_reg n
//   inner join invoice_detail i 
//   where '$row[1]' =n.id ");

//   $result2231 = $q->query("SELECT sal_title FROM new_salesman n
//   inner join invoice_detail i 
//   where '$row[10]' =n.id ");

//   $result22311 = $q->query("SELECT Customer_Name FROM customer_reg n
//   inner join invoice_detail i 
//   where '$row[8]' =n.id");


//   $row1=$result223->fetch_array(MYSQLI_NUM); 

// $row2=$result2231->fetch_array(MYSQLI_NUM); 


// $row3=$result22311->fetch_array(MYSQLI_NUM); 
    

  ?>


   <td class="text-center"> <?php echo remove_junk($row[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[6]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[9]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[4]); ?></td>

                <td class="text-center"> <?php echo remove_junk($row[9]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[9]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[9]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[9]); ?></td>

                <td class="text-center"> <?php echo remove_junk($row[5]); ?></td>
                </tr>


 <?php


 
  }
?>

                
              <?php

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