
<?php
include("admin_header.php");
include("config.php");
$sql="SELECT * FROM events";
  $result = mysqli_query($con, $sql);
  $sql="SELECT * FROM p_data_entry";
  $result1 = mysqli_query($con, $sql);
  
?>
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
      cell2.innerHTML = rowCount + 0;


      var cell3 = row.insertCell(2);
      var element2 = document.createElement("input");
      element2.type="text";
      element2.name = "p_name[]";
      element2.placeholder="Patient Name";
      element2.class = "form-control";
      
      cell3.appendChild(element2);
      
      var cell4 = row.insertCell(3);
      var element3 = document.createElement("input");
      element3.type = "text";
      element3.name = "dis[]";
      element3.placeholder="Patient Disease";
     ;
      element3.Class="form-control";

      cell4.appendChild(element3);

       var cell5 = row.insertCell(4);
      var element4 = document.createElement("input");
      element4.type = "number";
      element4.name = "num[]";
      element4.placeholder="Patient Phone";
     
      element4.Class="form-control";

      cell5.appendChild(element4);


var cell6 = row.insertCell(5);
      var element5 = document.createElement("SELECT");
      element5.type = "number";
      element5.name = "c_type[]";
      element5.placeholder="Patient Phone";
      element5.Class="form-control";
    var options_str = "";
                 options_str += '<option value="">Select Item Here</option>';
                 options_str += '<option value="New">New</option>';
                 options_str += '<option value="Old">Old</option>';
                 options_str += '<option value="Classified">Classified</option>';
        element5.innerHTML = options_str;
        cell6.appendChild(element5);
        


       var cell7 = row.insertCell(6);
      var element6 = document.createElement("input");
      element6.type = "date";
      element6.name = "datee[]";
      element6.placeholder="Patient Phone";
     
      element6.Class="form-control";

      cell7.appendChild(element6);






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





<div class="containerfluid">
  
  <div class="col-md-12">
    <h1 style="margin-left: 170px; color: #084365 ;">Events in Patient</h1>
    <br>




<form method="POST" action="p_events.php">
      <TABLE id="dataTable" class="table   table-condensed table-striped table-hover table-bordered">
        <tr>

         <th>Events Name</th>

        <td colspan="2">
          <select class="form-control" name="events">         
            <option value="">Select Events name</option>
            <?php while ($row=mysqli_fetch_assoc($result)) {
           ?>
          <option value="<?php echo $row['name']?>"><?php echo $row['name']; ?></option>
       <?php
     }
     ?>
   </select>
        </td>

                </tr>
        <TR>
        <TD><INPUT type="checkbox"  name="chk"/></TD>
        <TD id="idd"> 1 </TD>
         

        <td>
         <input type="text" placeholder="Patient Name" name="p_name[]" class="form-control">
        </td>
        
        <td>
          <input required="required" placeholder="Patient Disease" class="form-control" type="text" name="dis[]">
        </td>

           <td>
          <input type="number" placeholder="Patient Phone" required="required" class="form-control" name="num[]">
        </td>
       
        <td>
          <select name="c_type[]" required="required" class="form-control">
            <option>Select customer type</option>
            <option>New</option>
            <option>Old</option>
            <option>Classified</option>
          </select>
        </td>
       
        <td>
          <input type="date" class="form-control" required="required" name="datee[]">
        </td>


        <td><button type="button" onclick="addRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-plus form-control"></span> 
                </button><button type="button" onclick="deleteRow('dataTable')" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-trash form-control"></span></button></td>
       </TR>
    </TABLE>
     <input type="submit" style="color: white; height: 45px;" class="btn-success form-control" name="submit">
</form>








  </div>
  
</div>
<?php
if(isset($_POST['submit']))
{
   $events=$_POST['events'];
   $name=$_POST['p_name'];
   $dis=$_POST['dis'];
   $p_num=$_POST['num'];
   $c_type=$_POST['c_type'];
   $datee=$_POST['datee'];
   for($j =  0 ; $j < sizeof($name) ; $j++)
{
  $namee = $name[$j] ;
  $diss = $dis[$j] ;
   $p_numm = $p_num[$j] ;
  $c_typee = $c_type[$j] ;
   $dateee = $datee[$j] ;
  


$sql = "INSERT INTO p_events (events,name,disease,p_num,c_type,datee) VALUES ('$events','$namee','$diss','$p_numm','$c_typee','$dateee')";

if ($con->query($sql) === TRUE) {
        echo '<script>';
        echo 'alert("Successfully Registered");';
        echo '</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;

}

}

}




?>