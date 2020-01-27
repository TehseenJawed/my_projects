<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
<?php
  

$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);




$vc= $_GET["emp_id"];

if (!isset($_GET['emp_id'])) {
    $query="SELECT * from loanamount WHERE emp_id=$vc";
  
    $resultt=mysqli_query($connect,$query);   
}

?>

<?php

  $page_title = 'Loan Section';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page

  page_require_level(2);
  
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
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-8">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>&nbspGive loan Amount</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="loanamount.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
              </div><?php
              while($row2=mysqli_fetch_array($resultt)):;?>
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>
       <!-- <th>Name</th>
       <td>

       <input type="text" class="form-control nam" name="name" placeholder="Enter  name">
        </td>
        -->
<th>Employe id</th>
        <td>
        <input type="text" name="emp_id" value="<?php echo $row2[1]?>">
        </td>

       
     <?php endwhile;?>
       </select>
     </td>

        <th>Employe Name</th>
        <td>
        <input type="text" name="empname" value="<?php echo $row2[2]?>">
        </td>

       </tr>
       <tr> 
       <th>Contact no.</th>
       <td>
       <input type="text" class="form-control nam" name="cell" placeholder="Enter Contact no." value="<?php echo $row2[3]?>">
       </td> 
      <th>CNIC</th>
       <td>
       <input type="text" class="form-control nam" name="cnic" placeholder="Enter CNIC No." value="<?php echo $row2[4]?>">
        </td>
     </tr>
     <tr>
       <th>Loan Date</th>
       <td>
       <input type="Date" class="form-control nam" name="loan_date" placeholder="" value="<?php echo $row2[6]?>">
     </td>
        <th>Amount</th>
       <td>
       <input type="text" class="form-control nam" name="amount" placeholder="Enter Loan amount" value="<?php echo $row2[5]?>">
       </td>
     </tr>
     <tr>
     <td colspan="4">
       <button type="submit" name="comp"  class="btn btn-primary form-control" style="height: 40px" >Update</button>
     </td>
   </tr>
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

if(isset($_POST['comp'])){

$name = $_POST['empname'];
$emp_id = $_POST['emp_id'];

$cell=check_input($_POST['cell'], "Enter cell no. !");

$cnic=check_input($_POST['cnic'], "Enter CNIC No.!");

$amount=check_input($_POST['amount'], "Enter amount!");

$loan_date=$_POST['loan_date'];
    
    

  
    

  
 $queryyy= "UPDATE loanamount set empid='$emp_id',name='$name',cell='$cell',cnic='$cnic' amount= amount+ '$amount',loan_date='$loan_date' where emp_id='$vc'";

$db->query($queryyy);

  include('config.php');

  if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="checkloan.php"';
    echo '</script>';
  } 


} 
   
?>

<?php include_once('layouts/footer.php'); ?>

<script type="text/javascript" src ="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="rel.js"></script>
<script type="text/javascript" src= "mousetrap-master/mousetrap.js" ></script>
<script type="text/javascript" src="mousetrap-master/mousetrap.min.js"></script>
 
<script type="text/javascript">




$(document).ready(function() {

$('#voucher_cat').change(function(){
   //$('#select_2').show();
  
var myName=$('#voucher_cat').val();
window.location.href="loanamount.php?vc_id="+myName;
/*  console.log('myname'+myName);
  alert('Thank you! MR  '+myName);
*/ 
  /*var myurl='http://localhost/MUNEEBsofty/voucher_trans1.php';
    $.ajax({
      url: myurl,
          method:'POST',
      data: 'id='+myName,
      success: function(result){
        
      }
    });*/

});
});



  










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
  