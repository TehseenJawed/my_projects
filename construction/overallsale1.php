
<?php
  $page_title = 'Expense';
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
            <span>Sales Report</span>
         </strong>
        </div>
		<div class="panel-body">
          <form action="overallsale.php" method="post" >
     <br>
       <strong>
       <text style= 'margin-left:1px';> <span>FROM Date</span></text>
       </strong>
       <input type="Date" class="form-control nam" name="from_date" placeholder="From Date">
        <br>



     <br>
       <strong>
       <text style= 'margin-left:1px';> <span>TO Date</span></text>
       </strong>
       <input type="Date" class="form-control nam" name="to_date" placeholder="To Date">
        <br>

             <button type="submit" name="customer"  class="btn btn-primary">&nbsp&nbsp Process &nbsp&nbsp</button>

      <div style="overflow-x:auto">
        
        <button type="submit" name="Generate_pdf"  class="btn btn-primary" style="float: right; height: 45px">&nbsp&nbsp Generate Pdf &nbsp&nbsp</button>
<table class="table table-bordered  table-hover" id="myTable">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;"> Invoice No. </th>
                <th class="text-center" style="width: 20%;"> Dc_Date  </th>
                <th class="text-center" style="width: 10%;"> Customer Id </th>
                <th class="text-center" style="width: 100px;"> Ref No. </th>
                <th class="text-center" style="width: 100px;"> Sales Person Id </th>
                <th class="text-center" style="width: 100px;"> Remarks </th>
                <th class="text-center" style="width: 100px;"> Product Id </th>
                <th class="text-center" style="width: 100px;"> Product Title </th>
                <th class="text-center" style="width: 100px;"> Pack Size </th>
                <th class="text-center" style="width: 100px;"> Batch No. </th>
                <th class="text-center" style="width: 100px;"> Price </th>
                <th class="text-center" style="width: 100px;"> Quantity </th>
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
if(isset($_POST['Generate_pdf']))
{
  require_once('tcpdf/tcpdf.php');
  $obj_pdf=new TCPDF('p',PDF_UNIT,PDF_page_formate,true,'ut8f',false);
  $obj_pdf->SetCreator(PDF_CREATOR);
  //$obj_pdf->('Cerator report');
  $obj_pdf->SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
  $obj_pdf->SetHeadorFont(Array(PDF_Font_Name_Main,'',pfd_font_Size_Main));
  $obj_pdf->SetHeadorFont(Array(PDF_Font_Name_Data,'',pfd_font_Size_Data));
  $obj_pdf->SetDeafultMonospacedFont('helvetica');
  $obj_pdf->SetFooterMargin(Pdf_Margin_Footer);
  $obj_pdf->SetMargins(Pdf_Margin_Left,'10',Pdf_Marhin_Right);
  $obj_pdf->SetPrintHeader(false);
  $obj_pdf->SetPrintFooter(false);
  $obj_pdf->SetAutoPageBreak(true,10);
  $obj_pdf->SetFont('helvetica','',11);
  $obj_pdf->AddPage();
  $content='';
  $content .='
       <h4 algin="center">Generate Html Table Data in php</h4><br />
       <table border="1" cellspacing="0" cellpadding="3">
       <tr>
            <th class="text-center" style="width: 10%;"> Invoice No. </th>
                <th class="text-center" style="width: 20%;"> Dc_Date  </th>
                <th class="text-center" style="width: 10%;"> Customer Id </th>
                <th class="text-center" style="width: 100px;"> Ref No. </th>
                <th class="text-center" style="width: 100px;"> Sales Person Id </th>
                <th class="text-center" style="width: 100px;"> Remarks </th>
                <th class="text-center" style="width: 100px;"> Product Id </th>
                <th class="text-center" style="width: 100px;"> Product Title </th>
                <th class="text-center" style="width: 100px;"> Pack Size </th>
                <th class="text-center" style="width: 100px;"> Batch No. </th>
                <th class="text-center" style="width: 100px;"> Price </th>
                <th class="text-center" style="width: 100px;"> Quantity </th>  

       </tr>


  ';
      $content .=  fetch_data();
      $content .='</table>';
      $obj_pdf->writeHTML($content);
      $obj_pdf->Output('file.pdf','I');
}


 ?>

<?php 

 
if(isset($_POST['customer']))
 {

    $from_date = $_POST['from_date'];

    $to_date = $_POST['to_date'];
   $Output = '';

$q=new mysqli("localhost","root","","softy");
$result22 = $q->query("SELECT * FROM invoice where dc_date BETWEEN '$from_date' AND '$to_date' order by dc_date");



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
                <td class="text-center"> <?php echo remove_junk($row[10]); ?></td>

                <td class="text-center"> <?php echo remove_junk($row[11]); ?></td>
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