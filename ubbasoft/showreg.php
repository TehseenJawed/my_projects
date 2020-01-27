<?php
  $page_title = 'Show Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
?>
<?php
$query1="SELECT * from customer_reg";

$query2="SELECT * from new_salesman";

$query3="SELECT * from newitem_reg";

$query4="SELECT * from newvendor_reg";

$query5="SELECT * from city_reg";


$result1=$db->query($query1);

$result2=$db->query($query2);

$result3=$db->query($query3);

$result4=$db->query($query4);

$result5=$db->query($query5);
?>

<?php include_once('layouts/header.php'); ?>


  <div class="row">
     <div class="col-md-12">
      <!-- <?php echo display_msg($msg); ?>-->
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Manage Registrations</span>
         </strong>
        </div>
    <div class="panel-body">
          <form action="showreg.php" method="post" >
            <div class="form-group">

        <br>
            <strong>
       <text style= 'margin-left:1px';> <span>Registration Form </span></text>
       </strong>

       <select name="regform_id" class="form-control nam" >Reg Form ID

       
       <option value="1"> <?php echo "City Registration";  
       ?> </option>

  <option value="2"> <?php echo "Vendor/Supplier Registration";  
       ?> </option>

  <option value="3"> <?php echo "Customer Registration";  
       ?> </option>

  <option value="4"> <?php echo "Sales Person Registration";  
       ?> </option>

  <option value="5" > <?php echo "Item/Product Registration";  
       ?>  </option>

       </select>
      
       <br>

       <br>
       <button type="submit" name="submit"  class="btn btn-primary">&nbsp&nbsp Process &nbsp&nbsp</button>
      </div>
            </div>
      </div>
      </div>
      </div>

<?php
if(isset($_POST['regform_id'])){
    $regform_id = $_POST['regform_id'];
    switch ($regform_id) {
        case '1':
            echo 'value1<br/>';
            break;
        case '2':
            echo 'value2<br/>';
            break;
       case '3':
            echo 'value3<br/>';
            break;
       case '4':
            echo 'value4<br/>';
            break;
       case '5':
            echo 'value5<br/>';
            break;

    }
}
?>



    <div class="panel-body" id="paypalformContainer">
<div class="form-group">

<form id="ccform" action="add_amount.php" method="POST" >

<table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;"> Invoice No. </th>
                <th class="text-center" style="width: 10%;"> DC Date  </th>
                <th class="text-center" style="width: 10%;"> Customer ID  </th>
                <th class="text-center" style="width: 10%;"> Ref.No. </th>
                <th class="text-center" style="width: 100px;"> Sale Person ID </th>
                <th class="text-center" style="width: 100px;"> Remarks </th>
                                   
              </tr>
            </thead>
            <tbody>
</form>
</div>
</div>

  <?php 
include 'config.php' ;
//$con=mysql_connect("localhost","root","");
  
  if (!$conn)
  {
    die('could not connect:'.mysql_error());
    
  }
  mysql_select_db("soft",$conn);

$result1 = mysql_query("SELECT * FROM Invoice");

while($row1 = mysql_fetch_array($result1))
{  
  ?>
            <td class="text-center"> <?php echo remove_junk($row1['invoice_no']); ?></td>
            <td class="text-center"> <?php echo remove_junk($row1['dc_date']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1['customer_id']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1['ref_no']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1['sale_person_id']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1['remarks']); ?></td>

                </tr>


<?php


     } 






   
   

 

?>
 