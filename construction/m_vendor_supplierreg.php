<?php
  $page_title = 'Vendor Registrations';
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
  $products = join_vend_table2();
?>
<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <h1 style="text-align: center; color:#c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Vendor Report</h1>
         </strong>
        </div>


        <input class="nam form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Text here .....Search for names..">
        <div class="panel-body">
          <div class="table-responsive">
          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
                <th style="color: #6fb6d8"">SR no</th>
                <!-- <th style="color: #6fb6d8""> Vendor ID. </th> -->
                <th style="color: #6fb6d8"> Vendor Title  </th>
                <!-- <th style="color: #6fb6d8"> Product Name </th>

                <th style="color: #6fb6d8"> Credit </th>
                <th style="color: #6fb6d8"> Debit </th>
                <th style="color: #6fb6d8"> Balance </th> -->
              <!--   <th style="color: #6fb6d8"> Actions </th> -->
              </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>

               <!--  <td class="text-center"> <?php echo remove_junk($product['id']); ?></td> -->
                <td class="text-center"><a href="7vendor_details.php?ven_name=<?php echo $product['ven_name'] ?>"> <?php echo remove_junk($product['ven_name']); ?></a></td>
                <!-- <td class="text-center"> <?php echo remove_junk($product['pro_name']); ?></td>

<td class="text-center"> <?php echo remove_junk($product['cash']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['due']); ?></td>
                            <td class="text-center"> <?php echo remove_junk($product['due']); ?></td> -->
                <!-- <td class="text-center"> <?php echo remove_junk($product['v_phone']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['v_fax']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['v_email']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['v_op_bal']); ?></td>
 -->
               <!--  <td class="text-center">
                  <div class="btn-group">
                    <a href="n_vendor_supplierreg.php?id=<?php echo (int)$product['id'];?>" class="btn btn-info btn-xs"  title="Edit" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"> EDIT </span>
                    </a>
                    <a href="delete_supplierreg.php?id=<?php echo (int)$product['id'];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"> DELETE </span>
                    </a>
                  </div>
                </td> -->
              </tr>
             <?php endforeach; ?>
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