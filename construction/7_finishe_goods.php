<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
<?php
 include('config.php');  
/*
$hostname="localhost";

$username="asteamso_soft";

$password="5karachi5";

$databaseName="asteamso_soft";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);


$vc= $_GET["vc_id"];

if (isset($_GET['vc_id'])) {
    $query="SELECT * from new_customer_reg WHERE cnic=$vc";
  
    $resultt=mysqli_query($connect,$query);   
}*/



  $page_title = 'Requisition';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  
        $queryy="SELECT * from new_customer_reg";

    $result11= $db->query($queryy);

?>
<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(6);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>


  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspNew Requisition</h1>
         </strong>
        </div>
    <div class="panel-body">
    	<!DOCTYPE html>
    	<html>
    	<head>
    		<HEAD>

	<SCRIPT>
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
			cell2.innerHTML = rowCount+1;


			var cell3 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.name = "des[]";
			element2.class = "form-control";
              
			
			cell3.appendChild(element2);
			
			var cell4 = row.insertCell(3);
			var element3 = document.createElement("input");
			element3.type = "text";
			element3.name = "masstype[]";
		    element2.class = "form-control";
			cell4.appendChild(element3);

			 var cell5 = row.insertCell(4);
			var element4 = document.createElement("input");
			element4.type = "text";
			element4.name = "unit[]";
		    element4.class = "form-control";
			cell5.appendChild(element4);

			var cell6 = row.insertCell(5);
			var element5 = document.createElement("input");
			element5.type = "text";
			element5.name = "balance[]";
		    element5.class = "form-control";
			cell6.appendChild(element5);


			var cell7 = row.insertCell(6);
			var element6 = document.createElement("input");
			element6.type = "text";
			element6.name = "qty[]";
		    element6.class = "form-control";
			cell7.appendChild(element6);


			var cell8 = row.insertCell(7);
			var element7 = document.createElement("input");
			element7.type = "text";
			element7.name = "cc[]";
		    element7.class = "form-control";
			cell8.appendChild(element7);


			var cell9 = row.insertCell(4);
			var element8 = document.createElement("input");
			element8.type = "text";
			element8.name = "rmk[]";
		    element8.class = "form-control";
			cell9.appendChild(element8);


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
<style>







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

    	    <div class="form-group">
          <form method="POST" action="7_finishe_goods.php">
          	<div class="table-responsive">
		            <TABLE id="dataTable" class="table   table-condensed table-striped table-hover table-bordered">
		             	<tr>
		             		<th>Requisition To</th>
		                
		                    <td>
		                    	<input type="text" name="reqto">
		                    
		                                    </td>
											
		                
		                    
											
		             	
		             	</tr>
						<tr>
						
						
											<th>Note</th>
											<td>
		                    	<input type="text" name="note">
		                    
		                                    </td>
		       </tr>
			   
			   <tr>
						
						
											<th>Date</th>
											<td>
		                    	<input type="date" name="date">
		                    
		                                    </td>
		       </tr>

		                <tr>
		             		<th></th>
		             		<th>Code</th>
		             	    <th>Description</th>
		             	    <th>Mass Type</th>
		             	    <th>Unit</th>
		             	    <th>Balance</th>
		             	    <th>Quantity</th> 
							<th>Cost Center</th>
		             	    <th>Remarks</th>							
		             	 </tr>
		             	 <tr>
		             
	

		        
		
		             	
		             	<td>
		             		<INPUT type="checkbox"  name="chk"/>

		             	</td>
		             	<TD id="idd"> 1 </TD> 
		             	
		             	<td>
		             		<input type="text" name="des[]">
		             	</td>
		             	<td>
		             		<input type="text" name="masstype[]">
		             	</td>
		             	<td>
		             		<input type="text"  name="unit[]">
		             	</td>
		             	<td>
		             		<input type="text" name="balance[]">
		             	</td>
		             	<td>
		             		<input type="text" name="qty[]">
		             	</td>
		             	<td>
		             		<input type="text" name="cc[]">
		             	</td>
						<td>
		             		<input type="text" name="rmk[]">
		             	</td>
						<td><button type="button" onclick="addRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-plus form-control"></span> 
                </button><button type="button" onclick="deleteRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-trash form-control"></span></button></td>
		             </tr>

		             </table>
                <input type="submit" style="color: white; height: 45px;" class="btn-success form-control" name="submit">

	           </form>
			</div>
            </div>
			</div>
			</div>
			</div>

</body>
</html>			
		 
<?php

if(isset($_POST['submit']))
{

      $req=$_POST['reqto'];          
    $req1=$_POST['note'];
    $req2=$_POST['date'];
    $req3=$_POST['des'];
    $req4=$_POST['masstype'];
    $req5=$_POST['unit'];
    $req6=$_POST['balance'];
    $req7=$_POST['qty'];

    
    $req8=$_POST['cc'];

    $req9=$_POST['rmk'];
    for($j =  0 ; $j < sizeof($req3) ; $j++)
{
	 $des = $req3[$j] ;
	 $masstype=$req4[$j];
	 $unit=$req5[$j];
	 $bln=$req6[$j];
	 $qty=$req7[$j];
	 $cc=$req8[$j];
	 $rmk=$req9[$j];

	 $q = "insert into requisition_to( requ,note,date,description,Mas_ty,unit,balance,qty,cost_c,remarks) values('$req','$req1','$req2','$des','$masstype','$unit','$bln','$qty','$cc','$rmk')";

    
    include('config.php');
   if($db->query($q))
     {
     	echo '<script language="javascript">';
       echo 'alert("Successfully Registered"); location.href="7_finishe_goods.php"';
       echo '</script>';
     } 
}

	
 
 
   

 
}

?>
<script type="text/javascript">
	

$(document).ready(function() {

$('#voucher_cat').change(function(){
   //$('#select_2').show();
  
var myName=$('#voucher_cat').val();
window.location.href="email.php?vc_id="+myName;


});
});



</script>
	
