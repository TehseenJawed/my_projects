<script script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
   
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
 include('config.php');  



/*$vc= $_GET["vc_id"];

if (isset($_GET['vc_id'])) {
    $query="SELECT * from new_customer_reg WHERE cnic=$vc";
  
    $resultt=mysqli_query($connect,$query);   
}*/



  $page_title = 'Process Project';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   
        $queryy="SELECT * from 7_addproj1";
        $q="SELECT * from  purchase_pro";

    $result1= $db->query($queryy);
     $result2= $db->query($q);
     static $countme = 0;

?>
<?php
  $page_title = 'Project Master File';
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
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>



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

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

</style>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-13">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspProcess Project</h1>
         </strong>
        </div>
    <div class="panel-body">
    
    	


    	    <div class="form-group">
          <form method="POST" action="pro_project.php">
          	<div class="table-responsive">
		            <TABLE id="dataTable" class="table   table-condensed table-striped table-hover table-bordered">
		            	<strong><center>Item form Inventory</center></strong>
		             	<tr>
		             		<th>Project Name</th>
		             	     
		                      <td>
		             	     
		                     <select name="p_name" class="form-control nam" required>
		                     	<option value="">Select Project</option>
		       

							       <?php


							       while($row1=mysqli_fetch_array($result1)):;?>
							       <option value=<?php echo $row1[1]  ?>>
							       <?php echo $row1[1];  
							       ?> </option>

							     <?php endwhile;?>


							</select>
		             	     </td>
											
		                
		                    
											
		             	
		             	</tr>
						
		                <tr>
		             	
		             		<th></th>
		             		<th>Product</th>
		             	    <th>Quantity</th>
		             	    <th>Date</th>
		             	    						
		             	 </tr>
		             	 <tr>
		             
	

		        
		
		             	
		             	<td>
		             		<INPUT type="checkbox"  name="chk"/>

		             	</td>
		             	
		             	
		             	 <td>
		             	     
		                     <select name="pd_name[]" class="form-control nam">
		                     	<option value="">Select Product</option>
		       

							       <?php


							       while($row1=mysqli_fetch_array($result2)):;?>
							       <option value=<?php echo $row1[1]  ?>>
							       <?php echo $row1[1]; /*$countit =2;*/
							       ?> </option>

							     <?php endwhile;?>


							</select>
		             	     </td>
		             	<td>
		             		<input type="number" name="qty[]">
		             	</td>
		             	<td>
		             		<input type="date" name="datee[]">
		             	</td>
		             	
						<td><button type="button" onclick="addRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-plus form-control"></span> 

                </button><button type="button" onclick="deleteRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-trash form-control"></span></button></td>
		             </tr>

		           </TABLE>
		             <br>
		             <br>
               <TABLE id="dataTable1" class="table   table-condensed table-striped table-hover table-bordered">
               	<strong ><center><b>Extra Expense</b></center></strong>
		             <th>Extra Expense</th>
		             
		                  <th>Description</th>
		                  <th>Unit</th>
		                  <th>Quantity</th>
		                 
		                   <th> Price</th>

		             <tr>
		             	<td>
		             		<INPUT type="checkbox"  name="next"/>

		             	</td>
		             	
		             
                     <td>
		             <input type="text" name="desc[]" placeholder="Enter Description" class="form-control">
		         </td>
		         
		         <td>
		         	<input type="text" name="unit[]" placeholder="Enter Unit" class="form-control">

		         </td>
		         
		         <td><input type="number" id="cs12" name="qty2[]" placeholder="Enter Quantity" class="form-control">
                 </td>
                 
		         <td><input type="number" id="cs13"   name="pr2[]" placeholder="Enter Price" class="form-control">
                 </td> 
                 <td><input type="date"    name="exdatee[]" placeholder="Enter Price" class="form-control">
                 </td> 
                 
		         
                  
                 <td><button type="button" onclick="addRow2('dataTable1')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-plus form-control"></span> 
                </button><button type="button" onclick="deleteRow1('dataTable1')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-trash form-control"></span></button></td>             
		     </tr></TABLE>
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
	$q=$_POST['qty'];
	$cou = count($_POST['desc']);
	$cou2 = count($_POST['pd_name']);
	$q1="SELECT quantity from purchase_pro where pro_name= $cou2";
    $res=$db->query($q1);
    //$datee=$_POST['datee'];
    //$datee=$_POST['exdatee'];
        $count_merge_array=count(array_merge($_POST['pd_name'],$_POST['desc']));

//For Both invnetory & ex

if($_POST['pd_name'][0]!='' && $_POST['desc'][0]!='')
 {   
  
  
   for($j = 0 ; $j <  $count_merge_array; $j++)
   {
    /*$name=$_POST['pd_name'];*/
    $pd_name=$_POST['pd_name'][$j];
    $qtys= $_POST['qty'][$j];
    $qq="SELECT * from purchase_pro WHERE pro_name='$pd_name'";
     $result1= $db->query($qq);
      $row1=mysqli_fetch_array($result1); 
      $one_pcs_price=$row1['one_pcs_price'];
      $q = $row1['quantity'];
      $p = $row1['price'];
      
    
      $one_price =(int) $p/$q;

       $prod_p = $_POST['qty'][$j]*$one_pcs_price;

   //  $total_price=$q[$j]*$one_pcs_price;
      $exprod_pr = (int)$_POST['qty2'][$j] * (int)$_POST['pr2'][$j];
     $q1 = "INSERT INTO pro_project(p_name,pro_name,Quantity,Ex_desc,Ex_unit,Ex_quantity,Ex_price,Ex_total,prod_price,datee,exdatee)
     values('{$_POST['p_name']}','{$_POST['pd_name'][$j]}','{$_POST['qty'][$j]}','{$_POST['desc'][$j]}','{$_POST['unit'][$j]}','{$_POST['qty2'][$j]}','{$_POST['pr2'][$j]}','$exprod_pr','$prod_p','{$_POST['datee'][$j]}','{$_POST['exdatee'][$j]}')";
  if($qtys!='')
   {
      $qqq1="UPDATE purchase_pro SET quantity= quantity - $qtys WHERE pro_name='$pd_name'";
      $qq1="UPDATE item_reg SET quantity= quantity - $qtys WHERE item_name='$pd_name'";
     	if($db->query($qqq1))
      {
        
      } 
     	if($db->query($qq1))
      {

      } 
     	 if($db->query($q1))
      {

      } 
   }

       
           
}
     echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="pro_project.php"';
        echo '</script>';
 
}


//only Inventory
if($_POST['pd_name'][0]!='' && $_POST['desc'][0]=='')
     {
	for($j = 0 ; $j < $cou2; $j++)
   {
    /*$name=$_POST['pd_name'];*/
    $pd_name=$_POST['pd_name'][$j];
    $qtys= $_POST['qty'][$j];
    $qq="SELECT * from purchase_pro WHERE pro_name='$pd_name'";
     $result1= $db->query($qq);
      $row1=mysqli_fetch_array($result1); 
      $one_pcs_price=$row1['one_pcs_price'];
      $q = $row1['quantity'];
      $p = $row1['price'];
      
    
      //$one_price =(int) $p/$q;

       $prod_p = $_POST['qty'][$j]*$one_pcs_price;

   //  $total_price=$q[$j]*$one_pcs_price;
     
     $q1 = "INSERT INTO pro_project(p_name,pro_name,Quantity,Ex_desc,Ex_unit,Ex_quantity,Ex_price,Ex_total,prod_price,datee,exdatee)
     values('{$_POST['p_name']}','{$_POST['pd_name'][$j]}','{$_POST['qty'][$j]}','0','0','0','0','0','$prod_p','{$_POST['datee'][$j]}','{$_POST['exdatee'][$j]}')";

   
     $qqq1="UPDATE purchase_pro SET quantity= quantity - $qtys WHERE pro_name='$pd_name'";
     $qq1="UPDATE item_reg SET quantity= quantity - $qtys WHERE item_name='$pd_name'";
     	if($db->query($qqq1))
     {

     } 
     	if($db->query($qq1))
     {

     } 
     	 if($db->query($q1))
     {

     } 
   

       
           
}
echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="pro_project.php"';
        echo '</script>';
}
//only for ex

if ($_POST['desc'][0]!='' && $_POST['pd_name'][0]=='') {
	
  	for($j = 0 ; $j <$cou; $j++)
   {
    /*$name=$_POST['pd_name'];*/
     $prod_pr = (int)$_POST['qty2'][$j] * (int)$_POST['pr2'][$j];
     $q1 = "INSERT INTO pro_project(p_name,pro_name,Quantity,Ex_desc,Ex_unit,Ex_quantity,Ex_price,Ex_total,prod_price,datee,exdatee)
     values('{$_POST['p_name']}','0','0','{$_POST['desc'][$j]}','{$_POST['unit'][$j]}','{$_POST['qty2'][$j]}','{$_POST['pr2'][$j]}', '$prod_pr','0','{$_POST['datee'][$j]}','{$_POST['exdatee'][$j]}')";
     	


     	if($db->query($q1)){
     	         	}
    
   

       
           
}
echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="pro_project.php"';
        echo '</script>';

}
else
{
    echo '<script language="javascript">';
        echo 'alert("OPs! Something went wrong.."); location.href="pro_project.php"';
        echo '</script>';
}
		             
        
   /* $qty1=$_POST['qty'];
    $descrp=$_POST['desc'];
    $unit=$_POST['unit'];
    $q2=$_POST['qty2'];
    $price=$_POST['pr2'];
    $total=$_POST['tpp2'];
*/

  
/* $query2= "UPDATE item_reg set no_of_pcs = no_of_pcs- '$qty1' where item_name='$i'";
 $db->query($query2);*/
 /*$q = "insert into item_formula( item_name,product_name,qty) values('$product','$i','$quantity')" ;*/
  
   /*if($db->query($q))*/

  
}
         


?>

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
			/*var cell2 = row.insertCell(1);
			cell2.innerHTML = rowCount+1;*/

            
			var cell3 = row.insertCell(1);
			var element2 = document.createElement("select");
			element2.name = "pd_name[]";
			element2.class = "form-control";
			 <?php

                 
				$ar = array();
				include 'config.php' ;


				$q ="SELECT * from purchase_pro";

				if($res = $db->query($q))

				{

				   while ($row = $res->fetch_assoc()) {

				    array_push($ar,$row['pro_name']); 


				      # code...
				   }

				}
            


             ?>
             var cars = <?php echo json_encode($ar) ?>;

			
                 var options_str = "";
                 options_str += '<option value="">Select Product</option>';
				cars.forEach( function(car) {
				  options_str += '<option value="' + car + '">' + car + '</option>';
				});

				element2.innerHTML = options_str;
              
			
			cell3.appendChild(element2);
			
			var cell4 = row.insertCell(2);
			var element3 = document.createElement("input");
			element3.type = "number";
			element3.name = "qty[]";
		    element2.class = "form-control";
			cell4.appendChild(element3);
			
			var cell5 = row.insertCell(3);
			var element4 = document.createElement("input");
			element4.type = "date";
			element4.name = "datee[]";
		    //element2.class = "form-control";
			cell5.appendChild(element4);

			 

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

	
		function addRow2(tableID1) {

			var table = document.getElementById(tableID1);
         
			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="next[]";

			cell1.appendChild(element1);
			/*var cell2 = row.insertCell(1);
			cell2.innerHTML = rowCount+1;*/

           
			
			var cell2 = row.insertCell(1);
			var element3 = document.createElement("input");
			element3.type = "text";
			element3.name = "desc[]";
		    
		    cell2.appendChild(element3);

			
		    var cell4 = row.insertCell(2);
			var element5 = document.createElement("input");
			element5.type = "text";
			element5.name = "unit[]";
		    
		    cell4.appendChild(element5);
		    var cell5 = row.insertCell(3);
			var element6 = document.createElement("input");
			element6.type = "number";
			element6.name = "qty2[]";
			element6.id="cs12[]";
		    
		    cell5.appendChild(element6);
		    var cell5 = row.insertCell(4);
			var element7 = document.createElement("input");
			element7.type = "number";
			element7.id="cs13[]";
		
			element7.name = "pr2[]";

		    
		    cell5.appendChild(element7); 

		    var cell6 = row.insertCell(5);
			var element8 = document.createElement("input");
			element8.type = "date";
			//element8.id="ans[]";
			element8.name = "exdatee[]";
		    cell6.appendChild(element8);
		}

		function deleteRow1(tableID1) {
			try {
			var table = document.getElementById(tableID1);
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
	
