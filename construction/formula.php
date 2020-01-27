<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">

</script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php
  $page_title = 'Product Master File';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); 
$query1="SELECT * from newitem_reg";
$result1=$db->query($query1);

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
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspProduct Master File</h1>
         </strong>
        </div>
    <div class="panel-body">
          

<HTML>
<HEAD>

	<SCRIPT language="javascript">
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


				$q = "select * from newitem_reg" ;

				if($res = $conn->query($q))

				{

				   while ($row = $res->fetch_assoc()) {

				    array_push($ar,$row['product_title']); 


				      # code...
				   }

				}



             ?>

                var cars = <?php echo json_encode($ar) ?>;

			
                 var options_str = "";
                 options_str += '<option value="">Select Item Here</option>';
				cars.forEach( function(car) {
				  options_str += '<option value="' + car + '">' + car + '</option>';
				});

				element2.innerHTML = options_str;
						   


			
			cell3.appendChild(element2);
			
			var cell4 = row.insertCell(3);
			var element3 = document.createElement("input");
			element3.type = "number";
			element3.name = "txtqty[]";
			element3.style ="width:80px;height: 48px;";
			element3.placeholder="Quantity";

			cell4.appendChild(element3);


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

	</SCRIPT>
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
	    <TABLE id="dataTable" class="table   table-condensed table-striped table-hover table-bordered">
		    <tr>

		    	<th style="color:  #c4cfe4;">Product Name</th>
		    	<td>
                   <input type="text" class="form-control" name="itemname">
		    	</td>
		    </tr>
		    <TR>
				<TD><INPUT type="checkbox"  name="chk"/></TD>
				<TD id="idd"> 1 </TD>
				<TD> 
					<select  name="slcbox[]"   required/>
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
				<TD> <INPUT type="number" style="width: 80px; height: 48px;"  name="txtqty[]"  placeholder="Quantity" required></TD><td><button type="button" onclick="addRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-plus form-control"></span> 
                </button><button type="button" onclick="deleteRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-trash form-control"></span></button></td>
		   </TR>
		</TABLE>
     <input type="submit" style="color: white; height: 45px;" class="btn-success form-control" name="submit">
</form>

</BODY>
</HTML>
<?php
if (isset($_POST['submit'])) {
$name=$_POST['slcbox'];
$qty=$_POST['txtqty'];
$product=$_POST['itemname'];
echo '<br>'.$product.'</br>';
for($j =  0 ; $j < sizeof($name) ; $j++)
{
  $i = $name[$j] ;
  $quantity = $qty[$j] ;
 $query2= "UPDATE newitem_reg set reorder_quantity= reorder_quantity- '$quantity' where product_title='$i'";
 $db->query($query2);
 $q = "insert into item_formula( item_name,product_name,qty) values('$product','$i','$quantity')" ;
  
   if($db->query($q))
     {
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="formula.php"';
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

         $(function() {
        var ar = <?php echo json_encode($ar) ?>;
            $( "#automplete-2" ).autocomplete({
               source: ar,
               autoFocus:true
            });
         });
      </script>










