<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
<?php
  

$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);




$vc= $_GET['vc_id'];

if (isset($_GET['vc_id'])) {
    $query="SELECT bank_id from addaccount WHERE account_no=$vc";
  
    $resultt=mysqli_query($connect,$query); 
    $row1=mysqli_fetch_array($resultt);
    $bank_id=$row1['bank_id'];
     $queryy="SELECT bank_name from addbank WHERE bank_id=$bank_id";
     $resulttt=mysqli_query($connect,$queryy); 
    $row1=mysqli_fetch_array($resulttt);
    $bank_name=$row1['bank_name'];
}
?>



<?php

$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);
    
$query="SELECT * from addaccount";

$result1=mysqli_query($connect,$query);
$result2=mysqli_query($connect,$query);

$query1="SELECT * from addbank";


$result3=mysqli_query($connect,$query1);


$result4=mysqli_query($connect,$query);
 
//$result2=mysqli_query($connect,$query);
//$options="";
//while($row2=mysqli_fetch_array($result2))
//{
//  $options=$options."<option>$row2[1]</option>";
//}
?>

<?php

  $page_title = 'Add Amount';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_categories = find_all('categories')
?>


<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #2b9cbd;
      box-shadow: 10px 10px 5px #8080805c;

</style> 
<?php include_once('layouts/header.php'); ?>

<input value="1" type="radio" name="formselector" onClick="displayForm(this)"></input>Cash
        <br>
        <input value="2" type="radio" name="formselector" onClick="displayForm(this)"></input>Cheque</form>
  

  <div class="row">
    <br>
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-12">
      <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            
              <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Add cash amount</h1>
         </strong>
        </div>



    <div class="panel-body" id="ccformContainer">


          <form id="ccform" action="add_amount.php" method="POST" >
            <div class="form-group">
       <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr> 
     <th>Account No.</th>
     
      <td>

         <select name="account_id" id="account_no" class="form-control nam">Account No.
         <option value="<?php echo (@$vc=='')?'':@$vc; ?>"><?php echo (!isset($_GET['vc_id']))?'Select account_no':$vc?></option>
       


         <?php




         while($row1=mysqli_fetch_array($result1)):;?>
         <option value=<?php echo $row1[2]  ?>>
         <?php echo $row1[2];  
         ?> </option>

       <?php endwhile;?>


         </select>

  </td>

       <th>Bank Name</th>
        <td>

        <select name="bank_id" class="form-control nam">
           <option value="<?php echo (@$bank_id=='')?'':@$bank_id; ?>">
             <?php echo (@$bank_name=='')?'Bank name here..':@$bank_name; ?>
           </option>


        <!--  <select name="bank_id" class="form-control nam">Bank Name
         

         <?php


         while($row1=mysqli_fetch_array($result3)):;?>
         <option value=<?php echo $row1[0]  ?>>
         <?php echo $row1[1];  
         ?> </option>

       <?php endwhile;?>


         </select> -->
       </td>
     </tr>
     <tr>

     <th> Amount </th>
      <td>
      <input type="text" class="form-control nam" name="cash_amount" placeholder="Enter amount">
       </td>
       <td colspan="2">
 <button type="submit" name="submit"  class="btn btn-primary form-control" >Register</button>
</td>
</tr>
</table>
      </div>
            </div>
      </div>
      </div>
      </div>

</form>

<!-- <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span> Add Cheque Amount </span>
         </strong>
        </div>

   <form id="paypalformContainer" action="add_amount.php" method="POST"  >
            <div class="form-group">
       
       
<br>
<br>

   <strong>
       <text style= 'margin-left:1px';> <span>Account No.</span></text>
       </strong>

       <select name="account_id" class="form-control nam">Account No.
       


       <?php



       while($row1=mysqli_fetch_array($result4)):;?>
       <option value=<?php echo $row1[2]  ?>>
       <?php echo $row1[2];  
       ?> </option>

     <?php endwhile;?>


       </select>

<br>



       <text style= 'margin-left:1px';> <span> Cheque No. </span></text>
       </strong>
      <input type="text" class="form-control nam" name="cheque_no" placeholder="Enter cheque no">
       <br>
       <strong>
       <text style= 'margin-left:1px';> <span> Amount </span></text>
       </strong>
      <input type="text" class="form-control nam" name="cheque_amount" placeholder="Enter amount">
       <br>
       
<br>
<br>


 <button type="submit" name="submitcheque"  class="btn btn-primary" >Register</button>

      </div>
            </div>
      </div>
      </div>
      </div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 
 --> 
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

if (isset($_POST['submit']))
{
  $account_id= $_POST['account_id'];

  $bank_id= $_POST['bank_id'];

$amount = $_POST['cash_amount'];



    /*
    $query="INSERT INTO add_cashamount(account_id, bank_id, cash_amount)VALUES('$account_id', '$bank_id','$amount')";
*/



  $query= "UPDATE addaccount set amount= amount+ '$amount' where account_no='$account_id'";


  include('config.php');
  if($db->query($query))
  {
    echo "Data inserted";
  }
 }
 else if (isset($_POST['submitcheque']))
 {
$account_id= $_POST['account_id'];

$cheque_no= $_POST['cheque_no'];

$amount = $_POST['cheque_amount'];


    
  $query="INSERT INTO add_chequeamount(account_id, cheque_no, amount)VALUES('$account_id', '$cheque_no', '$amount')";
  $query1= "UPDATE addaccount set amount= amount+ '$amount' where account_no='$account_id'";
  
if($db->query($query))

  {
    echo "Data inserted";
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

$('#account_no').change(function(){
   //$('#select_2').show();
  
var myName=$('#account_no').val();
window.location.href="add_cash.php?vc_id="+myName;
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
  
  </script>
  
  <script type="text/javascript"> 
    function displayForm(c) {

   
        if (c.value == "1") {
            window.location.href='add_cash.php';

           
        } else   {
           window.location.href='add_cheque.php';
            /*document.getElementById("ccformContainer").style.visibility = 'hidden';

            document.getElementById("pay*palformContainer").style.visibility = 'visible';*/
        } 
    }

    </script>
