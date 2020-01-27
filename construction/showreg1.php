<?php
  $page_title = 'Show Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
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
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Manage Registrations</span>
         </strong>
        </div>

 <ul>

 <br>   

  <li>
  <text class = "chk">
    <a href="m_edit_customreg.php">
     <i class="glyphicon glyphicon-user"></i>
     <span> Customer Registration  </span> 
  </a>
  </text>

   </ul>
    </li>
   
 <ul>
     <li>
  <text class = "chk">
    <a href="m_edit_itemreg.php">
     <i class="glyphicon glyphicon-user"></i>
     <span> Item/Product Registration  </span> 
  </a>
  </text>

   </ul>
    </li>
 <ul>
   
     <li>
  <text class = "chk">
    <a href="m_edit_supplierreg.php">
     <i class="glyphicon glyphicon-user"></i>
     <span> Supplier/Vendor Registration  </span> 
  </a>
  </text>

   </ul>
    </li>
 <ul>
   
     <li>
  <text class = "chk">
    <a href="m_edit_salesman.php">
     <i class="glyphicon glyphicon-user"></i>
     <span> Sales Person Registration  </span> 
  </a>
  </text>

   </ul>
    </li>
 <ul>
   
     <li>
  <text class = "chk">
    <a href="Product.php">
     <i class="glyphicon glyphicon-user"></i>
     <span> City Registration  </span> 
  </a>
  </text>

   </ul>
    </li>
   

  <script>
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
 function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}
 function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}

 function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}


 function myFunction4() {
    document.getElementById("myDropdown11").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>
