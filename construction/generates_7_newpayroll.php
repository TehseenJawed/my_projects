
<?php

/*$ww=mysqli_fetch_array($result22);*/
$index=1;


  $page_title = 'Generates Salaries';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(7);
  $products = join_appr_table();
 include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
<h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Approved Salaries</h1>
         </strong>
        </div>


    
        <div class="panel-body">
          <div class="table-responsive">
          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>
                <th style="color: #6fb6d8"> Sno.  </th>
               <th style="color: #6fb6d8"> Employee Id </th>
                <th style="color: #6fb6d8"> Employee Name  </th>
                <th style="color: #6fb6d8"> Departiment id  </th>
                <th style="color: #6fb6d8"> Designation</th>
                <th style="color: #6fb6d8"> City </th>
                <th style="color: #6fb6d8"> Contact </th>
                <th style="color: #6fb6d8"> CNIC No. </th>
                <th style="color: #6fb6d8"> Salary </th>
                <th style="color: #6fb6d8"> Join Date </th>
               
                
              
            
            </thead>
            <tbody>
             
              <?php foreach ($products as $product):?>
              <tr>
                <form action="generates_7_newpayroll.php" method="POST">
                <td class="text-center"><?php echo count_id();?> </td>
                 
                <td class="text-center"><?php echo remove_junk($product['emp_id']); ?>  </td>
                <td class="text-center"> <?php echo remove_junk($product['name']); ?> </td>
                <td class="text-center"> <?php echo remove_junk($product['dept_id']); ?> </td>
                  <td class="text-center"><?php echo remove_junk($product['designation']); ?> </td>
                <td class="text-center"> <?php echo remove_junk($product['city']); ?>  </td>
                <td class="text-center"> <?php echo remove_junk($product['cell']); ?> </td>
                <td class="text-center"> <?php echo remove_junk($product['cnic']); ?> </td>
                <td class="text-center"> <?php echo remove_junk($product['salary']); ?> </td>
                <td class="text-center"> <?php echo remove_junk($product['join_date']); ?> </td>
               
                
              </tr>
             <?php endforeach; ?>
             
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>
  <?php
   
   if(isset($_POST['en']))
   {
       
         $id=$_POST['id'];
          $name=$_POST['nam'];
           $st=$_POST['st'];
            $dt=$_POST['dt'];
             $ct=$_POST['ct'];
             $co=$_POST['co'];
              $ad=$_POST['ad'];
              $du=$_POST['du'];
               $du1=$_POST['da'];


              $qu1="INSERT INTO genrate_salary(emp_id,name, dept_id, designation,city,cell,cnic,salary, join_date)
               VALUES('$id','$name','$st','$dt','$ct','$co','$ad','$du','$du1')";
               if($db->query($qu1))
              {
              }
               $qu = "DELETE FROM  genrate_salary WHERE id=$id";

              if($db->query($qu))
              {
                        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="generates_7_newpayroll.php"';
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