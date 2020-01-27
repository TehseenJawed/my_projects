<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
<?php
 include('config.php');  

$hostname="localhost";
$username="root";
$password="";
$databaseName="softy";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);






if (isset($_GET['delete_id'])) {
  $delete_id=$_GET['delete_id'];
    $query="DELETE  from loanamount WHERE emp_id=$delete_id";
     $resultt=mysqli_query($connect,$query);  
     echo '<script language="javascript">';
              echo 'alert("Row is deleted.."); location.href="checkloan.php"';
             echo '</script>';
             exit; 

}




?>


<?php
  $page_title = 'Check Given Amount ';
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
    <div class="qqq">
    
  <span id="hh" style="display: none;">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
    <div class="col-md-11">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Loan's Details</h1>
         </strong>
        </div>
    <div class="panel-body">
            <div class="form-group">
          <!--      <div class=" table-responsive"> --> 
               <table class="table   table-condensed table-striped  table-hover table-bordered">
                 <tr> 
                  <td>
        <input class="form-control nam" type="text" id="myInput" style="height: 40px; width: 400px;"  onkeyup="myFunction()" placeholder="Search by CNIC..">     </td>

                  <td> 
       <input class="form-control nam" type="text" id="myInput1" style="height: 40px;  width: 400px;" onkeyup="myFunction1()" placeholder="Search by name..">    </td>

                  </tr> 
            </table>
</div>
</div>
</div>
</div>
<br>
<div class="qq">
<div class="panel panel-default">
   
 <div class="panel-body">
  <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
              <tr>                
                <th style="color: #6fb6d8""> Loan </th>
                <th style="color: #6fb6d8""> Employee id  </th>
                <th style="color: #6fb6d8""> Employee Name  </th>

                <th style="color: #6fb6d8"> Contact </th>
                <th style="color: #6fb6d8"> CNIC No. </th>
                <th style="color: #6fb6d8"> Amount </th>
                <th style="color: #6fb6d8"> Loan Date </th>
                <th style="color: #6fb6d8"> Action </th>

              </tr>
            </thead>         <tbody>
         
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


    
  
?>


<?php 
include('config.php');

$q=new mysqli("localhost","root","","softy");
$result = $q->query("SELECT * FROM loanamount");

    

while($row=$result->fetch_array(MYSQLI_NUM))
{  
  ?>
   <td class="text-center"> <?php echo remove_junk($row[0]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[3]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[4]); ?></td>
              
                                <td class="text-center"> <?php echo remove_junk($row[5]); ?></td>

                <td class="text-center"> <?php echo remove_junk($row[6]); ?></td>
                 <td class="text-center">
                  <div class="btn-group">
         
                    <a href="checkloan.php?delete_id=<?php echo $row[1];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"> DELETE </span>
                    </a>
                  </div>
                </td>







                </tr>

 <?php


 
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
<script>



function myFunction1() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
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
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}









   function vv()
   {
        
         //alert("cdcd",myVariable);
           $('#hh').html(' <div class="alert alert-success alert-dismissable"> <button type="button"class="close" data-dismiss="alert">&times;</button><strong class="alert-danger">Defaulter..!</strong> <b> Account number is <?php echo $acc_num;?>  </div>').css('display','block').css('color','green').css('margin-left','5%');
        
}

</script>