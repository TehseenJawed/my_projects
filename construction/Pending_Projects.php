<?php
  $page_title = 'Pending Project';
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
  //$products = join_project_table();
?>
<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <h1 style="text-align: center; color:#c4cfe4; text-shadow: 2px 2px 5px green;" ><span class="glyphicon glyphicon-th"></span>Pending Projects</h1>
         </strong>
        </div>
        <br>
 <input class=" form-control nam" type="text" id="myInput1" onkeyup="myFunction1()"   placeholder="Search by name">


        
        <div class="panel-body">
          <div class="table-responsive">
                <form action="Pending_Projects.php" method="POST">
          <table class="table   table-condensed table-striped  table-hover table-bordered" id="myTable">
            <thead>
                       <tr>
       <td><th>Start Date</th> </td><td><input type="date" name="date"></td>
        <td><th>from Date</th> </td><td><input type="date" name="datee"></td>
        <td>
        <input type="submit" class="form-control btn btn-success" name="btnsb">
      </td>
      </form>
      <td>
      <form action="Pending_Projects.php" method="POST">
        <input type="submit" name="today" value="Today" class="btn btn-warning  form-control">
      </form>
</td>
    </tr>
              <tr>
                <th style="color: #6fb6d8"">#</th>
                <th style="color: #6fb6d8""> Project ID. </th>
                <th style="color: #6fb6d8"> Project Title  </th>
                <th style="color: #6fb6d8"> Start date </th>

                <th style="color: #6fb6d8"> End Date </th>
                <th style="color: #6fb6d8"> Cost </th>
                <th style="color: #6fb6d8"> Received </th>
              <th style="color: #6fb6d8"> Due </th>

        
              <th colspan="2" style="color: #6fb6d8"> Action </th>



                <!-- <th style="color: #6fb6d8"> Actions </th> -->
              </tr>
            </thead>
            <tbody>
                <?php
                
                if (isset($_POST['btnsb'])) {
   $date=$_POST['date'];
   @$datee=$_POST['datee'];
  $sql  ="SELECT * FROM  7_addproj1 WHERE start_date BETWEEN '$date' AND '$datee'";
  $products=find_by_sql($sql);   
    
       
}
if (isset($_POST['today'])) {
  $datea=date('Y/m/d');
   $sql  ="SELECT * FROM  7_addproj1 WHERE start_date='$datea'";
  $products=find_by_sql($sql);   
    
}
else
{
  $products = join_project_table();
}
?>

               
              <?php foreach ($products as $product):?>
              <tr>
                <form action="Pending_Projects.php " method="POST">
                <td class="text-center"><?php echo count_id();?> </td>
                 
                <td class="text-center"><input class="form-control" name="id" value=<?php echo remove_junk($product['id']); ?> > </td>
                <td class="text-center"><input class="form-control" name="nam" value= <?php echo remove_junk($product['name']); ?> ></td>
                <td class="text-center"><input class="form-control" name="st" value= <?php echo remove_junk($product['start_date']); ?> ></td>

                <td class="text-center"><input class="form-control" name="dt" value= <?php echo remove_junk($product['end_date']); ?> > </td>
                <td class="text-center"><input class="form-control" name="co" value= <?php echo remove_junk($product['cost']); ?> ></td>
                <td class="text-center"><input class="form-control" name="ad" value= <?php echo remove_junk($product['advance']); ?> ></td>
                <td class="text-center"> <input class="form-control" name="du" value=<?php echo remove_junk($product['due']); ?> ></td>
                 <!-- <td>
                  <input type="text" placeholder="Rec Money here" class="form-control" name="rec_amount">
                 </td> -->
               
                <td >
                  
                  <div class="btn-group">
                      <a href="pending_detail.php?name=<?php echo $product['name'];?>" class="btn btn-success">Detail</a></td>
                      <td>
                  <input type="submit" name="en" value="Completed" class="btn btn-info"> 
                 <!--  <input type="submit" style="margin-top: 4px;" name="rec_amount_btn" value="Rec-Money" class="btn btn-danger">  --> 
                </form>
                  </div>
                </td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>
  <?php
   if(isset($_POST['rec_amount_btn']))
   {
       
         $id=$_POST['id'];
          $name=$_POST['nam'];
           $st=$_POST['st'];
            $dt=$_POST['dt'];
             $co=$_POST['co'];
              $ad=$_POST['ad'];
              $du=$_POST['du'];
                $rec_amount=$_POST['rec_amount'];




              $qu1="UPDATE 7_addproj1 SET advance =advance+'$rec_amount',due =due-'$rec_amount' WHERE id='$id'"; 
               if($db->query($qu1))
              {
                        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="Pending_Projects.php"';
        echo '</script>';
              }
   }
   


   if(isset($_POST['en']))
   {
       
         $id=$_POST['id'];
          $name=$_POST['nam'];
           $st=$_POST['st'];
            $dt=$_POST['dt'];
             $co=$_POST['co'];
              $ad=$_POST['ad'];
              $du=$_POST['du'];

         $qq="SELECT SUM(prod_price) FROM pro_project WHERE p_name='$name'";
          $result1= $db->query($qq);
      $row1=mysqli_fetch_array($result1); 
      $inventory_expense=$row1[0];


               $qq2="SELECT SUM(prod_price) FROM pro_project WHERE p_name='$name' AND Ex_unit = '0' ";
          $result2= $db->query($qq2);
      $row2=mysqli_fetch_array($result2); 
      $one_expense=$row2[0];

                     $qq3="SELECT SUM(prod_price) FROM pro_project WHERE p_name='$name' AND Ex_unit != '0' ";
          $result3= $db->query($qq3);
      $row3=mysqli_fetch_array($result3); 
      $extra_expense=$row3[0];

       $qq="SELECT cost FROM 7_addproj1 WHERE name='$name'";
          $result1= $db->query($qq);
      $row1=mysqli_fetch_array($result1); 
      $cost=$row1['cost'];
      $profit=$cost-$inventory_expense;
                    

          $qu1="INSERT INTO complete_pro (pro_id,name,start_date,end_date,cost,advance,due,inventory_expense,profit,one_expense,extra_expense)
               VALUES('$id','$name','$st','$dt','$co','$ad','$du','$inventory_expense','$profit','$one_expense','$extra_expense')";
               if($db->query($qu1))
              {
              }
               $qu = "DELETE FROM  7_addproj1 WHERE id=$id";

              if($db->query($qu))
              {
                        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="Pending_Projects.php"';
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

function myFunction1() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
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

