<?php
  $page_title = 'Expense';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(4);
  
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
  <div class="col-md-11">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;  text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>&nbspExpense Registration</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="expense.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>
      <th>Expense Type</th>
       <td>

       <input type="text" class="form-control nam" name="exp_type" placeholder="Enter  Expense type">
        </td>
       <th>Expense Description</th>
       <td>
       <input type="text" class="form-control nam" name="exp_desc" placeholder="Enter Expense description">
       
       </td>
      </tr>
        <tr>
        <th>Amount</th>
    <td>
       <input type="text" class="form-control nam" name="amount" placeholder="Enter Amount">
       </td>
        
        <th>Date</th> 
       <td>
       <input type="Date" class="form-control nam" name="exp_date" placeholder="">
     </td>
     </tr>
     <tr>
      <td colspan="4">
       <button type="submit" name="comp"  class="btn btn-primary form-control" >Register</button>
     </td>
   </tr>
 </table>
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

$exp_type = check_input($_POST['exp_type'], "Enter expense type!");

$exp_desc=check_input($_POST['exp_desc'], "Enter expense desc!");
$amount=check_input($_POST['amount'], "Enter amount!");
    $exp_date=$_POST['exp_date'];
    
    

  
    
    $query="INSERT INTO expense(exp_type,exp_desc,amount,exp_date)VALUES('$exp_type','$exp_desc','$amount','$exp_date')";
  
  
  include('config.php');
  if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="expense.php"';
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
  