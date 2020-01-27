
<?php

  $page_title = 'Add Employee';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page

  page_require_level(7);
  
  $all_categories = find_all('categories');

 $query= "SELECT * from 7_departments";

 $result1= $db->query($query);

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
  </div>
   <div class="col-md-12">
    <div class="qq">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4; text-shadow: 2px 2px 5px green;"><span class="glyphicon glyphicon-th"></span>&nbspEmpolyee Registration</h1>
         </strong>
        </div>
    <div class="panel-body">
          <form action="addemployee.php" method="post" >
            <div class="form-group">
              <div class=" table-responsive">
               <table class="table   table-condensed table-striped  table-hover table-bordered">
       
      <tr>
			 <th>Name</th>
			 <td>

			 <input type="text" class="form-control nam" name="name" placeholder="Enter  name" required/>
			 	</td>
			 <th>Designation</th>
			 <td>
			 <input type="text" class="form-control nam" name="designation" placeholder="Enter designation" required/>
			 
			 </td>
      </tr>

        
       <th>Department</th>

       <td>
      <select name="dept_id" class="form-control nam">Select Department
       <?php
       while($row1=mysqli_fetch_array($result1)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[1];  
       ?> </option>

     <?php endwhile;?>


       </select>
</td>
    <th>city</th>
       <td>
       <input type="text" class="form-control nam" name="city" placeholder="Enter city" required/>
     </td>

      <tr>
       <th>Contact no.</th>
       <td>
       <input type="text" class="form-control nam" name="cell" placeholder="Enter Contact no." required/>
       </td>  
      <th>CNIC</th>      
       <td>
       <input type="text" class="form-control nam" name="cnic" placeholder="Enter CNIC No." required/>
      </td>
    </tr>
    <tr>
       <th>Salary</th>
       <td>
       <input type="text" class="form-control nam" name="salary" placeholder="Enter Salary" required/>
       </td>
       <th>Date of Joining</th>
       <td>
       <input type="Date" class="form-control nam" name="join_date" placeholder="" required/>
     </td>
   </tr>
   <tr>
    <td colspan="4">
       <button type="submit" name="comp"  class="btn btn-primary form-control"  style="height: 45px">Register</button>
     </td>
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

$name = check_input($_POST['name'], "Enter name!");

$dept_id=check_input($_POST['dept_id'], "Enter department id!");

$city=check_input($_POST['city'], "Enter city!");

$cell=check_input($_POST['cell'], "Enter cell no. !");

$cnic=check_input($_POST['cnic'], "Enter CNIC No.!");

$salary=check_input($_POST['salary'], "Enter salary!");

$join_date=$_POST['join_date'];
$designation=$_POST['designation'];
    
    

		
    $query="INSERT INTO add_employee(name, dept_id, designation,city,cell,cnic,salary, join_date)VALUES('$name','$dept_id','$designation','$city','$cell','$cnic',   '$salary', '$join_date')";
	include('config.php');
  $query1="INSERT INTO add_employee1(name, dept_id, designation,city,cell,cnic,salary, join_date)VALUES('$name','$dept_id','$designation','$city','$cell','$cnic',   '$salary', '$join_date')";
  
  if($db->query($query))
  {

  }
 if($db->query($query1))
  {
   echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="addemployee.php"';
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
	