
<?php
$q=new mysqli("localhost","asteamso_soft","5karachi5","asteamso_soft");
$result22 = $q->query("SELECT * FROM purchase_pro");
/*$ww=mysqli_fetch_array($result22);*/
$index=1;


  $page_title = 'Payment to Vendor';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   $user = current_user(); 
  $aa=$user['user_level'];

  if ($aa==8) {
  	
  page_require_level(8);
  }
  else 
  {
  page_require_level(2);
  }
  $products = join_custom_table();
 include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
<h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Payment to Vendors</h1>
         </strong>
        </div>


    <form method="POST" action="Payment_Vendors.php">


        <div class="panel-body">
          <div class="table-responsive">
          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
              <th> Select Vendor </th>
        <td>
                       
                         <select name="p_name" class="form-control nam" required>

                     <?php


                     while($row1=mysqli_fetch_array($result22)):;?>
                     <option value=<?php echo $row1[0]  ?>>
                     <?php echo $row1[2];  
                     ?> </option>

                   <?php endwhile;?>


              </select>
                       </td>               
                          <th> Enter amount </th>
                <td>
               
         <input type="text" name="amount" class="form-control nam" required>
</td>
              </tr>
</thead>
</table>

              <input type="submit" name="customer" class="btn btn-success form-control ">
			  
</div>
</form>
   
<?php

if(isset($_POST['customer']))
{

                    $p_name=$_POST['p_name'];
                  
                    $amount=$_POST['amount'];
                
                    
  
    
    /*$query="INSERT INTO 7_vendoraccount(vendor_id,amount)
    VALUES('$p_name','$amount')";*/
    $query="UPDATE purchase_pro SET due= due - $amount , cash =cash + $amount where  id = $p_name ";
  
  
 include('config.php');
 if($db->query($query))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="home.php"';
    echo '</script>';
  }
   

 
} 
?>

			  <style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
       
</style>
            </thead>
            <tbody>
              <tr>
              <?php while($row=mysqli_fetch_array($result22))
 { ?>
            <tr>
        
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
      <td><input type="name" name="du"  class="form-control" required/></td>
          
                       	<td <button class="button">Add Payment</button></td>

                </tr>


            
             </tr>
             <?php }
             ?>   
              </tr>
             
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>

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