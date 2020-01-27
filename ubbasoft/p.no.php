<?php
  $page_title = 'P. No Report';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(5);
 $queryy="SELECT * FROM purchase_trans";
 $res=$db->query($queryy);
?>
<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
           <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>&nbspP.No Report</h1>
         </strong>

        </div>
        <?php
 @$pno = $_POST['pno'];
?>
  
        <div class="panel-body">

           <div class="panel-body">
          <form action="p.no.php" method="post" >
     <table class="table   table-condensed table-striped  table-hover table-bordered">
     <tr>
       <th><strong><center>P No:</center></strong></th>
       <td></td>
       <td>
     <select name="pno" class="form-control nam">Province Name

       <?php

       while($row1=mysqli_fetch_array($res)):;?>

       <option value=<?php echo $row1[4]  ?>>
       <?php echo $row1[4];  
       ?> </option>

     <?php endwhile;?>
       </select>     
            </td>
        <td></td>
        <td colspan="2">

             <button type="submit" name="stock"  class="btn btn-primary form-control">&nbsp&nbsp Process &nbsp&nbsp</button>
           </td>
      </tr>
    </table>
  </form>
          <a href="print_p.no.php?pno=<?php echo $pno?>" class="btn btn-success" style="float: right;"><span class="glyphicon glyphicon-open"></span>&nbspPrint</a>
          <div class="table-responsive">
          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>

                 <th style="color: #6fb6d8""> Trans #. </th>
                <th style="color: #6fb6d8""> Date  </th>
               <!--  <th style="color: #6fb6d8""> Prod Type </th> -->
                <th style="color: #6fb6d8""> Vendor </th>
                <th style="color: #6fb6d8""> T.P. </th>
                <th style="color: #6fb6d8""> Qty </th>
                <th style="color: #6fb6d8""> Total </th>
               <!--  <th style="color: #6fb6d8""> OPB </th>
                <th style="color: #6fb6d8"> Prod Convention </th>
                <th style="color: #6fb6d8"> Re-order qty </th>
               -->
              
              </tr>
            </thead>
            

              </tr>

            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('layouts/footer.php'); ?>
<?php 


if(isset($_POST['stock']))
 {

    $pno = $_POST['pno'];

include('config.php');
//$q=new mysqli("158.69.251.113","inventor_ubbasoft","ubbasoft12345","inventor_soft");
$result22 = $conn->query("SELECT d.qty,d.price,d.total,i.p_date,d.id, i.vendor_id FROM purchase_trans_detail d, purchase_trans i
where i.id = d.id  
and i.pno ='$pno'

");





while($row=$result22->fetch_array(MYSQLI_NUM))
{  $i=$row['5'];
   $result223 = $conn->query("SELECT n.ven_title FROM newvendor_reg n
   inner join invoice_detail i 
   where n.id= $i ");

//   $result2231 = $q->query("SELECT sal_title FROM new_salesman n
//   inner join invoice_detail i 
//   where '$row[10]' =n.id ");

//   $result22311 = $q->query("SELECT Customer_Name FROM customer_reg n
//   inner join invoice_detail i 
//   where '$row[8]' =n.id ");



   $row1=$result223->fetch_array(MYSQLI_NUM); 

// $row2=$result2231->fetch_array(MYSQLI_NUM); 


// $row3=$result22311->fetch_array(MYSQLI_NUM); 
    


  ?>


                <td class="text-center"> <?php echo remove_junk($row[4]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[2]); ?></td>


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



<?php  require_once('includes/load.php'); ?>
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