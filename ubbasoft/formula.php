<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">

</script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php









  session_start() ;

  $page_title = 'Requisition Quantity';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); 

$querysx3="SELECT * from req_temp";
  $resultsxs3= $db->query($querysx3);
  $xfx=mysqli_num_rows($resultsxs3);
   if($xfx >0)
   {
      echo '<script language="javascript">';
        echo 'alert("First make the remaining products...") location.href="formula_prod.php"';
        echo '</script>';
exit;
   }

$zz=2;
$vc= @$_GET["vc_id"];


if (isset($_GET['vc_id'])) {

  $query3="SELECT * from newitem_reg WHERE id= $vc";
  $results3= $db->query($query3);
  $xx=mysqli_fetch_array($results3);
  $batch_size=$xx['pack_size'];
  $_SESSION['i_name'] = $xx['product_title'];
}

$query1="SELECT * from newitem_reg where product_type=1 OR product_type=3";
$query2="SELECT * from newitem_reg WHERE product_type=2";
$result1=$db->query($query1);
$result2=$db->query($query2);

?>


  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspRequisition Quantity</h1>
         </strong>
        </div>
    <div class="panel-body">
          

<HTML>
<HEAD>


</HEAD>
<style >






	select {
    -webkit-appearance: menulist;
    box-sizing: border-box;
    align-items: center;
    white-space: pre;
    -webkit-rtl-ordering: logical;
    color: black;
    background-color: blue;
    cursor: default;
    border-width: 1px;
    border-style: solid;
    border-color: initial;
    border-image: initial;
   

  display: block;
  width: 100%;
  height: 48px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

</style>
<BODY>

	<!-- <INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />
 -->
	<!-- <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" /> -->
<form method="POST" action="formula.php">
	    <TABLE id="dataTablee" class="table   table-condensed table-striped table-hover table-bordered">
		    <tr>

		    	<th style="color:  #c4cfe4;">Product id</th>
		    	<td>
		    	    <input type="hidden"  value="<?php echo @$vc?>"  name="iddd">
                   <select   name="itemid" id="voucher_cat"   />
					<option value=""><?php echo (@$vc==0)?'Selected Item here':@$vc ?></option>

	                           <?php
	                           while($row2=mysqli_fetch_array($result2)):;?>
	                           <option value=<?php echo $row2[0]  ?>>
	                           <?php echo $row2[1];  
	                           
	                           ?> </option>


	                           ?>


	                         <?php endwhile;?>



	                       </select>
		    	</td>
				
				
		    	<th style="color:  #c4cfe4;">Product Title</th>
		    	<td>
                
                   <input type="text"  value="<?php echo @$xx['product_title']?>" class="form-control" name="itemname" disabled/>
		    	
		    	</td>
           
           
           <!--Yhan pe batch size hai yhe batch size production main
            use kya hai thats why im coomenting the whole colum-->
		    
		    
		    
		    
		    <!--	<tr>
		    		<th style="color:  #c4cfe4;">Batch Size</th>
		    	<td>
                   <input type="number" id="batch_size" class="form-control" name="batch_size" />
                   

		    	</td>
		    	 <th style="color:  #c4cfe4;">Estimats Packed</th>
		    	<td>
		    		<input  type="text" name="textbox3" id="textbox3"  class="form-control">
                    
		    	</td>
		    	</tr>-->
		    	
		    	<!--batch-->
	
		    	
		    	<tr>
		    	    <td colspan=4>
		    	     <input type="submit" style="color: white; height: 45px;" class="btn-success form-control" name="submit">
		    </td>
		    </tr>
		<!--</TABLE>
			 <TABLE id="dataTable" class="table   table-condensed table-striped table-hover table-bordered">
		    	<tr>
		    		<th># </th>
		    		<th>S.No </th>
		    		<th>Product Title </th>
		    		<th>Quantity</th>
		    
		    	</tr>
		    </tr>
		    <TR>
				<TD><INPUT type="checkbox"  name="chk"/></TD>
				<TD id="idd"> 1 </TD>
				<TD> 
					<select id = "id_type" onchange="myFunction()" name="slcbox[]"   required/>
					<option value="">Select Item Here</option>

	                           <?php
	                           while($row1=mysqli_fetch_array($result1)):;?>
	                           <option value=<?php echo $row1[1]  ?>>
	                           <?php echo $row1[1];  
	                           
	                           ?> </option>


	                           ?>


	                         <?php endwhile;?>



	                       </select>
				</TD>
				
				
				<TD> <INPUT type="text" style="width: 80px; height: 48px;"  name="txtqty[]"  placeholder="Quantity" required></TD>
	             <td>
	                 
	                 <button type="button" onclick="addRow('dataTable')" style="float: right;" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-plus form-control"></span> 
                </button><button type="button" style="float: right;" onclick="deleteRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-trash form-control"></span></button>

	                 
	                 
	                 
	                 </td>			
				
				
				
		   </TR>
		</TABLE>-->
    
</form>

</BODY>
</HTML>
<?php
if (isset($_POST['submit'])) {
$iddd=$_POST['iddd'];
$bs=$_POST['batch_size'];
$est=$_POST['textbox3'];
$q = "insert into req_temp( prod_id,batch_size,est_pack_size) values('$iddd','$bs','$est')" ;
  
   if($db->query($q))
     {
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="formula_prod.php"';
        echo '</script>';
     
         exit;
     } 
 


exit;
die;


$name=$_POST['slcbox'];
print_r($name);

  echo '<h1>'.$itemname;
$qty=$_POST['txtqty'];
$product=$_POST['itemname'];
$itemid=$_POST['itemid'];

echo '<br>'.$product.'</br>';
exit;

for($j =  0 ; $j < sizeof($name) ; $j++)
{
  $i = $name[$j] ;
  $quantity = $qty[$j] ;
  $xyz = $_SESSION['i_name'] ;
 /*$query2= "UPDATE newitem_reg set reorder_quantity= reorder_quantity- '$quantity' where product_title='$i'";
 $db->query($query2);*/
 $q = "insert into item_formula( item_name,product_name,qty) values('$xyz','$i','$quantity')" ;
  
   if($db->query($q))
     {
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="formula_prod.php"';
        echo '</script>';
     } 
  
}

/*	print_r($_POST['txtqty']);
	echo "--------";
		print_r($_POST['txtbox']);
		echo '<br>';
		print_r(array_merge($_POST['txtbox'],$_POST['txtqty']));
        echo '<br>';
        echo sizeof($_POST['txtbox']);
*/

}

?>
<?php


$ar = array();
include 'config.php' ;


$q = "select * from newitem_reg" ;

if($res = $conn->query($q))

{

   while ($row = $res->fetch_assoc()) {

    array_push($ar,$row['product_title']); 


      # code...
   }

}



?>

<script>
$(document).ready(function() {

$('#batch_size').change(function(){
   //$('#select_2').show();
  
var batch_size=$('#batch_size').val();
var batch_size_db = <?php echo json_encode($batch_size) ?>
/*window.location.href="formula.php?vc_id="+myName;*/
 /* console.log('myname'+myName);*/
 var total_amount=batch_size/batch_size_db;
  /*$('#estimate_pack').text(total_amount);*/
  /*alert(total_amount);*/
  var textbox3 = document.getElementById('textbox3');
    textbox3.value=total_amount;
  /*$('#estimate_pack').find('input').val('total_amount');*/
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

</script>

<script>

$(document).ready(function() {

$('#voucher_cat').change(function(){
   //$('#select_2').show();
  
var myName=$('#voucher_cat').val();
window.location.href="formula.php?vc_id="+myName;
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



function myFunction()
{  
 var prod_type = document.getElementById('p_t');  
    var element = document.getElementById('id_type');
    prod_type.value = element.value 
	$("#p_t").html(element.value);
	
	
	
	 $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "get-data.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
          $("#show").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });
}

</script>









<script language="JavaScript" type="text/javascript">
		function addRow(tableID) {

						var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="chkbox[]";

			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			cell2.innerHTML = rowCount + 1;


			var cell3 = row.insertCell(2);
			var element2 = document.createElement("SELECT");
			element2.name = "slcbox[]";
			element2.class = "form-control";
              
             <?php


				$ar = array();
				include 'config.php' ;


				$q ="SELECT * from newitem_reg where product_type=1 OR product_type=3";

				if($res = $conn->query($q))

				{

				   while ($row = $res->fetch_assoc()) {

				    array_push($ar,$row['product_title']); 


				   }

				}
            


             ?>

                var cars = <?php echo json_encode($ar) ?>;
                 
                 
                 var options_str = "";

                 options_str += '<option value="">Select Item Here</option>';

				cars.forEach( function(car) {
				    //console.log(car);
				  options_str += '<option value="' + car + '">' + car + '</option>';
				});

				element2.innerHTML = options_str;
						   


			
			cell3.appendChild(element2);
			
			var cell4 = row.insertCell(3);
			var element3 = document.createElement("input");
			element3.type = "text";
			element3.name = "txtqty[]";
			element3.style ="width:80px;height: 48px;";
			element3.placeholder="Quantity";
		

			cell4.appendChild(element3);

			// var cell5 = row.insertCell(4);
			// var element4 = document.createElement("input");
			// element4.type = "number";
			// element4.name = "id_type[]";
			// element4.style ="width:80px;height: 48px;";
			// element4.placeholder="Product type";
		

			// cell5.appendChild(element4);


		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}

	
	</script>




