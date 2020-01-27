

<?php

$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);
    
$query="SELECT * from addaccount";

$query="SELECT * from addaccount";
$query1="SELECT * from addbank";


$result3=mysqli_query($connect,$query1);


$result4=mysqli_query($connect,$query);
 



$result1=mysqli_query($connect,$query);
$result2=mysqli_query($connect,$query);
 
//$result2=mysqli_query($connect,$query);
//$options="";
//while($row2=mysqli_fetch_array($result2))
//{
//  $options=$options."<option>$row2[1]</option>";
//}
?>

<?php

  $page_title = 'Add Cheque';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_categories = find_all('categories')
?>


<input 
<?php include_once('layouts/header.php'); ?>

<form>
<input value="1" type="radio" name="formselector" onClick="displayForm(this)"></input>Add Cheque
        <br>
        <input value="2" type="radio" name="formselector" onClick="displayForm(this)"></input>Show Offered Cheques</form>

  <!-- <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-12">
    <div class="panel-body" id="ccformContainer" ">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span> Cheque Issuance </span>
         </strong>
        </div>



          <form id="ccform" action="chequemanagement.php" method="POST" >
            <div class="form-group">

       
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

       <strong>
       <text style= 'margin-left:1px';> <span>Bank Name</span></text>
       </strong>

       <select name="bank_id" class="form-control nam">Bank Name
       

       <?php


       while($row1=mysqli_fetch_array($result3)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>


       </select>

        <br>
       <strong>
       <text style= 'margin-left:1px';> <span> Cheque No. </span></text>
       </strong>
      <input type="text" class="form-control nam" name="cheque_no" placeholder="Enter cheque no">
       <br>

       <strong>
       <text style= 'margin-left:1px';> <span> Amount </span></text>
       </strong>
      <input type="text" class="form-control nam" name="amount" placeholder="Enter amount">
       <br>


       <strong>
       <text style= 'margin-left:1px';> <span> Name </span></text>
       </strong>
      <input type="text" class="form-control nam" name="name" placeholder="Enter name">
       <br>

       <strong>
       <text style= 'margin-left:1px';> <span> Contact No. </span></text>
       </strong>
      <input type="text" class="form-control nam" name="contact_no" placeholder="Enter contact no">
       <br>

       <strong>
       <text style= 'margin-left:1px';> <span> Address </span></text>
       </strong>
      <input type="text" class="form-control nam" name="address" placeholder="Enter Address">
       <br>


       
<br>
<br>


 <button type="submit" name="submit"  class="btn btn-primary" >Register</button>

      </div>
            </div>
      </div>
      </div>
      </div>

</form>
<?php
/*
  /////////////////////////////////////////////////////
cheque form:
*/
?>
<div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-15">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span> Offered Cheques </span>
         </strong>
        </div>

    <div class="panel-body" id="paypalformContainer">
<div class="form-group">

<form id="ccform" action="add_amount.php" method="POST" >

<table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;"> Cheque Id </th>

                <th class="text-center" style="width: 10%;"> Account No  </th>

                <th class="text-center" style="width: 10%;"> Cheque No  </th>

                <th class="text-center" style="width: 10%;"> Name </th>
                <th class="text-center" style="width: 100px;"> Contact </th>
                          <th class="text-center" style="width: 100px;"> Address </th>
                                   
              </tr>
            </thead>
            <tbody>
</form>
</div>
</div>

  <?php 
include('config.php');

$q=new mysqli("localhost","root","","softy");
$result = $q->query("SELECT * FROM cm_addcheque");
while($row1=$result->fetch_array(MYSQLI_NUM))

{  
  ?>
            <td class="text-center"> <?php echo remove_junk($row1[0]); ?></td>
            <td class="text-center"> <?php echo remove_junk($row1[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[4]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[5]); ?></td>

                </tr>

 <?php


 
  }

?>

<br>
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


$account_id = $_POST['account_id'];

$bank_id = $_POST['bank_id'];

$cheque_no = $_POST['cheque_no'];
$amount = $_POST['amount'];
$name = $_POST['name'];
$contact = $_POST['contact_no'];
$address = $_POST['address'];


$con=mysql_connect("localhost","root","");
  
  if (!$con)
  {
    die('could not connect:'.mysql_error());
    
  }
  mysql_select_db("softy",$con);
  
    
    $query="INSERT INTO cm_addcheque(account_id, bank_id, cheque_no, amount, name, contact, address)VALUES('$account_id','$bank_id', '$cheque_no','$amount', '$name', '$contact', '$address')";

  $query1= "UPDATE addaccount set amount= amount- '$amount' where account_no='$account_id'";


  
  if(!mysql_query($query,$con))
  {
    die('Error in insertnig record'.mysql_error);
  }
  else if(!mysql_query($query1,$con))
  {
    die('Error in insertnig record'.mysql_error);
  }

  else
  {
    echo "Data inserted";
  }
 }
 else if (isset($_POST['submitcheque']))
 {
  $account_id= $_POST['account_id'];

  $cheque_no= $_POST['cheque_no'];

$amount = $_POST['cheque_amount'];



$con=mysql_connect("localhost","root","");
  
  if (!$con)
  {
    die('could not connect:'.mysql_error());
    
  }
  mysql_select_db("softy",$con);
    
    $query="INSERT INTO add_chequeamount(account_id, cheque_no, amount)VALUES('$account_id', '$cheque_no', '$amount')";
  

  if(!mysql_query($query,$con))
  {
    die('Error in insertnig record'.mysql_error);
  }
  else
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
  
  <script type="text/javascript"> 
    function displayForm(c) {

   
        if (c.value == "1") {
            window.location.href='checkmanagement_reg.php';

           
        } else   {
           window.location.href='checkmanagement_reg1.php';
            /*document.getElementById("ccformContainer").style.visibility = 'hidden';

            document.getElementById("pay*palformContainer").style.visibility = 'visible';*/
        } 
    }

    </script>



   