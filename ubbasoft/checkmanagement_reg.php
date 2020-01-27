



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
<?php
  
/*
$hostname="localhost";
$username="root";
$password="";
$databaseName="soft";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);
*/
include('config.php');


$vc= $_GET['vc_id'];

if (isset($_GET['vc_id'])) {
    $query="SELECT bank_id from addaccount WHERE account_no=$vc";
  
    $resultt=mysqli_query($conn,$query); 
    $row1=mysqli_fetch_array($resultt);
    $bank_id=$row1['bank_id'];
     $queryy="SELECT bank_name from addbank WHERE bank_id=$bank_id";
     $resulttt=mysqli_query($conn,$queryy); 
    $row1=mysqli_fetch_array($resulttt);
    $bank_name=$row1['bank_name'];
}
    
$query="SELECT * from addaccount";

$query="SELECT * from addaccount";
$query1="SELECT * from addbank";


$result3=mysqli_query($conn,$query1);


$result4=mysqli_query($conn,$query);
 



$result1=mysqli_query($conn,$query);
$result2=mysqli_query($conn,$query);
 
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

<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #2b9cbd;
  box-shadow: 10px 10px 5px #8080805c;
</style>
 
<?php include_once('layouts/header.php'); ?>


<input value="1" type="radio" name="formselector" onClick="displayForm(this)"></input>Give Cheque
        <br>
        <input value="2" type="radio" name="formselector" onClick="displayForm(this)"></input>Show Offered Cheques</form>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
  <br>
   <div class="div_1">
    <div class="col-md-12">
    	<div class="qq">
    <div class="panel-body" id="ccformContainer" ">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>Give CHEQUES</h1>
         </strong>
        </dv>



          <form id="ccform" action="checkmanagement_reg.php" method="POST" >
            <div class="form-group">


  <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            
              <tr>
                <th > Account No.</th>
                	<td>

       <select name="account_id" id="account_no" class="form-control nam" required> <option value="<?php echo (@$vc=='')?'':@$vc; ?>"><?php echo (!isset($_GET['vc_id']))?'Select account_no':$vc?></option>
       

       <?php


       while($row1=mysqli_fetch_array($result4)):;?>
       <option value=<?php echo $row1[2]  ?>>
       <?php echo $row1[2];  
       ?> </option>

     <?php endwhile;?>


       </select>

      </td>
       <th> Bank Name</th>
       	<td>
 
        <select name="bank_id" class="form-control nam">
           <option value="<?php echo (@$bank_id=='')?'':@$bank_id; ?>">
             <?php echo (@$bank_name=='')?'Bank name here..':@$bank_name; ?>
           </option>
       

       


      
     <!--   <option value="<?php echo @$bank_id  ?>">
       <?php echo @$bank_name;  
       ?> </option>
 -->
     

       </select>
</td>
</tr>
<tr>
        
       
       <th>  Cheque No. </th>
       	<td>
      <input type="text" class="form-control nam" name="cheque_no" placeholder="Enter cheque no" required>
  </td>
              <th>  Amount </th>
       	<td>
      <input type="text" class="form-control nam" name="amount" placeholder="Enter amount" required>
       </td>
</tr>
<tr>
       
       <th>  Name </th>
       	<td>
      <input type="text" class="form-control nam" name="name" placeholder="Enter name" required="required">
  </td>
              <th>  Contact No. </th>
       	<td>
      <input type="text" class="form-control nam" name="contact_no" placeholder="Enter contact no" required="required">
             </td>
</tr>
<tr>

              <th>  Address </th>
       	<td>
       		<textarea class="form-control nam" name="address">
                  Enter Address
       		</textarea>
  
</td>
            <th>  withDrawal  </th>
        <td>
          <input type="date" name="withdrawal" class="form-control">
  
       </td>
     </tr>
     <tr>
<td colspan="4">

 <button type="submit" name="submit"  class="form-control btn btn-primary" >Register</button>
</td>
</tr>

</table>

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
<style>
  .qq {
    /* border-color: #29caca; */
    border-radius: 9px;
    border: solid;
    border-color: #2b9cbd;
  box-shadow: 10px 10px 5px #8080805c;
</style>
<!-- <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="div_1">
 <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
           <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;">
            <span class="glyphicon glyphicon-th"></span>
            Offered Cheques</h1> 
         </strong>
        </div>

    <div class="panel-body" id="paypalformContainer">
<div class="form-group">

<form id="ccform" action="add_amount.php" method="POST" >

<table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
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
 -->
  <?php 
include('config.php');
/*
$q=new mysqli("localhost","root","","soft");
$result = $q->query("SELECT * FROM cm_addcheque");
while($row1=$result->fetch_array(MYSQLI_NUM))

{  
  ?>
      
       <!--   <td class="text-center"> <?php echo remove_junk($row1[0]); ?></td>
            <td class="text-center"> <?php echo remove_junk($row1[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[4]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[5]); ?></td>

                </tr>
 -->
 <?php


 
  }

?>
*/
?>
<br>

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
$withdrawal = $_POST['withdrawal'];


/*$con=mysql_connect("localhost","root","","soft");
  
  if (!$con)
  {
    die('could not connect:'.mysql_error());
    
  }
  mysql_select_db("soft",$con);*/
$date=date('y-m-d');

/*
$hostname="localhost";
$username="root";
$password="";
$databaseName="soft";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);*/

  /* $querys= "SELECT amount  From addaccount  where account_no='$account_id'";
 $result4=mysqli_query($connect,$querys); 
    $row5=mysqli_fetch_array($result4);
    $ac_amount=$row5['amount'];
    print_r($ac_amount);
    print_r($amount);
  */
   /* if ($ac_amount<$amount) {
      echo '<script language="javascript">';
    echo 'alert("Sorry..You have enough money on this Account"); location.href="checkmanagement_reg1.php"';
    echo '</script>';
exit;
      
    }*/

    
    $query="INSERT INTO cm_addcheque(account_id, bank_id, cheque_no, amount, name, contact, address,created_on,withdrawal)VALUES('$account_id','$bank_id', '$cheque_no','$amount', '$name', '$contact', '$address','$date','$withdrawal')";

  $query1= "UPDATE addaccount set amount= amount- '$amount' where account_no='$account_id'";

$db->query($query);

  include('config.php');
if ($db->query($query1))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="checkmanagement_reg1.php"';
    echo '</script>';
  } 
  else
  {
    echo '<script language="javascript">';
    echo 'alert("Something went wrong..."); location.href="checkmanagement_reg.php"';
    echo '</script>';
  
  }
  
  if(!mysql_query($query,$conn))
  {
    die('Error in insertnig record'.mysql_error);
  }
  else if(!mysql_query($query1,$conn))
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


/*
$con=mysql_connect("localhost","root","");*/
  
  if (!$conn)
  {
    die('could not connect:'.mysql_error());
    
  }
  mysql_select_db("soft",$conn);
    
    $query="INSERT INTO add_chequeamount(account_id, cheque_no, amount)VALUES('$account_id', '$cheque_no', '$amount')";
  

  if(!mysql_query($query,$conn))
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



$(document).ready(function() {

$('#account_no').change(function(){
   //$('#select_2').show();
  
var myName=$('#account_no').val();
window.location.href="checkmanagement_reg.php?vc_id="+myName;
/*  console.log('myname'+myName);
  alert('Thank you! MR  '+myName);
*/ 
  /*var myurl='http://localhost/MUNEEBSOFT/voucher_trans1.php';
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
