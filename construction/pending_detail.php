<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
  $page_title = 'Project';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   $user = current_user(); 
  $aa=$user['user_level'];

  if ($aa==8) {
    
  page_require_level(8);
  }
  else 
  {
  page_require_level(5);
  }
   $name=$_GET['name'];
 
?>

<?php 
if(isset($_POST['printt']))
{?>
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
<script>
    window.print();
</script>

    
<?php
echo '<h1>Project Name : '.$_GET['name'].'</h1>';
    
}
else

{
    include_once('layouts/header.php');

?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
             <a href="Pending_Projects.php" >back<span class="glyphicon glyphicon-arrow-left"></a>
<strong>
           <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>&nbspProject Name: <?php echo $name?></h1>
         </strong>
        
        </div>


       
        <div class="panel-body">
          <div class="table-responsive">
 <form  method="POST">
          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
                       <tr>
       <td><th>Start Date</th> </td><td><input type="date" name="date"></td>
        <td><th>from Date</th> </td><td><input type="date" name="datee"></td>
        <td>
        <input type="submit" class="form-control btn btn-success" name="btnsb">
      </td>
      <td>
        <input type="submit" value="Today" class="form-control btn btn-warning" name="today">
      </td>
      </tr>
      </table>
      </form>
<?php
}
?>

          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
                 <tr>
                   <th colspan="3" style="color: #d8a06f; text-align:center;">Inventory Expense </th>

                   <th colspan="4" style="color: #d8a06f ;text-align:center;">Extra Expense </th>
                   <th><form method="POST"><input type="submit" class="form-control btn btn-info" value="Print" name="printt"></form></th>
                   </tr>
              <tr>
       
                 <th style="color: #6fb6d8"> Product Name </th>
                
                <th style="color: #6fb6d8"> Quantity </th>
                  <th style="color: #6fb6d8">IN-DATE</th>
                   <th style="color: #6fb6d8">Total Inventory</th>
                 <th style="color: #6fb6d8"> EX discription </th>
                          <th style="color: #6fb6d8">EX UNit </th>
                
                <th style="color: #6fb6d8"> EX Quantity </th>
                 <th style="color: #6fb6d8">Ex price</th>
                <th style="color: #6fb6d8">Total ex price</th>
                <th style="color: #6fb6d8">Ex-DATE</th>
                
                
                
              </tr>
            </thead>
            <tbody>
                <?php
                
                if (isset($_POST['btnsb'])) {
   $date=$_POST['date'];
   @$datee=$_POST['datee'];
   $name=$_GET['name'];
   $sql  ="SELECT * FROM  pro_project WHERE datee BETWEEN '$date' AND '$datee' AND p_name='$name'";
                 $result=$db->query($sql);   
                 //print_r(mysqli_fetch_array($result));
                }
                else if (isset($_POST['today'])) {
   $date=date('Y-m-d');
   
   $name=$_GET['name'];
   $sql  ="SELECT * FROM  pro_project WHERE datee='$date' AND p_name='$name'";
                 $result=$db->query($sql);   
                }
                else
                {
                    
                  $qqq="SELECT * from pro_project Where p_name='$name'";
                 $result=$db->query($qqq);   
                }
                ?>
              <?php while ($row=mysqli_fetch_array($result))
               {
                 ?>
              <tr>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                 <td><?php echo $row[11]?></td>
                <td><?php echo $row[9]?></td>
                <td><?php echo $row[4]?></td>
                    <td><?php echo $row[5]?></td>
                <td><?php echo $row[6]?></td>
                <td><?php echo $row[7]?></td>
                 <td><?php echo $row[8]?></td>
                 <td><?php echo $row[10]?></td>
                
              </tr>
             <?php }
              ?>
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
 </th>
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